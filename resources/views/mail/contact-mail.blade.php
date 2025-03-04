<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Salve, {{$username}}</h1>
    <h3>Ti ringraziamo per averci contattato!</h3>
    <p>Ecco un riepilogo dei dati forniti:</p>
    <ul>
        <li>Email: {{$useremail}}</li>
        <li>Messaggio: {{$usermessage}}</li>
    </ul>

</body>
</html>