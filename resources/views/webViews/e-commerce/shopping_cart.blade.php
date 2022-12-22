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
    @if($product_cart)
        @php
            $pago = 0.0;
            $index = 0;
        @endphp
        <form name="payment" method="POST" action="{{route('processToPayPal')}}">
            @csrf
            @foreach($product_cart as $product)
                <div style="display: flex; flex-direction: column; justify-content: center">
                    <div
                        style="display:flex; padding:20px; gap:20px; align-items: center; justify-content: space-between; background: #ccf1cc; margin: 20px; border-radius: 30px">

                        <div class="final_element"><h2>{{$product[0]->product->titulo}}</h2></div>

                        <div class="final_element" style="color:#090000">Precio: <strong>{{$product[0]->precio}}
                                €/kg </strong>
                        </div>

                        <div class="final_element" style="flex-direction: column">
                            Cantidad: <input name="quantity_{{$product[0]->id}}" id="quantity" type="number" step="1"
                                             style="width: 80px"
                                             value="{{$product[1]}}">
                        </div>

                        <div class="final_element">
                            <select name="Unidad">
                                <option value="gramos">gramos</option>
                            </select>
                        </div>

                        <div class="final_element">
                            <figure>
                                <img src="{{$product[0]->product->urlFoto}}"
                                     style="max-width: 150px; height:auto; border-radius: 30px"
                                     alt="No Image Found">
                            </figure>
                        </div>

                        <div class="final_element">
                            <a class="btn gradient-bg" href="/deleteProductFromCart/{{$index++}}">ELIMINAR PRODUCTO</a>
                        </div>
                    </div>
                    <div>
                        @php
                            $pago += floatval($product[0]->precio);
                            $message_identifier = 'quantity_'.($product[0]->id);
                        @endphp
                        @error ($message_identifier)
                        <div style="display: flex; justify-content: center">
                            <h5 style="color:red">No hay stock suficiente. Stock actual: {{$product[0]->cantidad}}</h5>
                        </div>
                        @enderror
                    </div>
                </div>
            @endforeach


            <div
                style="display:flex; padding:20px; align-items: baseline; justify-content: space-between; background: rgba(139,252,147,0.78); margin: 20px;">

                <h2>TOTAL: </h2>

                <h4 style="font-size: 30px"><strong> {{$pago}} € </strong></h4>

                <input class="btn gradient-bg" type="submit" value="PAGAR Y FINALIZAR COMPRA">

            </div>

        </form>
    @endif
</section>

{!! PageBuilder::section('footer') !!}
