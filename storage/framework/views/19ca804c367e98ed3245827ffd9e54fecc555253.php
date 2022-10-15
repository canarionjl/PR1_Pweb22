<?php echo PageBuilder::section('head'); ?>


<div class="jumbotron" style="background: url(<?php echo e(PageBuilder::block('internal_banner', ['view' => 'raw'])); ?>) no-repeat center"></div>

<section id="sec1">
    <div class="container">

        <?php echo PageBuilder::breadcrumb(); ?>


        <?php
        $sidebar_title = PageBuilder::block('sidebar_title');
        $sidebar_content = PageBuilder::block('sidebar_content');
        ?>


        <div class="row">
            <div class="<?php echo e(($sidebar_title || $sidebar_content)?'col-sm-8':'col-sm-12'); ?>">
                <h1><?php echo PageBuilder::block('title'); ?></h1>
                <p class="lead"><?php echo PageBuilder::block('lead_text'); ?></p>
                <?php echo PageBuilder::block('content'); ?>


            <?php if($sidebar_title || $sidebar_content): ?>
            <div class="col-sm-4">
                <h2><?php echo $sidebar_title; ?></h2>
                <?php echo $sidebar_content; ?>

            </div>
            <?php endif; ?>

</section>



<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/templates/internal.blade.php ENDPATH**/ ?>