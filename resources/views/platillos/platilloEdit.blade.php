<x-main_template titulo="Editar producto - Mariscos Cheos">
    <div class="center">
        <h4>Editar datos</h4>
        <h5>{{ $platillo->nombre_platillo }}</h5>
    </div>

    <form action="/platillo/{{ $platillo->id }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="container">

            <label for="nombre_platillo">Nombre del platillo:</label><br>
            <input type="text" required name="nombre_platillo" value="{{ $platillo->nombre_platillo }}"><br>
            @error('nombre_platillo')
                <p>{{ $message }}</p>
            @enderror
    
            <div class="input-field">
                <label for="tam_platillo">Tamaño del platillo:</label><br><br>
                <p>
                    <label>
                        <input class="with-gap" name="tam_platillo" type="radio" value="C" {{ $platillo->tam_platillo == "C" ? 'checked' : '' }}/>
                        <span>Chico</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap" name="tam_platillo" type="radio" value="M" {{ $platillo->tam_platillo == "M" ? 'checked' : '' }}>
                        <span>Mediano</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap" name="tam_platillo" type="radio" value="G" {{ $platillo->tam_platillo == "G" ? 'checked' : '' }}>
                        <span>Grande</span>
                    </label>
                </p>
            </div>
            
            <div class="input-field">
                <label for="precio_platillo">Precio del platillo:</label><br>
                <input type="number" required name="precio_platillo" value="{{ $platillo->precio_platillo }}"><br>
                @error('precio_platillo')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="input-field">
                <label for="descripcion_platillo">Descripción breve:</label><br>
                <textarea class="materialize-textarea" required name="descripcion_platillo" placeholder="Como se prepara el platillo...">{{ $platillo->descripcion_platillo }}</textarea><br>
                @error('descripcion_platillo')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="input-field center">
                <input class="btn-small blue lighten-2" type="submit" value="Guardar">
                <a href="/platillo">
                    <input class="btn-small red lighten-2" type="button" value="Cancelar">
                </a>
            </div>
        </div>
    </form>
</x-template>