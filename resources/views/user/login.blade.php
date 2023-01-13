<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/signin" method="POST">
        @csrf
        <input name="email" type="email" placeholder="E-Mail">
        <input name="password" type="password" placeholder="Senha">
        <button type="submit">Entrar</button>
    </form>
    <p>Ainda não tem uma conta?<a href="/register"> Registre-se aqui!</a></p>
</body>
</html>