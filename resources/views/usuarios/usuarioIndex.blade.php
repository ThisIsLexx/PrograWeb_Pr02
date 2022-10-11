<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariscos cheos - Login</title>
</head>
<body>
    <h2>INICIO DE SESIÓN</h2>

    <form action="/usuario_SignIn" method="POST">
        @csrf

        <label for="username">Nombre de usuario</label><br>
        <input type="text" name="username"><br>

        <label for="password">Contraseña</label><br>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Iniciar sesión">
    </form>

    <p>
        No tienes una cuenta? <a href="/usuario/create">Registrate aqui!</a>
    </p>

</body>
</html>