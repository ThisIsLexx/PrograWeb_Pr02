<x-main_template titulo="Mostrar datos - Mariscos Cheos">

    @if(!empty($platillo))
        <h2>{{ $platillo->nombre_platillo }}</h2>
    @endif

</x-main_template>