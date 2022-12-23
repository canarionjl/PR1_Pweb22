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
            $index = 0;
        @endphp
        <form name="payment" method="POST" action="{{route('processToPayPal')}}">
            @csrf
            @foreach($product_cart as $product)
                <div style="display: flex; flex-direction: column; justify-content: center">
                    <div
                        style="display:flex; padding:20px; gap:20px; align-items: center; justify-content: space-between; background: #ccf1cc; margin: 20px; border-radius: 30px">

                        <div class="final_element"><h2>{{$product[0]->product->titulo}}</h2></div>

                        <div class="final_element" style="color:#090000">Precio:
                            <strong>{{$product[0]->precio}}
                                €/kg </strong>
                            <input value="{{$product[0]->precio}}" type="hidden" id="price_{{$index}}">
                        </div>

                        <div class="final_element">
                            Cantidad: <input id="{{$index}}" name="quantity_{{$product[0]->id}}" type="number" min="0" step="1"
                                             style="width: 80px"
                                             value="{{$product[1]}}" onchange="calculatePrice()">
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

                <h4 id="price" style="font-size: 30px">0</h4>

                <input class="btn gradient-bg" type="submit" value="PAGAR Y FINALIZAR COMPRA">

            </div>
        </form>

        <script>
            const index = parseInt({{$index}});
        </script>
    @else
        <div
            style="display:flex; padding:20px; align-items: baseline; justify-content: space-between; background: rgba(139,252,147,0.78); margin: 20px;">

            <h4>NO HAY ELEMENTOS EN EL CARRITO</h4>

            <a href="/products" type="button" class="btn gradient-bg">
                    VOLVER AL MERCADO</a>
        </div>
    @endif
</section>

<script>
    window.onload = init

    function init() {
        calculatePrice();
    }

    function calculatePrice() {
        let total = 0;
        for (let i = 0; i < index; i++) {
            let id = 'price_' + i;
            total += parseFloat(document.getElementById(i.toString()).value) * parseFloat(document.getElementById(id).value);
            console.log(total);
        }
        document.getElementById('price').textContent = total.toFixed(2) + '€';
    }
</script>

{!! PageBuilder::section('footer') !!}
