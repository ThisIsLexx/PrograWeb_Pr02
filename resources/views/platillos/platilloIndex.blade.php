<x-main_template titulo="Productos - Mariscos Cheos">   
    
    <div class="container">
        <h2 class="center flow-text">Productos registrados</h2>

        @if(sizeof($platillos) == 0)
            <h6 class="center blue-text lighten-3">
                Aun no hay productos registrados!
            </h6>
        @endif
    </div>

    <div class="container z-depth-1">
        <table class="centered highlight">
            <thead>
                <tr class="blue lighten-2">
                    <th>Nombre del producto</th>
                    <th>Tamaño</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th></th>
                    <th><a href="/platillo/create" class="waves-light btn-small blue lighten-3">Agregar</a></th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($platillos))
                    @foreach($platillos as $platillo)
                        <tr>
                            <td>
                                <a href="/platillo/{{ $platillo->id }}" class="blue-text"> {{ $platillo->nombre_platillo }}</a>
                            </td>
                            <td>{{ $platillo->tam_platillo }}</td>
                            <td>{{ $platillo->precio_platillo }}</td>
                            <td>{{ $platillo->descripcion_platillo }}</td>
                            <td>    
                                <a href="/platillo/{{ $platillo->id }}/edit" class="blue-text">Editar</a>
                            </td>
                            <td>
                                @if($platillo->user_id === Auth::id())
                                    <a href="">
                                        <form action="/platillo/{{ $platillo->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
            
                                            <input type="submit" value="Eliminar" class="btn-flat red-text lighten-3">
            
                                        </form>
                                    </a>
                                @endif

                                @if($platillo->user_id !== Auth::id())
                                    <input type="submit" disabled value="Eliminar" class="btn-flat gray-text lighten-3"">
                                @endif
                            </td>
                        </tr>
        
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-main_template>