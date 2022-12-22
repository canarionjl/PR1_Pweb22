
@php    use App\Models\ProductoUsuario;use App\Models\Producto; @endphp

{{--    FORMULARIO DEL PRODUCTO    --}}
@csrf
<label for="tipoProducto">Nombre:</label><br>
<div class="chart">
    {{--    NOMBRE    --}}
    <select class="nombreElement" id="producto" name="producto_id" form="añadirProducto">
        <option disabled
                @if($productoEditar==null)
                    selected
                @endif
                value> Elige el tipo de producto</option>
        @forelse(Producto::select('*')->get() as $producto)
            <option
                @if(($productoEditar!=null ? $productoEditar->producto_id : -1) == $producto->id)
                     selected
                @endif
                value="{{$producto->id}}">{{ ucfirst($producto->titulo) }}</option>
        @empty

        @endforelse
    </select>
</div>

    {{--    PRECIO    --}}
<label for="precio">Precio:</label><br>
<input value="{{$productoEditar!=null ? $productoEditar->precio : ''}}" style="" type="number" step="0.01" id="precio" name="precio" placeholder="Precio en euros (€)">
<span style="font-size: 23px;position:relative;top:2px;"> €</span><br><br>

    {{--    CANTIDAD    --}}
<label for="cantidad">Cantidad:</label><br>
<input value="{{$productoEditar!=null ? $productoEditar->cantidad : ''}}" style="" type="number" step="1" id="cantidad" name="cantidad" placeholder="Cantidad disponible">
<strong style="font-size:18px;position:relative;top:2px;"> unidades</strong><br><br>
    {{--    EQUIVALENCIA    --}}
<div class="chart">

    {{--    Unidad    --}}
    <div class="element"><label for="equivalencia">Equivalencia:</label><br>
        <span style="font-size: 17px">1&nbsp;&nbsp;&nbsp;</span><select id="equivalencia" name="unidad"
                                                                          form="añadirProducto">
            @forelse(ProductoUsuario::getUnidades() as $unidad)
                <option
                    @if(($productoEditar!=null ? $productoEditar->unidad : '') === $unidad)
                        selected
                    @endif
                    value="{{$unidad}}">{{ ucfirst($unidad) }}</option>
            @empty
            @endforelse
        </select></div>

    {{--    PESO EN GRAMOS    --}}
    <div class="element">
        <label for="conversion">&nbsp; </label><br>
        <span style="font-size:20px;">➝</span>
        <input value="{{$productoEditar!=null ? $productoEditar->equivalenciaGrUnidad : ''}}" type="number" id="conversion" name="equivalenciaGrUnidad" placeholder="Peso en gramos (g)"><strong>
            gramos</strong>
    </div>

</div>

<button class="editButton">Confirmar</button>
</form>
</div>
{{--    GESTOR DE PRODUCTOS    --}}
<h1>Gestión Productos</h1>
<div class="contenedor">
    <div class="contenedorInterno">
        @forelse($productos as $productoUsuario)
            <div class="elemento"><h3> {{ $productoUsuario->product->titulo }}</h3>
                <div><strong>Tipo: {{ ucfirst($productoUsuario->product->tipo->nombre) }} </strong></div>
                <div><strong>Precio: {{ $productoUsuario->precio }} €</strong></div>
                <div><strong>Cantidad: {{ $productoUsuario->cantidad }}</strong></div>
                <span><strong>Equivalencia:  1 {{ $productoUsuario->unidad }}</strong></span>
                <span><strong>➝</strong></span>
                <span><strong> {{ $productoUsuario->equivalenciaGrUnidad }}gramos</strong></span>
                <br><br>
                <div class="buttons">
                    <div class="buttonContainer">
                        <button onclick="editButtonClicked({{$productoUsuario->id}})" class="editButton">Editar</button>
                    </div>
                    <div class="buttonContainer">
                        <button onclick="deleteButtonClicked({{$productoUsuario->id}})" class="deleteButton">Eliminar</button>
                    </div>
                </div>
            </div>
        @empty
            {{ "Vacío" }}
        @endforelse
    </div>
</div>
</section>
<script src="jquery-3.6.1.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script>
    function editButtonClicked(id) {
        window.location='/portal/gestor/'+id+'/edit';
    }

    function deleteButtonClicked(id){
        var url = 'http://proyectoweb22.test/portal/gestor/'+id;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'http://proyectoweb22.test/portal/gestor/'+id,
            type: 'DELETE',

            success: function(result) {

            }
        });

    }
</script>

