
{!! PageBuilder::section('head') !!}


<head>
    <style>
        .col-sm-12 {
            justify-content:center;
            text-align: center;
            font-family: 'Passion One', cursive;
            font-size: x-large
        }
    </style>
</head>

<div class="jumbotron"></div>

<section id="sec1" style=" border: darkgreen 5px inset;">

    <div class="container" >

        {!! PageBuilder::breadcrumb() !!}
        <br><br>
        <div class="row">
            <div class="col-sm-12">
                {!! PageBuilder::img('404_grupo3.png') !!}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" >
                 <br>
                <p class="errorpage_1">Uy, Error: «{{ isset($error) ? $error : "" }}» [404]</p>
                <p class="errorpage_2">La página solicitada no existe o no está disponible en estos momentos</p>
            </div>
        </div>

    </div>
</section>

{!! PageBuilder::section('footer') !!}
