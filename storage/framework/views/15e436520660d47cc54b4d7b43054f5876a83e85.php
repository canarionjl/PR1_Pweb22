<?php echo PageBuilder::section('head'); ?>


<div class="jumbotron"
     style="background: url(<?php echo e(PageBuilder::block('internal_banner', ['view' => 'raw'])); ?>) no-repeat center"></div>

<section id="sec1">
    
    <div class="" style="display:flex; flex-direction: row;
                justify-content: space-evenly; flex-wrap: wrap; align-items: stretch; gap: 30px 30px">

        <?php if($product_list): ?>
            <?php $__currentLoopData = $product_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="margin:15px">

                    <figure>
                        <img src="<?php echo e($product->product->urlFoto); ?>"
                             style="max-width: 300px; height:auto; border-radius: 10px" alt="NO IMAGE FOUND">
                    </figure>

                    <header>
                        <h3 class="entry-title"><?php echo e($product->product->titulo); ?></h3>
                        <div class="event-date-time"><?php echo e($product->user->nombre); ?></div>
                        <div class="event-speaker">Precio: <?php echo e($product->precio); ?> €/kg </div>
                    </header>

                    <a class="btn gradient-bg" href="/product/<?php echo e($product->original_id); ?>">COMPRAR</a>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endif; ?>

    </div>

</section>

<?php echo PageBuilder::section('footer'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/webViews/products/product_list.blade.php ENDPATH**/ ?>