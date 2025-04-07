@include('_header')

<section class="welcome">
    <div class="item d-flex flex-column align-items-center justify-content-center text-white">
        <div class="titre text-center animate-text">Car Rental Management</div>
        <p class="text-center mb-5 fw-light fs-1 animate-text">vous souhaite la bienvenue</p>
        <a href="{{ route('car.cars') }}" class="btn btn-custom animate-btn">Découvrez nos voitures</a>
    </div>
</section>

<section class="about py-5">
    <div class="container d-flex justify-content-between about-container">
        <img src="assets/v1.webp" alt="about" />
        <div class="d-flex flex-column justify-content-between content">
            <h3 class="text-center text-custom animate-text">À propos de nous</h3>
            <p class="fw-light animate-content">Bienvenue sur notre plateforme de gestion de location de voitures ! Chez Location voiture AM, nous sommes passionnés par la simplification du processus de location de voitures pour offrir une expérience utilisateur fluide et agréable. Lorem, ipsum dolor sit amet consectetur adipisicing elit...</p>
            <p class="fw-light animate-content">Notre mission est de fournir à nos utilisateurs un moyen pratique et efficace de gérer la location de véhicules...</p>
            <a href="{{ route('page.contact') }}" class="btn btn-custom animate-btn">Contactez-nous</a>
        </div>
    </div>
</section>

<section class="innovation py-5">
    <div class="container innovation-container">
        <div class="fs-3 text-custom">Pourquoi nous choisir ?</div>
        <div class="d-flex flex-column w-100 mt-5">
            <div class="item d-flex w-100 mb-4 animate-content">
                <span class="text-bg-custom number text-white fw-bold fs-3">1</span>
                <div class="d-flex flex-column content mx-3 justify-content-center">
                    <p class="mb-3 title text-custom fs-3">Gestion intuitive</p>
                    <p class="description fw-light">Grâce à notre interface utilisateur conviviale, la gestion des véhicules devient un jeu d'enfant.</p>
                </div>
            </div>
            <div class="item d-flex w-100 mb-4 mx-5 animate-content">
                <span class="text-bg-custom number text-white fw-bold fs-3">2</span>
                <div class="d-flex flex-column content mx-3 justify-content-center">
                    <p class="mb-3 title text-custom fs-3">Sécurité Avancée</p>
                    <p class="description fw-light">Vos données sont notre priorité. Nous mettons en œuvre des mesures de sécurité avancées pour assurer la confidentialité et l'intégrité de vos informations.</p>
                </div>
            </div>
            <div class="item d-flex w-100 mb-4 animate-content">
                <span class="text-bg-custom number text-white fw-bold fs-3">3</span>
                <div class="d-flex flex-column content mx-3 justify-content-center">
                    <p class="mb-3 title text-custom fs-3">Flexibilité Personnalisée</p>
                    <p class="description fw-light">Nos fonctionnalités peuvent être adaptées pour répondre à vos exigences spécifiques, que vous soyez un utilisateur individuel ou une entreprise.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products py-5">
    <div class="container products-container">
        <div class="fs-3 text-custom">Nos voitures</div>
        <div class="mt-5 d-flex flex-wrap justify-content-between all-products">
            @foreach ($cars as $car)
                <div class="item d-flex flex-column justify-content-between p-3">
                    <img src="{{ asset($car->images) }}" alt="voiture" />
                    <div class="fw-light"><b>Designation</b> : {{ $car->brand }}</div>
                    <div class="fw-light"><b>Model</b> : {{ $car->model }}</div>
                    <div class="fw-light"><b>Prix</b> : 19$/Jour</div>
                    <button class="btn btn-custom">
                        <a class="lien" href="{{ route('cars.detail', ['id' => $car->id]) }}">Voir plus</a>
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="testimony py-5">
    <div class="container testimonies-container">
        <div class="fs-3 text-custom">Nos clients témoignent</div>
        <div class="mt-5 d-flex flex-wrap justify-content-between all-testimonies">
            <div class="testimony-item p-3">
                <div class="testimony-text-container">
                    <p class="text-justify fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit...</p>
                </div>
                <div class="testimony-user">
                    <img src="{{ asset('assets/v1.webp') }}" class="testimony-user-logo">
                    <p>Charlot DEDJINOU</p>
                </div>
                <div>Expert Debugger</div>
            </div>
            <div class="testimony-item p-3">
                <div class="testimony-text-container">
                    <p class="text-justify fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit...</p>
                </div>
                <div class="testimony-user">
                    <img src="{{ asset('assets/v4.jpg') }}" class="testimony-user-logo">
                    <p>Destiny Espoir Joël</p>
                </div>
                <div>Data Scientist</div>
            </div>
            <div class="testimony-item p-3">
                <div class="testimony-text-container">
                    <p class="text-justify fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit...</p>
                </div>
                <div class="testimony-user">
                    <img src="{{ asset('assets/v3.jpg') }}" class="testimony-user-logo">
                    <p>Samira Bandolo</p>
                </div>
                <div>Developpeuse Web</div>
            </div>
            <div class="testimony-item p-3">
                <div class="testimony-text-container">
                    <p class="text-justify fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit...</p>
                </div>
                <div class="testimony-user">
                    <img src="assets/v1.webp" class="testimony-user-logo">
                    <p>Samira MVOGO</p>
                </div>
                <div>Developpeuse Mobile</div>
            </div>
        </div>
    </div>
</section>

<section class="newsletter py-5">
    <div class="newsletter-container container d-flex flex-column align-items-center text-bg-custom py-5">
        <p class="fs-3 mb-5 text-light">Souscrivez à nos newsletter</p>
        <form class="newsletter-form">
            <input type="email" placeholder="example@gmail.com" class="newsletter-input">
            <input type="submit" value="S'abonner" class="newsletter-submit">
        </form>
    </div>
</section>


@include('_footer')

<style>
    .text-bg-custom {
        background-color: #010530;
        color: white;
    }

    .text-light {
        color: #f1f1f1;
    }

    .newsletter-input {
        padding: 10px;
        border: 2px solid #010530;
        border-radius: 5px;
        margin-bottom: 10px;
        width: 100%;
        max-width: 400px;
        transition: border-color 0.3s ease;
    }

    .newsletter-input:focus {
        outline: none;
        border-color: #007bff;
    }

    .newsletter-submit {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        max-width: 200px;
        transition: background-color 0.3s ease;
    }

    .newsletter-submit:hover {
        background-color: #0056b3;
    }
    /* Couleur personnalisée */
    .text-custom {
        color: #010530;
    }

    .text-bg-success {
        background-color: #ffcc00;
        color: white;
    }

    .btn-custom {
        background-color: #010530;
        border: none;
        color: white;
        transition: background-color 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #ffcc00;
    }

    /* Animations */
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

    .animate-btn {
        animation: fadeInButton 1s ease-in-out;
    }

    @keyframes fadeInButton {
        0% {
            opacity: 0;
            transform: translateY(10px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
