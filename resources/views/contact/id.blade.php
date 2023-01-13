<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato pelo id</title>
</head>
<body>
    <h1>Nome: {{ $contact->name }}</h1>
    <h3>Email: {{ $contact->email }}</h3>
    <h3>Phone: {{ $contact->phone }}</h3>
</body>
</html>