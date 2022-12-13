<?php echo PageBuilder::section('head'); ?>


<?php echo PageBuilder::block('carousel'); ?>

<?php if(Auth::check()): ?>
    <?php $tipo = Auth::user()->tipoUsuario ?>
<?php endif; ?>
<section id="sec1">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-10 col-sm-offset-1">
                <h2><?php echo e(PageBuilder::block('title')); ?></h2>
                <?php if($tipo == 'Vendedor' || $tipo == 'Productor'): ?>
                    <a href="/portal" type="button" id="portalButton" class="btn btn-default" id="scrollbutton">
                        Portal del <?php echo e(Auth::user()->tipoUsuario); ?></a><br><br>
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
<script>
    document.getElementById('portalButton').addEventListener('click', )
</script>
<?php echo PageBuilder::section('footer'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/templates/home.blade.php ENDPATH**/ ?>