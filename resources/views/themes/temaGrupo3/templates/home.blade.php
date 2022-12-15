{!! PageBuilder::section('head') !!}

{!! PageBuilder::block('carousel') !!}
@if(Auth::check())
    @php $tipo = Auth::user()->tipoUsuario @endphp
@endif
<section id="sec1">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-10 col-sm-offset-1">
                <h2>{{ PageBuilder::block('title') }}</h2>
                @if(Auth::check() && ($tipo == 'Vendedor' || $tipo == 'Productor'))
                    <a href="/portal" type="button" id="portalButton" class="btn btn-default" id="scrollbutton">
                        Portal del {{ Auth::user()->tipoUsuario }}</a><br><br>
                @elseif(Auth::guest())
                    <a href="/register" type="button" id="registerButton" class="btn btn-default" id="scrollbutton">
                       Registrarse</a><br><br>
                @endif
                <p class="lead">{{ PageBuilder::block('lead_text') }}</p>
            </div>
        </div>
        <hr />
        @if ($pageId = PageBuilder::block_selectpage('show_sub_pages'))
        {!! PageBuilder::category(['page_id' => $pageId, 'view' => 'home', 'limit' => 4]) !!}
        @endif
    </div>
</section>

{!! PageBuilder::section('footer') !!}
