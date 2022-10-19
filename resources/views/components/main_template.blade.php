<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>{{ $titulo }}</title>
    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
</head>
<body>
    <x-NavBar/>
    {{ $slot }}
</body>
</html>