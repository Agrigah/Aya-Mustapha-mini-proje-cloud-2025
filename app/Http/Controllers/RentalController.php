<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Rental;
use Illuminate\Support\Facades\Validator;
use App\Mail\MailTouser;
use App\Mail\RentalStatusUpdate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
class RentalController extends Controller
{

    public function create(Request $request, $carId)
    {
        $validator = Validator::make($request->all(), [
            'rental_date' => 'required|date|after_or_equal:today',
            'return_date' => 'required|date|after:rental_date',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator, 'reservationErrors')->withInput();
        }

        // Récupérer l'ID de l'utilisateur connecté
        $userId = auth()->user()->id;

        // Vérifier si la date de début est antérieure à la date actuelle
        if (Carbon::parse($request->input('rental_date'))->lt(Carbon::today())) {
            return redirect()->back()->with('error', 'La date de début doit être égale ou postérieure à la date actuelle.');
        }

        // Vérifier si la date de retour est avant la date de début
        if (Carbon::parse($request->input('return_date'))->lte(Carbon::parse($request->input('rental_date')))) {
            return redirect()->back()->with('error', 'La date de retour doit être après la date de début.');
        }

        // Vérifier la disponibilité de la voiture
        $isCarAvailable = $this->checkCarAvailability($carId, $request->input('rental_date'), $request->input('return_date'));

        if (!$isCarAvailable) {
            return redirect()->back()->with('error', 'La voiture est déjà réservée pour cette période.');
        }

        // Enregistrement de la réservation
        Rental::create([
            'user_id' => $userId,
            'car_id' => $carId,
            'rental_date' => $request->input('rental_date'),
            'return_date' => $request->input('return_date'),
            'status' => '1',
        ]);

        return redirect()->route('users.rentals', ['id' => $userId])->with('success', 'Réservation effectuée avec succès!');
    }

    private function checkCarAvailability($carId, $rentalDate, $returnDate)
    {
        // Vérifier si la voiture est déjà réservée pour la période spécifiée
        $existingRentals = Rental::where('car_id', $carId)
            ->where(function ($query) use ($rentalDate, $returnDate) {
                $query->whereBetween('rental_date', [$rentalDate, $returnDate])
                    ->orWhereBetween('return_date', [$rentalDate, $returnDate])
                    ->orWhere(function ($query) use ($rentalDate, $returnDate) {
                        $query->where('rental_date', '<=', $rentalDate)
                            ->where('return_date', '>=', $returnDate);
                    });
            })
            ->exists();

        return !$existingRentals;
    }

    public function status($status, $id)
    {
        $rental = Rental::find($id);
    
        if (!$rental) {
            return redirect()->route('dashboard.rentals')->with('error', 'Rental not found.');
        }
    
        $user = $rental->user;
        $car = $rental->car;
    
        if (!$user || !$user->email) {
            Log::error('User or email not found for rental ID: ' . $id);
            return redirect()->route('dashboard.rentals')->with('error', 'User or email not found.');
        }
    
        if (!$car) {
            Log::error('Car not found for rental ID: ' . $id);
            return redirect()->route('dashboard.rentals')->with('error', 'Car not found.');
        }
    
        $data = [
            'userName' => $user->name,
            'carModel' => $car->brand . ' ' . $car->model,
            'rentalDate' => $rental->rental_date,
        ];
    
        try {
            $rental->update(['status' => $status]);
            Mail::to($user->email)->send(new RentalStatusUpdate($data));
    
            return redirect()->route('dashboard.rentals')->with('success', 'Reservation mise à jour avec succès!');
        } catch (\Exception $e) {
            Log::error('Email sending failed for rental ID: ' . $id . ' - ' . $e->getMessage());
            return redirect()->route('dashboard.rentals')->with('error', 'Failed to send email.');
        }
    }
    


    public function destroy($id)
    {
        $rental = Rental::find($id);
        $rental->delete();

        return redirect('/dashboard/rentals')->with('success', 'Réservation supprimée avec succès!');
    }
}
