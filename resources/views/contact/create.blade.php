<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastre um Contato</title>
</head>
<body>
    <h1>Crie um contato:</h1>
    <form action="/contacts/store" method="POST">
        @csrf
        <input name="name" placeholder="Nome" type="text">
        <input name="email" placeholder="Email" type="text">
        <input name="phone" placeholder="Telefone" type="text">
        <button type="submit">Criar</button>
    </form>
</body>
</html>