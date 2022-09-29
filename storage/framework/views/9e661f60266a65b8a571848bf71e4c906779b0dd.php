<div class="row">

    <?php if($count%2 == 1): ?>
        <div class="col-sm-6">
            <?php echo PageBuilder::block('content_image', ['class' => 'img-responsive']); ?>

        </div>
    <?php endif; ?>


        <div class="col-sm-6">
            <h3><?php echo e(PageBuilder::block('title')); ?></h3>
            <p class="lead"><?php echo PageBuilder::block('lead_text'); ?></p>
            <p><?php echo e(PageBuilder::block('content', ['length' => 150])); ?></p>
            <a href="<?php echo $page->url; ?>" class="btn btn-default">More info</a>
        </div>

    <?php if($count%2 == 0): ?>
        <div class="col-sm-6">
            <?php echo PageBuilder::block('content_image', ['class' => 'img-responsive']); ?>

        </div>
    <?php endif; ?>

</div>

<?php if(!$is_last): ?>
    <hr />
<?php endif; ?><?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/categories/home/page.blade.php ENDPATH**/ ?>