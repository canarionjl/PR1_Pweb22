{!! PageBuilder::section('head') !!}

{!! PageBuilder::block('carousel') !!}

@if(Auth::check())
    @php
        $tipo = \Illuminate\Support\Facades\Auth::user()->tipoUsuario;
        $nombre = \Illuminate\Support\Facades\Auth::user()->nombre;
    @endphp
@endif
<section id="sec1">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-10 col-sm-offset-1">

                @if(Auth::check() && ($tipo == 'Vendedor' || $tipo == 'Productor'))
                    <h2>¡Bienvenid@, {{$nombre}}!</h2>
                    <a href="/portal" type="button" id="portalButton" class="btn btn-default" id="scrollbutton">
                        Portal del {{ Auth::user()->tipoUsuario }}</a><br><br>
                    <p class="lead">Administre todos los productos que tiene a la venta</p>
                @if($tipo == 'Vendedor')
                        <a href="/shoppingCart" type="button" id="vendedorShoppingCartButton" class="btn btn-default" id="scrollbutton">
                            VER MI CARRITO</a><br><br>
                @endif
                @elseif(Auth::check() && ($tipo == 'Cliente'))
                    <h2>¡Bienvenid@, {{$nombre}} </h2>
                    <p class="lead">¡Le deseamos un muy buen viaje a través de nuestro portal!</p>
                    <a href="/shoppingCart" type="button" id="clienteShoppingCartButton" class="btn btn-default" id="scrollbutton">
                        VER MI CARRITO</a><br><br>
                @elseif(Auth::guest())
                    <h2>¡Regístrate y sé parte de nuestra maravillosa comunidad!</h2>
                    <a href="/register" type="button" id="registerButton" class="btn btn-default" id="scrollbutton">
                       REGISTRARSE</a><br><br>
                    <p class="lead">Los mejores productos de la villa de Moya están esperando por usted</p>
                @endif

            </div>
        </div>
        <hr />
        @if ($pageId = PageBuilder::block_selectpage('show_sub_pages'))
        {!! PageBuilder::category(['page_id' => $pageId, 'view' => 'home', 'limit' => 4]) !!}
        @endif
    </div>
</section>

{!! PageBuilder::section('footer') !!}

