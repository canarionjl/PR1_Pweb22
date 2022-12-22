<?php echo PageBuilder::section('head'); ?>


<head>
    <style>
        .final_element {
            width: 200rem;
            display: flex;
            align-items: baseline;
            gap: 5px;
        }

    </style>
</head>

<section>
    <?php if($product_cart): ?>
        <?php
            $pago = 0.0;
            $index = 0;
        ?>
        <form name="payment" method="POST" action="<?php echo e(route('processToPayPal')); ?>">
            <?php echo csrf_field(); ?>
            <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="display: flex; flex-direction: column; justify-content: center">
                    <div
                        style="display:flex; padding:20px; gap:20px; align-items: center; justify-content: space-between; background: #ccf1cc; margin: 20px; border-radius: 30px">

                        <div class="final_element"><h2><?php echo e($product[0]->product->titulo); ?></h2></div>

                        <div class="final_element" style="color:#090000">Precio: <strong><?php echo e($product[0]->precio); ?>

                                €/kg </strong>
                        </div>

                        <div class="final_element" style="flex-direction: column">
                            Cantidad: <input name="quantity_<?php echo e($product[0]->id); ?>" id="quantity" type="number" step="1"
                                             style="width: 80px"
                                             value="<?php echo e($product[1]); ?>">
                        </div>

                        <div class="final_element">
                            <select name="Unidad">
                                <option value="gramos">gramos</option>
                            </select>
                        </div>

                        <div class="final_element">
                            <figure>
                                <img src="<?php echo e($product[0]->product->urlFoto); ?>"
                                     style="max-width: 150px; height:auto; border-radius: 30px"
                                     alt="No Image Found">
                            </figure>
                        </div>

                        <div class="final_element">
                            <a class="btn gradient-bg" href="/deleteProductFromCart/<?php echo e($index++); ?>">ELIMINAR PRODUCTO</a>
                        </div>
                    </div>
                    <div>
                        <?php
                            $pago += floatval($product[0]->precio);
                            $message_identifier = 'quantity_'.($product[0]->id);
                        ?>
                        <?php $__errorArgs = [$message_identifier];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div style="display: flex; justify-content: center">
                            <h5 style="color:red">No hay stock suficiente. Stock actual: <?php echo e($product[0]->cantidad); ?></h5>
                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <div
                style="display:flex; padding:20px; align-items: baseline; justify-content: space-between; background: rgba(139,252,147,0.78); margin: 20px;">

                <h2>TOTAL: </h2>

                <h4 style="font-size: 30px"><strong> <?php echo e($pago); ?> € </strong></h4>

                <input class="btn gradient-bg" type="submit" value="PAGAR Y FINALIZAR COMPRA">

            </div>

        </form>
    <?php endif; ?>
</section>

<?php echo PageBuilder::section('footer'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/webViews/e-commerce/shopping_cart.blade.php ENDPATH**/ ?>