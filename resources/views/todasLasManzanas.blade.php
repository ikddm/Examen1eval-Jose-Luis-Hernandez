formulario para ver editar y borrar manzanas

        @if($todasLasManzanas->count() > 0)
        <ul>
            @foreach($todasLasManzanas as $manzana)
            <li>{{ "id de la manzana: " .$manzana->id }} </li>
            <li>{{ "tipo de la manzana: " .$manzana->tipoManzana }}</li>
            <li>{{ "precio del kilo: " .$manzana->precioKilo}}</li>
            <li>
                <form method="POST" action="{{ route('borrarManzana' , $manzana) }}">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Eliminar </button>
                </form>

                <form method="POST" action="{{ route('editarManzana' , $manzana) }}">
                    @csrf
                    <input type="text" name="tipoManzana" value="{{ $manzana->tipoManzana}}">
                    <input type ="number" name = "precioKilo" value="{{ $manzana->precioKilo}}">
                    <input type="number" name ="id" value ="{{ $manzana->id }} " hidden>
                    <button type="submit">Editar </button>
                </form>
            </li>
            @endforeach
        </ul>
        @else
        <p>No hay Manzanas disponibles.</p>
        @endif
        
        
