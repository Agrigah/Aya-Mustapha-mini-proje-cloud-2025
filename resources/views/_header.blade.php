<!DOCTYPE html>
<html ang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/user.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cars.css') }}" />
    <title>Location voiture </title>
    <style>
        /* Personnalisation des couleurs */
        .navbar {
            background-color: #010530; /* Couleur de fond de la navbar */
            animation: slideIn 1s ease-out; /* Animation de la barre de navigation */
        }

        .navbar-brand {
            color: #ffffff; /* Couleur du texte de la marque */
        }

        .navbar-toggler-icon {
            background-color: #ffffff; /* Couleur de l'icône du menu mobile */
        }

        .nav-link {
            color: #f1f1f1; /* Couleur des liens de navigation */
            transition: color 0.3s ease; /* Transition pour la couleur des liens */
        }

        .nav-link:hover {
            color: #ff9800; /* Couleur des liens au survol */
        }

        .nav-item.active .nav-link {
            color: #ff9800; /* Couleur du lien actif */
        }

        .navbar-nav .nav-item .nav-link {
            font-weight: 300;
        }

        .navbar-nav .nav-item .nav-link.fs-5 {
            font-size: 1.125rem; /* Ajuste la taille de police des liens */
        }

        /* Animation de la barre de navigation */
        @keyframes slideIn {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Animation de chaque élément du menu au survol */
        .nav-item {
            animation: fadeIn 0.6s ease-in-out forwards;
            opacity: 0;
        }

        .nav-item:nth-child(1) {
            animation-delay: 0.1s;
        }
        .nav-item:nth-child(2) {
            animation-delay: 0.2s;
        }
        .nav-item:nth-child(3) {
            animation-delay: 0.3s;
        }
        .nav-item:nth-child(4) {
            animation-delay: 0.4s;
        }
        .nav-item:nth-child(5) {
            animation-delay: 0.5s;
        }

        /* Animation pour chaque élément */
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
      <a class="navbar-brand mx-3 fs-5 text-white fw-medium" href="#">location voiture AM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link active fs-5 text-white fw-light mx-3" href="{{ route('car.acceuil') }}">Accueil</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fs-5 text-white fw-light mx-3" href="{{ route('car.cars') }}">Nos voitures</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fs-5 text-white fw-light mx-3" href="{{ route('page.contact') }}">Contact</a>
              </li>
              
              <!-- Onglets pour un utilisateur connecté -->
              @auth
                  <li class="nav-item">
                      <a class="nav-link fs-5 text-white fw-light mx-3" href="{{ route('users.rentals' , ['id' => Auth::user()->id ]) }}">Mes Locations</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fs-5 text-white fw-light mx-3" href="{{ route('user.logout') }}">Déconnexion</a>
                  </li>
              @endauth
              
              <!-- Onglets pour un administrateur -->
              @if(Auth::user() && Auth::user()->role === 'admin')
                  <li class="nav-item">
                      <a class="nav-link fs-5 text-white fw-light mx-3" href="{{ route('dashboard.index') }}">Dashboard</a>
                  </li>
              @endif
     
              <!-- Onglets pour un utilisateur non connecté -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link active fs-5 text-white fw-light mx-3" href="{{ route('page.login') }}">Connexion</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fs-5 text-white fw-light mx-3" href="{{ route('page.register') }}">Inscription</a>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>
</body>
</html>
