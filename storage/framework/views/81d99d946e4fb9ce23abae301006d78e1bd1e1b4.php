<?php echo PageBuilder::section('head'); ?>


<div class="jumbotron" style="background: url(<?php echo e(PageBuilder::block('internal_banner', ['view' => 'raw'])); ?>) no-repeat center"></div>

<section id="sec1">
    <div class="container">

        <?php echo PageBuilder::breadcrumb(); ?>


        <div class="row">
            <div class="col-sm-12">
                <h1><?php echo PageBuilder::block('title'); ?></h1>
                <?php echo PageBuilder::sitemap(['view' => 'sitemap']); ?>

            </div>
        </div>

    </div>
    <!-- /.container -->
</section>

<?php echo PageBuilder::section('footer'); ?>



<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/templates/sitemap.blade.php ENDPATH**/ ?>