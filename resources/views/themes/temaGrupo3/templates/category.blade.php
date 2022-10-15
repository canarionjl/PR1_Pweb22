{!! PageBuilder::section('head') !!}

<div class="jumbotron"
     style="background: url({{ PageBuilder::block('internal_banner', ['view' => 'raw']) }}) no-repeat center"></div>

<section id="sec1">
    <div class="container">

        {!! PageBuilder::breadcrumb() !!}

        <div class="row">
            <div class="col-sm-12">
                <h1>{!! PageBuilder::block('title') !!}</h1>
                <p class="lead">{!! PageBuilder::block('lead_text') !!}</p>
                 {!! PageBuilder::block('content') !!}
            </div>
        </div>

        {{--        <?php $view = PageBuilder::block('category_view'); $pages = PageBuilder::category(['view' => PageBuilder::block('category_view'), 'per_page' => (!$view||$view=='default')?100:40]); ?>--}}
        {{--        @if ($pages)--}}
        {{--            {!! $pages !!}--}}
        {{--        @else--}}
        {{--            <div class="row">--}}
        {{--                <div class="col-sm-12">--}}
        {{--                    <p>&nbsp;</p>--}}
        {{--                    <p>No pages found</p>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        @endif--}}

        <div class="" style="display:flex; flex-direction: row;
                justify-content: space-evenly; flex-wrap: wrap; align-items: stretch; gap: 30px 30px">

            <div class="">

                <figure class="">
                    <a><img src="uploads/images.jpg" alt=""></a>
                </figure>

                <header class="">
                    <h3 class="entry-title"><a href="#">Zanahorias</a></h3>
                    <div class="event-date-time">Frutas y Hortalizas Ecológicas Rodríguez</div>
                    <div class="event-speaker">Precio: 3€/kg (1 caja es igual a 10 kg)</div>
                </header>

                <a class="btn gradient-bg" href="/productos/zanahoria" >Ver más</a>

            </div>


            <div class="">
                <figure class="">
                    <a><img src="uploads/perejil.jpeg" style="width:250px; height:auto"></a>
                </figure>

                <header class="">
                    <h3 class="entry-title"><a href="#">Perejil</a></h3>
                    <div class="event-date-time">Frutas y Hortalizas Ecológicas Rodríguez</div>
                    <div class="event-speaker">Precio: 2€/kg (1 manojo es igual a 0.1 kg)</div>
                </header>

                <a class="btn gradient-bg" href="#">Ver más</a>
            </div>

            <div class="">
                <figure class="">
                    <a><img src="uploads/images.jpg" alt=""></a>
                </figure>

                <header class="">
                    <h3 class="entry-title"><a href="#">Zanahorias</a></h3>
                    <div class="event-date-time">Frutas y Hortalizas Ecológicas Rodríguez</div>
                    <div class="event-speaker">Precio: 3€/kg (1 caja == 10 kg)</div>
                </header>

                <a class="btn gradient-bg" href="#">Ver más</a>
            </div>

            <div class="">
                <figure class="">
                    <a><img src="uploads/images.jpg" alt=""></a>
                </figure>

                <header class="">
                    <h3 class="entry-title"><a href="#">Zanahorias</a></h3>
                    <div class="event-date-time">Frutas y Hortalizas Ecológicas Rodríguez</div>
                    <div class="event-speaker">Precio: 3€/kg (1 caja == 10 kg)</div>
                </header>

                <a class="btn gradient-bg" href="#">Ver más</a>
            </div>

            <div class="">
                <figure class="">
                    <a><img src="uploads/images.jpg" alt=""></a>
                </figure>

                <header class="">
                    <h3 class="entry-title"><a href="#">Zanahorias</a></h3>
                    <div class="event-date-time">Frutas y Hortalizas Ecológicas Rodríguez</div>
                    <div class="event-speaker">Precio: 3€/kg (1 caja == 10 kg)</div>
                </header>

                <a class="btn gradient-bg" href="#">Ver más</a>
            </div>

            <div class="">
                <figure class="">
                    <a><img src="uploads/images.jpg" alt=""></a>
                </figure>

                <header class="">
                    <h3 class="entry-title"><a href="#">Zanahorias</a></h3>
                    <div class="event-date-time">Frutas y Hortalizas Ecológicas Rodríguez</div>
                    <div class="event-speaker">Precio: 3€/kg (1 caja == 10 kg)</div>
                </header>

                <a class="btn gradient-bg" href="#">Ver más</a>
            </div>
        </div>

    </div>
    </div>

    <!-- /.container -->
</section>

{!! PageBuilder::section('footer') !!}
