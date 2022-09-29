<?php echo PageBuilder::section('head'); ?>


<div class="jumbotron" style="background: url(<?php echo e(PageBuilder::block('internal_banner', ['view' => 'raw'])); ?>) no-repeat center"></div>

<section id="sec1">
    <div class="container">

        <?php echo PageBuilder::breadcrumb(); ?>


        <div class="row">
            <div class="col-sm-12">
                <?php echo PageBuilder::img('404.jpg'); ?>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <p class="errorpage_1">oops, <?php echo $error; ?> ...</p>
                <p class="errorpage_2">Error: 404</p>
                <p>We couldn't find the page you requested on our servers. We're really sorry about that. It's our fault, not yours. We'll work hard to get this page back online as soon as possible.</p>
            </div>
        </div>

    </div>
</section>

<?php echo PageBuilder::section('footer'); ?><?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/coaster2017/errors/404.blade.php ENDPATH**/ ?>