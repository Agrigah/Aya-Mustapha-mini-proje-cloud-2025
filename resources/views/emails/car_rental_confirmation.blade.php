<!DOCTYPE html>
<html>
<head>
    <title>Car Rental Confirmation</title>
</head>
<body>
    <h1>Bonjour {{ $data['userName'] }}</h1>
    <p>Merci d'avoir réservé notre voiture {{ $data['carModel'] }}.</p>
    <p>Votre réservation est confirmée pour le {{ $data['rentalDate'] }}.</p>
</body>
</html>
