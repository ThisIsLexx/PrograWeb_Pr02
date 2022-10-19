<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariscos cheos - Login</title>

    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
</head>

<body>
    <h2 class="center">MARISCOS CHEO'S</h2>
    <h4 class="center">since 1989</h4>

    <div class="card">
        <form action="/usuario_SignIn" method="POST">
            @csrf
    
            <label for="username">Nombre de usuario</label><br>
            <input type="text" name="username" required><br>
    
            <label for="password">Contraseña</label><br>
            <input type="password" name="password" required><br><br>
    
            <input type="submit" value="Iniciar sesión" class="btn deep-orange lighten-2">
                
        </form>        
    </div>

    <p>
        No tienes una cuenta? <a href="/usuario/create" class="deep-orange-text lighten-2">Registrate aqui!</a>
    </p>

</body>
</html>