<?php echo PageBuilder::section('head'); ?>


<?php echo PageBuilder::block('carousel'); ?>


<?php if(Auth::check()): ?>
    <?php
        $tipo = \Illuminate\Support\Facades\Auth::user()->tipoUsuario;
        $nombre = \Illuminate\Support\Facades\Auth::user()->nombre;
    ?>
<?php endif; ?>
<section id="sec1">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-10 col-sm-offset-1">

                <?php if(Auth::check() && ($tipo == 'Vendedor' || $tipo == 'Productor')): ?>
                    <h2>¡Bienvenid@, <?php echo e($nombre); ?>!</h2>
                    <a href="/portal" type="button" id="portalButton" class="btn btn-default" id="scrollbutton">
                        Portal del <?php echo e(Auth::user()->tipoUsuario); ?></a><br><br>
                    <p class="lead">Administre todos los productos que tiene a la venta</p>
                <?php if($tipo == 'Vendedor'): ?>
                        <a href="/shoppingCart" type="button" id="vendedorShoppingCartButton" class="btn btn-default" id="scrollbutton">
                            VER MI CARRITO</a><br><br>
                <?php endif; ?>
                <?php elseif(Auth::check() && ($tipo == 'Cliente')): ?>
                    <h2>¡Bienvenid@, <?php echo e($nombre); ?> </h2>
                    <p class="lead">¡Le deseamos un muy buen viaje a través de nuestro portal!</p>
                    <a href="/shoppingCart" type="button" id="clienteShoppingCartButton" class="btn btn-default" id="scrollbutton">
                        VER MI CARRITO</a><br><br>
                <?php elseif(Auth::guest()): ?>
                    <h2>¡Regístrate y sé parte de nuestra maravillosa comunidad!</h2>
                    <a href="/register" type="button" id="registerButton" class="btn btn-default" id="scrollbutton">
                       REGISTRARSE</a><br><br>
                    <p class="lead">Los mejores productos de la villa de Moya están esperando por usted</p>
                <?php endif; ?>

            </div>
        </div>
        <hr />
        <?php if($pageId = PageBuilder::block_selectpage('show_sub_pages')): ?>
        <?php echo PageBuilder::category(['page_id' => $pageId, 'view' => 'home', 'limit' => 4]); ?>

        <?php endif; ?>
    </div>
</section>

<?php echo PageBuilder::section('footer'); ?>


<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/templates/home.blade.php ENDPATH**/ ?>