<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nou missatge de contacte</title>
</head>
<body>
    <h1>Nou missatge de contacte</h1>
    <p><strong>Nom:</strong> {{ $data['nom'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Missatge:</strong></p>
    <p>{{ $data['missatge'] }}</p>
</body>
</html>
