@include('_header')

<section class="products py-5 bg-light">
    <div class="container-fluid">
        <!-- Titre de la section -->
        <div class="filtre-header">Nos voitures</div>

        <!-- Section principale avec les filtres et les résultats -->
        <section class="d-inline-flex bd-highlight">
            <!-- Bloc des filtres -->
            <div class="filtre-container">
                <div class="filtre">
                    <!-- Filtre par type -->
                    <div class="mb-3 p-2">
                        <label>Type :</label>
                        @foreach (['compact', 'sedan', 'berline', 'pickup', 'suv'] as $type)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="{{ $type }}Checkbox" value="{{ $type }}">
                            <label class="form-check-label" for="{{ $type }}Checkbox">{{ ucfirst($type) }}</label>
                        </div>
                        @endforeach
                    </div>

                    <!-- Filtre par capacité -->
                    <div class="mb-3">
                        <label>Capacités :</label>
                        @foreach ([2, 4, 5] as $capacity)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="persons{{ $capacity }}Checkbox" value="{{ $capacity }}">
                            <label class="form-check-label" for="persons{{ $capacity }}Checkbox">{{ $capacity }} personnes</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Bloc de recherche -->
            <div class="search-container d-flex flex-column">
                <!-- Barre de recherche -->
                <form method="GET" action="{{ route('cars.search') }}" class="d-flex align-items-center mb-3">
                    <div class="mb-3 position-relative d-flex w-100">
                        <input type="text" id="search" name="search" class="form-control w-90 mx-50" placeholder="Rechercher..."><br/>
                        <button type="submit" class="btn btn-primary w-50">Rechercher</button>
                    </div>
                </form>

               

            <!-- Résultats -->
            <div class="mt-5 d-flex flex-wrap justify-content-between all-products">
                @forelse ($cars as $car)
                <div class="item d-flex flex-column justify-content-between p-3 product-card">
                    <img src="{{ asset($car->images) }}" alt="voiture">
                    <div class="fw-light"><b>Designation</b> : {{ $car->brand }}</div>
                    <div class="fw-light"><b>Model</b> : {{ $car->model }}</div>
                    <div class="fw-light"><b>Prix</b> : 19$/Jour</div>
                    <button class="btn btn-primary">
                        <a class="lien text-white" href="{{ route('cars.detail', ['id' => $car->id]) }}">Voir plus</a>
                    </button>
                </div>
                @empty
                <p>Aucune voiture disponible pour le moment.</p>
                @endforelse
            </div>
        </section>
    </div>
</section>

@include('_footer')

<!-- CSS -->
<style>
    /* Section globale */
    .products {
        background-color: #f7f7f7; /* Gris clair */
    }

    .filtre-header {
        font-size: 1.5rem;
        font-weight: bold;
        color: #010530; /* Bleu foncé */
        margin-bottom: 20px;
    }

    /* Conteneur des filtres */
    .filtre-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 300px;
        margin-right: 30px;
    }

    /* Entrée de recherche */
    .form-control {
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Bouton principal */
    .btn-primary {
        background-color: #010530;
        border: none;
        color: white;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #ffcc00; /* Jaune vif */
    }

    /* Carte produit */
    .all-products .item {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        margin-bottom: 30px;
        width: 22%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .all-products .item:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .all-products img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }

    /* Liens */
    .lien {
        color: white;
        text-decoration: none;
    }

    .lien:hover {
        color: #010530; /* Bleu foncé */
    }

    /* Animation */
    body {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
</style>
