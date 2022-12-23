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
            $index = 0;
        ?>
        <form name="payment" method="POST" action="<?php echo e(route('processToPayPal')); ?>">
            <?php echo csrf_field(); ?>
            <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="display: flex; flex-direction: column; justify-content: center">
                    <div
                        style="display:flex; padding:20px; gap:20px; align-items: center; justify-content: space-between; background: #ccf1cc; margin: 20px; border-radius: 30px">

                        <div class="final_element"><h2><?php echo e($product[0]->product->titulo); ?></h2></div>

                        <div class="final_element" style="color:#090000">Precio:
                            <strong><?php echo e($product[0]->precio); ?>

                                €/kg </strong>
                            <input value="<?php echo e($product[0]->precio); ?>" type="hidden" id="price_<?php echo e($index); ?>">
                        </div>

                        <div class="final_element">
                            Cantidad: <input id="<?php echo e($index); ?>" name="quantity_<?php echo e($product[0]->id); ?>" type="number" step="1"
                                             style="width: 80px"
                                             value="<?php echo e($product[1]); ?>" onchange="calculatePrice()">
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

                <h4 id="price" style="font-size: 30px">0</h4>

                <input class="btn gradient-bg" type="submit" value="PAGAR Y FINALIZAR COMPRA">

            </div>
        </form>

        <script>
            const index = parseInt(<?php echo e($index); ?>);
        </script>
    <?php else: ?>
        <div
            style="display:flex; padding:20px; align-items: baseline; justify-content: space-between; background: rgba(139,252,147,0.78); margin: 20px;">

            <h4>NO HAY ELEMENTOS EN EL CARRITO</h4>

            <a href="/products" type="button" class="btn gradient-bg">
                    VOLVER AL MERCADO</a>
        </div>
    <?php endif; ?>
</section>

<script>
    window.onload = init

    function init() {
        calculatePrice();
    }

    function calculatePrice() {
        let total = 0;
        for (let i = 0; i < index; i++) {
            let id = 'price_' + i;
            total += parseFloat(document.getElementById(i.toString()).value) * parseFloat(document.getElementById(id).value);
            console.log(total);
        }
        document.getElementById('price').textContent = total.toFixed(2) + '€';
    }
</script>

<?php echo PageBuilder::section('footer'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/webViews/e-commerce/shopping_cart.blade.php ENDPATH**/ ?>