<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariscos cheos - crear usuario</title>
</head>
<body>
    <h2>Crear nuevo usuario</h2>

    <form action="/usuario" method="POST">
        @csrf

        <label for="username">Nombre de usuario</label><br>
        <input type="text" name="username" required value="{{ old('username') }}"><br>
        @error('username')
            <p>{{ $message }}</p>
        @enderror

        <label for="email">Correo electronico</label><br>
        <input type="email" name="email" required value="{{ old('email') }}"><br>
        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <label for="password">Contraseña</label><br>
        <input type="password" name="password" required value="{{ old('password') }}"><br>
        @error('password')
            <p>{{ $message }}</p>
        @enderror

        <label for="password_validate">Confirme su contraseña</label><br>
        <input type="password" name="password_validate" required><br><br>
        @error('password_validate')
            <p>Las contraseñas deben coincidir!</p>
        @enderror

        <input type="submit" value="Registrame">

    </form>

</body>
</html>