<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
    <h1>Registre-se</h1>
    <form action="/registerPost" method="POST">
        @csrf
        <input name="name" type="text" placeholder="Nome Completo">
        <input name="email" type="email" placeholder="E-Mail">
        <input name="password" type="password" placeholder="Senha">
        <button type="submit">Registrar</button>
    </form>
</body>
</html>