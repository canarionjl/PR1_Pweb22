<?php if($is_first || $count % 3 == 1): ?>
<div class="row">
<?php endif; ?>

    <div class="col-sm-4">
        <?php echo PageBuilder::block('feature_icon'); ?>


        <h3><?php echo e(PageBuilder::block('feature_title')); ?></h3>
        <p><?php echo e(PageBuilder::block('feature_text')); ?></p>
    </div>

<?php if($is_last || $count % 3 == 0): ?>
</div>
<?php endif; ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/blocks/repeater/feature.blade.php ENDPATH**/ ?>