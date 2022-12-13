{!! PageBuilder::section('head') !!}
    <style  >
        h1 {
            text-align: center;
        }
        div {

        }
        .contenedor {
            display: grid;
            grid-template-rows: auto;
            justify-content: center;
        }
        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 15em;
        }
        .button1 {
            background-color: #4CAF50;
        }
        .button2 {
            background-color: #008CBA;
        }
        /* GENERAR PRODUCTO */
    </style>
@if(Auth::check())
    @php $tipo = Auth::user()->tipoUsuario @endphp
@endif
<section>
    <div>
<h1>Portal de {{ $tipo }}</h1>
    </div>
<div class="contenedor">
    <a href="/portal/gestor" type="button" class="button button1" type="button">
        Portal Gestor
    </a>
    <a href="/products" type="button" class="button button2" type="button">
        Ver productos como un {{ (($tipo=='Vendedor') ? 'Consumidor': ($tipo=='Productor' ? 'Vendedor' : ''))}}
    </a>
    <br>
</div>
</section>
{!! PageBuilder::section('footer') !!}
