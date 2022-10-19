<x-main_template titulo="Insertar Producto - Mariscos Cheos">
    <form action="/platillo" method="POST">
        @csrf
        <label for="nombre_platillo">Nombre del platillo:</label><br>
        <input type="text" required name="nombre_platillo"><br>

        <label for="tam_platillo">Tamaño del platillo:</label><br>
        <select required name="tam_platillo">
            <option value="C">Chico</option>
            <option value="M">Mediano</option>
            <option value="G">Grande</option>
        </select><br>

        <label for="precio_platillo">Precio del platillo:</label><br>
        <input type="number" required name="precio_platillo"><br>

        <label for="descripcion_platillo">Descripción breve:</label><br>
        <textarea required name="descripcion_platillo" placeholder="Como se prepara el platillo..."></textarea><br>

        <input type="submit" value="Agregar platillo">
    </form>
</x-main_template>