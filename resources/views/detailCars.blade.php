@include('_header')
<section class="detail py-5 bg-light">
    <div class="container d-flex h-100">
        <div class="informations w-50 h-100 px-5 animate-content">
            <img src="{{ asset($car->images)}}" alt="voiture" class="w-100 h-50 rounded-lg animate-img" />
            <div class="mt-3">
                <h2 class="mb-2 fs-5 fw-medium text-center  p-3 mb-3 animate-text"style="background-color: #010530; color: white;">{{ $car->model }}</h2>
                <p class="mb-2 fs-5 fw-light"><b>Designation</b>: {{ $car->brand }}</p>
                <p class="mb-2 fs-5 fw-light"><b>Model</b>: {{ $car->model }}</p>
                <p class="mb-2 fs-5 fw-light"><b>Actuellement Disponible</b>: 
                    @if ( $car->availability == 1 )
                        Oui
                    @else
                        Non
                    @endif
                </p>
                <p class="mb-2 fs-5 fw-light"><b>Année d'apparution</b>: {{ $car->year }}</p>
                <p class="mb-2 fs-5 fw-light"><b>Description</b>: {{ $car->description }}</p>
            </div>
        </div>
        <div class="planification w-50 h-100 d-flex flex-column justify-content-between">
            <h3 class="text-center t p-2 fw-light animate-text"style="background-color: #010530; color: white;">Planifier une réservation</h3>
            <div class="my-3 reservations animate-content">
                <p class="text-center fs-5 fw-medium">Les réservation en cours sur cette voiture</p>
                @forelse ($rentals as $rental)
                    <ul>
                        <li class="fs-4">{{ Str::substr($rental->rental_date, 0, 10) }} - {{ Str::substr($rental->return_date, 0, 10) }}</li>
                    </ul>
                @empty
                    <p class="text-center mt-5">Aucune réservation planifiée sur cette voiture</p>
                @endforelse
            </div>
            <form class="new-reservation animate-form" method="POST" action="{{ route('rental.create', ['carId' => $car->id ]) }}">
                @csrf
                <div class="mt-4">
                    <label for="pickupDate">Date de prise en charge :</label>
                    <input type="date" id="pickupDate" class="form-control" name="rental_date" />
                </div>
                <div class="mt-3">
                    <label for="returnDate">Date de retour :</label>
                    <input type="date" id="returnDate" class="form-control" name="return_date" />
                </div>
                @if(session('error'))
                    <div class="mt-3 alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if ($errors->reservationErrors->any())
                    <div class="mt-3 alert alert-danger">
                        <ul>
                            @foreach ($errors->reservationErrors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button class="btn btn-success mt-3" data-toggle="modal" data-target="#reservationModal">Réserver cette voiture</button>
            </form>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reservationModalLabel">Confirmation de réservation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Votre réservation pour la {{ $car->model }} a été
                    confirmée.</p>
                <p>Le montant total de la location est de 50 €/jour.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

@include('_footer')

<style>
    /* Couleurs personnalisées */
    .text-bg-primary {
        background-color: #010530; /* Bleu principal */
        color: white;
    }

    .bg-light {
        background-color: #f4f4f9; /* Fond léger */
    }

    .btn-success {
        background-color: #8ddd0b; /* Vert */
        border: none;
        color: white;
        transition: background-color 0.3s ease;
    }

    .btn-success:hover {
        background-color: #8ddd0b; /* Vert foncé */
    }

    .form-control {
        border: 1px solid #ddd;
    }

    .form-control:focus {
        border-color: #010530; /* Bleu au focus */
        box-shadow: 0 0 0 0.2rem rgba(1, 5, 48, 0.25); /* Effet de focus */
    }

    /* Animation pour l'image */
    .animate-img {
        animation: fadeInImg 1.5s ease-in-out;
    }

    @keyframes fadeInImg {
        0% {
            opacity: 0;
            transform: scale(0.9);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Animation pour les titres et sections */
    .animate-text {
        animation: fadeInText 1s ease-out;
    }

    @keyframes fadeInText {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-content {
        animation: fadeInContent 1.5s ease-in-out;
    }

    @keyframes fadeInContent {
        0% {
            opacity: 0;
            transform: translateX(-20px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-form {
        animation: fadeInForm 1.5s ease-in-out;
    }

    @keyframes fadeInForm {
        0% {
            opacity: 0;
            transform: translateX(20px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>
