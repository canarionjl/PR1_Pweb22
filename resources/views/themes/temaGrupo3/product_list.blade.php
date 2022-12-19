{!! PageBuilder::section('head') !!}

<div class="jumbotron"
     style="background: url({{ PageBuilder::block('internal_banner', ['view' => 'raw']) }}) no-repeat center"></div>

<section id="sec1">
    <div class="row">
        <div class="col-sm-12">
            <h1>{!! PageBuilder::block('title') !!}</h1>
            <p class="lead">{!! PageBuilder::block('lead_text') !!}</p>
            {!! PageBuilder::block('content') !!}
        </div>
    </div>

    <div class="" style="display:flex; flex-direction: row;
                justify-content: space-evenly; flex-wrap: wrap; align-items: stretch; gap: 30px 30px">

        @if($product_list)
            @foreach($product_list as $product)
                <div style="margin:15px">

                    <figure>
                        <img src="{{$product->product->urlFoto}}"
                             style="max-width: 300px; height:auto; border-radius: 10px" alt="NO IMAGE FOUND">
                    </figure>

                    <header>
                        <h3 class="entry-title">{{$product->product->titulo}}</h3>
                        <div class="event-date-time">{{$product->user->nombre}}</div>
                        <div class="event-speaker">Precio: {{$product->precio}} €/kg </div>
                    </header>

                    <a class="btn gradient-bg" href="/product/{{$product->original_id}}">COMPRAR</a>

                </div>
            @endforeach

        @endif

    </div>

</section>

{!! PageBuilder::section('footer') !!}
