
<?php echo PageBuilder::section('head'); ?>



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

        <?php echo PageBuilder::breadcrumb(); ?>

        <br><br>
        <div class="row">
            <div class="col-sm-12">
                <?php echo PageBuilder::img('404_grupo3.png'); ?>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" >
                 <br>
                <p class="errorpage_1">Uy, Error: «<?php echo e(isset($error) ? $error : ""); ?>» [404]</p>
                <p class="errorpage_2">La página solicitada no existe o no está disponible en estos momentos</p>
            </div>
        </div>

    </div>
</section>

<?php echo PageBuilder::section('footer'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/errors/404.blade.php ENDPATH**/ ?>