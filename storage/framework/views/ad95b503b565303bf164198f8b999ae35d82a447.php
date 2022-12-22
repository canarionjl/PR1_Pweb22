<?php echo PageBuilder::section('head'); ?>


<section>

    <?php if($product): ?>

        <div style="display:flex; padding:50px; gap:100px; align-items: center; justify-content: space-around">
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


            <?php if(Auth::check()): ?>

                <form name="addToCart" method="POST" action="<?php echo e(route('addProductToCart')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e($product->id); ?>" name="product_id">
                    <div>
                        <div style="display:flex; gap:20px; align-items: baseline">

                            Cantidad: <input name="quantity" id="quantity" type="number" step="1" style="width: 60px">

                            <select name="unidad">
                                <?php if(strcmp($product->unidad,"gramos") === 1 and !(empty($product->unidad) === true or (strlen($product->unidad) === 0))): ?>
                                    <option value="<?php echo e($product->unidad); ?>"><?php echo e($product->unidad); ?>(s)</option>
                                <?php else: ?>
                                    <option value="gramos">gramos</option>
                                <?php endif; ?>

                            </select>

                            <input class="btn gradient-bg" type="submit" value="AÑADIR PRODUCTO AL CARRITO">
                        </div>
                        <div style="display: flex; justify-content: center">
                            <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <h6 style="color:red"><?php echo e($message); ?></h6>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </form>

            <?php endif; ?>

            <figure>
                <img src="<?php echo e($product->product->urlFoto); ?>" style="max-width: 300px; height:auto; border-radius: 10px"
                     alt="No Image Found">
            </figure>
        </div>
    <?php endif; ?>
</section>


<?php echo PageBuilder::section('footer'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/webViews/products/product_detail.blade.php ENDPATH**/ ?>