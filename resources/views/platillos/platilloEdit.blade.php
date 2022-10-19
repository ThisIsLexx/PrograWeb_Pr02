<x-main_template titulo="Editar producto - Mariscos Cheos">
    <h2>Editar datos de {{ $platillo->nombre_platillo }}</h2>

    <form action="/platillo/{{ $platillo->id }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="nombre_platillo">Nombre del platillo:</label><br>
        <input type="text" required name="nombre_platillo" value="{{ $platillo->nombre_platillo }}"><br>
        @error('nombre_platillo')
            <p>{{ $message }}</p>
        @enderror


        <label for="tam_platillo">Tamaño del platillo:</label><br>
        <select required name="tam_platillo">
            <option value="C" {{ $platillo->tam_platillo == "C" ? 'selected' : '' }}>Chico</option>
            <option value="M" {{ $platillo->tam_platillo == "M" ? 'selected' : '' }}>Mediano</option>
            <option value="G" {{ $platillo->tam_platillo == "G" ? 'selected' : '' }}>Grande</option>
        </select><br>

        <label for="precio_platillo">Precio del platillo:</label><br>
        <input type="number" required name="precio_platillo" value="{{ $platillo->precio_platillo }}"><br>
        @error('precio_platillo')
            <p>{{ $message }}</p>
        @enderror

        <label for="descripcion_platillo">Descripción breve:</label><br>
        <textarea required name="descripcion_platillo" placeholder="Como se prepara el platillo...">{{ $platillo->descripcion_platillo }}</textarea><br>
        @error('descripcion_platillo')
            <p>{{ $message }}</p>
        @enderror

        <input type="submit" value="Guardar">
        <a href="/platillo">
            <input type="button" value="Cancelar">
        </a>
    </form>
</x-template>