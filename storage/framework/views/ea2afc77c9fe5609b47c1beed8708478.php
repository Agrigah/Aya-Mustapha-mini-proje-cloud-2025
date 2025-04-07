<?php echo $__env->make('_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid min-vh-100 d-flex flex-column flex-md-row py-5 contact">
    <div class="container-md w-md-50 position-relative h-100 mt-5">
        <img src="<?php echo e(asset('assets/v2.jpg')); ?>" alt="Contactez-nous"
            class="img-fluid position-absolute rounded-md ease-in-out animate-img" />
    </div>

    <div class="bg-white py-4 container-md w-md-50 mt-5">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-weight-bold text-center mb-4  animate-text"style=" color: #ffcc00;">Contactez-nous</h2>
            <form class="max-w-md mx-auto animate-form">
                <div class="mb-3">
                    <label for="name" class="form-label text-dark">Nom</label>
                    <input type="text" id="name" name="name"
                        class="form-control border border-gray-300 rounded p-2 bg-light focus:outline-none focus-border-primary"
                        placeholder="Votre nom">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-dark">Email</label>
                    <input type="email" id="email" name="email"
                        class="form-control border border-gray-300 rounded p-2 bg-light focus:outline-none focus-border-primary"
                        placeholder="Votre email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label text-dark">Message</label>
                    <textarea id="message" name="message" rows="4"
                        class="form-control border border-gray-300 rounded p-2 bg-light focus:outline-none focus-border-primary"
                        placeholder="Votre message"></textarea>
                </div>
                <div class="text-center">
                    <a href="<?php echo e(route('car.acceuil')); ?>"
                        class="btn btn-primary w-100 h-40 text-white font-weight-bold">Envoyer</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $__env->make('_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
    /* Couleurs personnalisées */
    .text-primary {
        color: #010530; /* Bleu foncé */
    }

    .bg-white {
        background-color: #f9f9f9; /* Fond très léger */
    }

    .btn-primary {
        background-color: #010530; /* Bleu foncé */
        border: none;
        color: white;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #ffcc00; /* Jaune vif */
    }

    .form-control {
        border: 1px solid #ddd;
    }

    .form-control:focus {
        border-color: #010530; /* Bleu foncé pour la bordure au focus */
        box-shadow: 0 0 0 0.2rem rgba(1, 5, 48, 0.25); /* Effet de focus bleu clair */
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

    /* Animation pour les titres et formulaire */
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

    .animate-form {
        animation: fadeInForm 1.5s ease-in-out;
    }

    @keyframes fadeInForm {
        0% {
            opacity: 0;
            transform: translateX(-20px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>
<?php /**PATH C:\Users\Hp\Downloads\CarRentalManagement-Laravel-main\resources\views/contact.blade.php ENDPATH**/ ?>