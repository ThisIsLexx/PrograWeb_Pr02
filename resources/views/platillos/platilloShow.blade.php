<x-main_template titulo="Mostrar datos - Mariscos Cheos">

    @if(!empty($platillo))

        <div class="container">
            <a class="btn-small red lighten-2" href="/platillo">Regresar</a>
        </div>    

        <div class="container center">
            <h4 class="blue-text lighten-2">{{ $platillo->nombre_platillo }}</h4>
        </div>

        
        
        <div class="row">
            <div class="container">
                <h5> Precio del platillo: ${{ number_format($platillo->precio_platillo, 2) }}</h5>
            </div>
            <div class="container">
                <h4>
                    {{ $platillo->descripcion_platillo }}
                </h4>
            </div>
        </div>
        @endif

</x-main_template>