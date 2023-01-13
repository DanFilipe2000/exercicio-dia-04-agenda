<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editando um Contato</title>
</head>
<body>
    <h1>Crie um contato:</h1>
    <form action="/contacts/update/{{ $contact->id }}" method="POST">
        @csrf
        <input name="name" value="{{ $contact->name }}" type="text">
        <input name="email" value="{{ $contact->email }}" type="text">
        <input name="phone" value="{{ $contact->phone }}" type="text">
        <button type="submit">Editar</button>
    </form>
    <form action="/contacts/delete/{{ $contact->id }}">
        @csrf
        <button type="submit">Deletar contato</button>
    </form>
</body>
</html>