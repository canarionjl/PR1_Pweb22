<?php echo PageBuilder::section('head'); ?>


<?php echo PageBuilder::block('carousel'); ?>


<section id="sec1">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-10 col-sm-offset-1">
                <?php if(auth()->guard()->check()): ?>
                    <h1>Guest: <?php echo e(Auth::user()); ?></h1>
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                        <h1>GUEST</h1>
                <?php endif; ?>
                <p class="lead"><?php echo e(PageBuilder::block('lead_text')); ?></p>
            </div>
        </div>
        <hr />
        <?php if($pageId = PageBuilder::block_selectpage('show_sub_pages')): ?>
        <?php echo PageBuilder::category(['page_id' => $pageId, 'view' => 'home', 'limit' => 4]); ?>

        <?php endif; ?>
    </div>
</section>



<?php echo PageBuilder::section('footer'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views//themes/temaGrupo3/templates/home.blade.php ENDPATH**/ ?>