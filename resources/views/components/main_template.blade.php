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

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

<script>
    $(document).ready(function(){
        
        $('.parallax').parallax();
    });
</script>

</html>