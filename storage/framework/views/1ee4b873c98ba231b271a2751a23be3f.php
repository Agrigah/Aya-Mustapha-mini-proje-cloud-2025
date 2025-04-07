<?php echo $__env->make('_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="login">
    <div class="container d-flex justify-content-center align-items-center login-container">
        <form class="w-50 my-5 px-5 py-3 form animated-form" method="POST" action="<?php echo e(route('user.login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-dark">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Entrez votre email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-dark">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Entrez votre mot de passe">
            </div>
            <?php if(session('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label text-dark" for="exampleCheck1">Cochez moi</label>
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
            <p class="mt-3 text-dark">Vous n'avez pas un compte ? <i><a href="<?php echo e(route('page.register')); ?>" class="text-warning">Inscrivez-vous</a></i></p>
        </form>
    </div>
</section>

<?php echo $__env->make('_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
    /* Fond de la section de connexion */
    .login {
        background-color: #f0f8ff; /* Bleu clair */
        min-height: 100vh;
    }

    .form {
        background-color: #ffffff; /* Fond de formulaire blanc */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-label {
        color: #333333; /* Couleur du texte pour les labels */
    }

    .form-control {
        border-radius: 5px;
        border: 1px solid #b0c4de; /* Bordure des champs de texte, bleu clair */
    }

    .btn-primary {
        background-color: #04115e; /* Bleu acier pour le bouton */
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #ff9800; /* Orange pour le survol du bouton */
        color: #fff;
    }

    .text-warning {
        color: #ff9800;
    }

    /* Animation d'apparition */
    .animated-form {
        animation: fadeIn 1s ease-out;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Style des liens */
    .text-warning:hover {
        color: #ff5722; /* Orange foncé au survol */
    }
</style>
<?php /**PATH C:\Users\Hp\Downloads\CarRentalManagement-Laravel-main\resources\views/login.blade.php ENDPATH**/ ?>