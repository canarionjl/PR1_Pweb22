{!! PageBuilder::section('head') !!}

<section>

    @if($product)

        <div style="display:flex; padding:50px; gap:100px; align-items: center; justify-content: space-around">
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


            @if(Auth::check())

                <form name="addToCart" method="POST" action="{{route('addProductToCart')}}">
                    @csrf
                    <input type="hidden" value="{{$product->id}}" name="product_id">
                    <div>
                        <div style="display:flex; gap:20px; align-items: baseline">

                            Cantidad: <input name="quantity" id="quantity" type="number" step="1" style="width: 60px">

                            <select name="unidad">
                                @if(strcmp($product->unidad,"gramos") === 1 and !(empty($product->unidad) === true or (strlen($product->unidad) === 0)))
                                    <option value="{{$product->unidad}}">{{$product->unidad}}(s)</option>
                                @else
                                    <option value="gramos">gramos</option>
                                @endif

                            </select>

                            <input class="btn gradient-bg" type="submit" value="AÑADIR PRODUCTO AL CARRITO">
                        </div>
                        <div style="display: flex; justify-content: center">
                            @error ('quantity')
                                <h6 style="color:red">{{$message}}</h6>
                            @enderror
                        </div>
                    </div>
                </form>

            @endif

            <figure>
                <img src="{{$product->product->urlFoto}}" style="max-width: 300px; height:auto; border-radius: 10px"
                     alt="No Image Found">
            </figure>
        </div>
    @endif
</section>


{!! PageBuilder::section('footer') !!}
