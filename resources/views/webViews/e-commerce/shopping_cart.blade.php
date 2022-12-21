{!! PageBuilder::section('head') !!}

<head>
    <style>
        .final_element {
            width: 200rem;
            display: flex;
            align-items: baseline;
            gap: 5px;
        }

    </style>
</head>

<section>
    @if($products_cart)
        @foreach($products_cart as $product)
            <div
                style="display:flex; padding:20px; gap:20px; align-items: center; justify-content: space-between; background: #ccf1cc; margin: 20px; border-radius: 30px">

                <div class="final_element"><h2>{{$product->product->titulo}}</h2></div>

                <div class="final_element" style="color:#090000">Precio: <strong>{{$product->precio}} €/kg </strong>
                </div>

                <div class="final_element">
                    Cantidad: <input name="quantity" id="quantity" type="number" step="1" style="width: 80px"
                                     value="500000">
                </div>

                <div class="final_element">
                    <select name="Unidad">
                        <option value="gramos">gramos</option>
                    </select>
                </div>

                <div class="final_element">
                    <figure>
                        <img src="{{$product->product->urlFoto}}"
                             style="max-width: 150px; height:auto; border-radius: 30px"
                             alt="No Image Found">
                    </figure>
                </div>

                <div class="final_element">
                    <a class="btn gradient-bg" href="#">ELIMINAR PRODUCTO</a>
                </div>

            </div>
        @endforeach
    @endif

    <div
        style="display:flex; padding:20px; align-items: baseline; justify-content: space-between; background: rgba(139,252,147,0.78); margin: 20px;">

        <h2>TOTAL: </h2>

        <h4 style="font-size: 30px"><strong> 104.5 €/kg </strong></h4>

        <a class="btn gradient-bg" href="#">PAGAR Y COMPLETAR COMPRA</a>

    </div>
</section>

{!! PageBuilder::section('footer') !!}
