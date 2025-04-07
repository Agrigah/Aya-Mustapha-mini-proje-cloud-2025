<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour du statut</title>
</head>
<body>
    <h1>Bonjour, <?php echo e($data['userName']); ?></h1>
    <p>Votre réservation pour la voiture <?php echo e($data['carModel']); ?> a été mise à jour.</p>
    <p>Date de location : <?php echo e($data['rentalDate']); ?></p>
    <p>Merci d'avoir utilisé notre service.</p>
</body>
</html>
<?php /**PATH C:\Users\Hp\Downloads\CarRentalManagement-Laravel-main\resources\views/emails/rental_status_update.blade.php ENDPATH**/ ?>