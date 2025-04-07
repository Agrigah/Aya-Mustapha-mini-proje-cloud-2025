<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour du statut</title>
</head>
<body>
    <h1>Bonjour, {{ $data['userName'] }}</h1>
    <p>Votre réservation pour la voiture {{ $data['carModel'] }} a été mise à jour.</p>
    <p>Date de location : {{ $data['rentalDate'] }}</p>
    <p>Merci d'avoir utilisé notre service.</p>
</body>
</html>
