<!DOCTYPE html>
<html>
<head>
    <title>Car Rental Confirmation</title>
</head>
<body>
    <h1>Bonjour <?php echo e($data['userName']); ?></h1>
    <p>Merci d'avoir réservé notre voiture <?php echo e($data['carModel']); ?>.</p>
    <p>Votre réservation est confirmée pour le <?php echo e($data['rentalDate']); ?>.</p>
</body>
</html>
<?php /**PATH C:\Users\Hp\Downloads\CarRentalManagement-Laravel-main\resources\views/emails/car_rental_confirmation.blade.php ENDPATH**/ ?>