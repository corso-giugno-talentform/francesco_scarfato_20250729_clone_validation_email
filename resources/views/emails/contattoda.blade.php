<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>Sei stato contattato dall'utente {{ $data['firstname'] }} {{ $data['lastname'] }}</p>
    <p>Con indirizzo email {{ $data['email'] }}</p>
    <p>Messaggio inviato: {{ $data['message'] }}</p>
</body>

</html>
