<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hai ricevuto un messaggio da {{$lead->name}}</h1>
    <h2>Oggetto del messaggio: {{$lead->mailObject}}</h2>
    <span>Oggetto del messaggio: <span>{{$lead->message}}</span></h2>
</body>
</html>