<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\MailTouser;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    // Votre code ici
   public function create($carId)
{
    // Logique pour récupérer les informations sur la voiture et l'utilisateur
    $user = Auth::user();  // Supposons que l'utilisateur est connecté
    $car = Car::find($carId);
    $rentalDate = now();  // Exemple de date de location

    // Vérifiez si $car est bien trouvé
    if (!$car) {
        return redirect()->back()->with('error', 'Car not found');
    }

    // Préparez les données pour l'email
    $data = [
        'userName' => $user->name,
        'carModel' => $car->model,
        'rentalDate' => $rentalDate,
    ];

    // Envoyer l'email
    Mail::to($user->email)->send(new MailTouser($data));

    return redirect()->route('users.rentals', ['id' => $user->id]);
}}
