<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariscos Cheos - Index</title>
</head>
<body>
    <h1>INDEX DE MARISCOS CHEOS</h1>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Tamaño</th>
            <th>Precio</th>
            <th>Descripción</th>
        </tr>
        @if(!empty($platillos))
            @foreach($platillos as $platillo)
                <tr>
                    <td>
                        <a href="/platillo/{{ $platillo->id }}"> {{ $platillo->nombre_platillo }}</a>
                    </td>
                    <td>{{ $platillo->tam_platillo }}</td>
                    <td>{{ $platillo->precio_platillo }}</td>
                    <td>{{ $platillo->descripcion_platillo }}</td>
                    <td>    
                        <a href="/platillo/{{ $platillo->id }}/edit">Editar</a>
                    </td>
                    <td>
                        <a href="">
                            <form action="/platillo/{{ $platillo->id }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input type="submit" value="🗑️">

                            </form>
                            </a>
                    </td>

                    
                </tr>

            @endforeach
        @endif
    </table>


    <ul>
        
    </ul>
</body>
</html>