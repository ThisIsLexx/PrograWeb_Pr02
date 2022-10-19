<x-main_template titulo="Productos - Mariscos Cheos">   
    <h2 class="center">Productos registrados</h2>

    <div class="container z-depth-1">
        <table class="centered highlight">
            <thead>
                <tr class="deep-orange lighten-2">
                    <th>Nombre del producto</th>
                    <th>Tamaño</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th></th>
                    <th><a href="/platillo/create" class="waves-light btn-small deep-orange lighten-3">Agregar</a></th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($platillos))
                    @foreach($platillos as $platillo)
                        <tr>
                            <td>
                                <a href="/platillo/{{ $platillo->id }}" class="deep-orange-text"> {{ $platillo->nombre_platillo }}</a>
                            </td>
                            <td>{{ $platillo->tam_platillo }}</td>
                            <td>{{ $platillo->precio_platillo }}</td>
                            <td>{{ $platillo->descripcion_platillo }}</td>
                            <td>    
                                <a href="/platillo/{{ $platillo->id }}/edit" class="deep-orange-text">Editar</a>
                            </td>
                            <td>
                                <a href="">
                                    <form action="/platillo/{{ $platillo->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
        
                                        <input type="submit" value="Eliminar" class="waves-light btn-small deep-orange lighten-3">
        
                                    </form>
                                    </a>
                            </td>
        
                            
                        </tr>
        
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-main_template>