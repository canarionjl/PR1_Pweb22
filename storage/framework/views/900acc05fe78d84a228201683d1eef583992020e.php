<?php echo PageBuilder::section('head'); ?>


<section>


    <div class="" style=" display:flex; padding:50px; gap:100px; align-items: center">
        <header class="">
            <div class="">
                <h2 class=""><?php echo e($product_type); ?></h2>
                <div class=""><a href="#">Frutas y Hortalizas Ecológicas Rodríguez</a></div>
                <div class="">Precio: 3€/kg (1 caja es igual a 10 kg)</div>
                <div class="">Estas zanahorias han sido cultivadas de forma natural (sin productos insecticidas)
                    en las tierras de Fontanales </div>
            </div>
            <div class="" style = "display:flex; gap:20px; align-items: baseline">
                    Cantidad: <textarea rows="1" cols="5"></textarea>
                    <select name="Unidad">
                        <option value="caja">Caja(s)</option>
                        <option value="kilogramos">Kilogramos</option>
                    </select>
                <a class="btn gradient-bg" href="#">Comprar</a>
            </div>
        </header>

        <figure class="">
            <img src="/uploads/images.jpg">
        </figure>
    </div>

</section>



<?php echo PageBuilder::section('footer'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/product_detail.blade.php ENDPATH**/ ?>