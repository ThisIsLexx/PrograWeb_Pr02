<x-main_template titulo="Insertar Producto - Mariscos Cheos">
    <form action="/platillo" method="POST">
        @csrf
        

        <div class="container">
            <div class="input-field">
                <label for="nombre_platillo">Nombre del platillo:</label><br>
                <input type="text" required name="nombre_platillo"><br>
            </div>
    
            <div class="input-field">
                <label for="tam_platillo">Tamaño del platillo:</label><br><br>
                <p>
                    <label>
                        <input class="with-gap" name="tam_platillo" type="radio" checked value="C"/>
                        <span>Chico</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap" name="tam_platillo" type="radio" value="M">
                        <span>Mediano</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="with-gap" name="tam_platillo" type="radio" value="G">
                        <span>Grande</span>
                    </label>
                </p>
            </div>

            <div class="input-field">
                <label for="precio_platillo">Precio del platillo:</label><br>
                <input type="number" required name="precio_platillo"><br>
            </div>
    
            <div class="input-field">
                <label for="descripcion_platillo">Descripción breve:</label><br><br>
                <textarea class="materialize-textarea" required name="descripcion_platillo" placeholder="Como se prepara el platillo..."></textarea>
            </div>
    
            <div class="center input-field">
                <input class="btn-small blue lighten-2" type="submit" value="Agregar platillo">
                <a class="btn-small red lighten-2" href="/platillo">Salir</a>
            </div>
        </div>
    </form>
</x-main_template>