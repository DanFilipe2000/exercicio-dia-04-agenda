<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
</head>
<body>
    <h1>Meus Contatos</h1>
    <h4><a href="/contacts/create">Criar Contato</a></h4>
    <ol>
        @foreach ($contacts as $item)
        <h3>Nome: {{ $item->name }}</h3>
        <ul>
            <li>Email: {{ $item->email }}</li>
            <li>Phone: {{ $item->phone }}</li>
        </ul>
        <br>
        @endforeach
    </ol>
</body>
</html>