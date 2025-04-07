<?php echo $__env->make('_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="rentals p-5">
    <div class="container mt-5">
        <div class="mb-3 position-relative d-flex justify-content-between w-100">
            <form action="" method="get">
            <h3>Mes Location</h3>
            <input type="text" id="search" class="form-control w-50 mx-3" placeholder="Rechercher...">
            <button type="submit" class="btn btn-success w-25">Rechercher</button>
        </form>
        </div>
        <div class="d-flex flex-wrap mt-5">
            <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row mb-3">
                    <img src="<?php echo e(asset( $rental->car->images )); ?> " alt="voiture" class="col-5 px-3" />
                    <div class="col-6">
                        <?php if($rental->status == '1'): ?>
                            <h2 class="mb-2 fs-5 fw-medium text-center text-bg-info text-white p-3 mb-3">En attente d'approbation</h2>
                        <?php elseif( $rental->status == '2' ): ?>
                            <h2 class="mb-2 fs-5 fw-medium text-center text-bg-success text-white p-3 mb-3">Reversation Approuvée</h2>
                        <?php elseif( $rental->status == '3' ): ?>
                            <h2 class="mb-2 fs-5 fw-medium text-center text-bg-danger text-white p-3 mb-3">Reservation expirée</h2>
                        <?php endif; ?>
                        <p class="mb-2 fs-5 fw-light"><b>Designation</b>: <?php echo e($rental->car->brand); ?></p>
                        <p class="mb-2 fs-5 fw-light"><b>Model</b>: <?php echo e($rental->car->model); ?></p>
                        <p class="mb-2 fs-5 fw-light"><b>Debut de location</b>: <?php echo e(Str::substr($rental->rental_date, 0, 10)); ?></p>
                        <p class="mb-2 fs-5 fw-light"><b>Fin de location</b>: <?php echo e(Str::substr($rental->return_date, 0, 10)); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php echo $__env->make('_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hp\Downloads\CarRentalManagement-Laravel-main\resources\views/rentals.blade.php ENDPATH**/ ?>