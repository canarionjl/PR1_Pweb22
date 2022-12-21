<?php echo PageBuilder::section('head'); ?>


<section>

    <div style="display:flex; padding:50px; gap:100px; align-items: center; justify-content: space-around">
        <?php if($product): ?>
            <header>
                <div>
                    <h2><?php echo e($product->product->titulo); ?></h2>
                    <div style="color:#4BE117"><?php echo e($product->user->nombre); ?></div>
                    <div>Precio: <strong><?php echo e($product->precio); ?> €/kg</strong>
                    <?php if(strcmp($product->unidad,"gramos") === 1 and !(empty($product->unidad) === true or (strlen($product->unidad) === 0))): ?>
                            (1 caja es igual a <?php echo e($product->equivalenciaGrUnidad); ?> gramos)
                    <?php endif; ?>
                    </div>
                    <div>Cantidad disponible: <strong><?php echo e($product->cantidad); ?></strong></div>
                </div>
                <div style="display:flex; gap:20px; align-items: baseline">
                    Cantidad: <input name="quantity" id="quantity" type="number" step="0.1" style="width: 60px">
                    <select name="Unidad">
                        <?php if(strcmp($product->unidad,"gramos") === 1 and !(empty($product->unidad) === true or (strlen($product->unidad) === 0))): ?>
                            <option value="<?php echo e($product->unidad); ?>"><?php echo e($product->unidad); ?>(s)</option>
                        <?php endif; ?>
                        <option value="gramos">gramos</option>
                    </select>
                    <a class="btn gradient-bg" href="#">AÑADIR AL CARRITO</a>
                </div>
            </header>

        <figure>
            <img src="<?php echo e($product->product->urlFoto); ?>" style="max-width: 300px; height:auto; border-radius: 10px" alt="No Image Found">
        </figure>
        <?php endif; ?>
    </div>

</section>


<?php echo PageBuilder::section('footer'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/product_detail.blade.php ENDPATH**/ ?>