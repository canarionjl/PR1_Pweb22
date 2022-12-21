{!! PageBuilder::section('head') !!}

<section>

    <div style="display:flex; padding:50px; gap:100px; align-items: center; justify-content: space-around">
        @if($product)
                <div>
                    <h2>{{$product->product->titulo}}</h2>
                    <div style="color:#4BE117">{{$product->user->nombre}}</div>
                    <div>Precio: <strong>{{$product->precio}} €/kg</strong>
                    @if(strcmp($product->unidad,"gramos") === 1 and !(empty($product->unidad) === true or (strlen($product->unidad) === 0)))
                            (1 caja es igual a {{$product->equivalenciaGrUnidad}} gramos)
                    @endif
                    </div>
                    <div>Cantidad disponible: <strong>{{$product->cantidad}}</strong></div>
                </div>
                <div style="display:flex; gap:20px; align-items: baseline">
                    Cantidad: <input name="quantity" id="quantity" type="number" step="1" style="width: 60px">
                    <select name="Unidad">
                        @if(strcmp($product->unidad,"gramos") === 1 and !(empty($product->unidad) === true or (strlen($product->unidad) === 0)))
                            <option value="{{$product->unidad}}">{{$product->unidad}}(s)</option>
                        @endif
                        <option value="gramos">gramos</option>
                    </select>
                    <a class="btn gradient-bg" href="#">AÑADIR AL CARRITO</a>
                </div>
        <figure>
            <img src="{{$product->product->urlFoto}}" style="max-width: 300px; height:auto; border-radius: 10px" alt="No Image Found">
        </figure>
        @endif
    </div>

</section>


{!! PageBuilder::section('footer') !!}
