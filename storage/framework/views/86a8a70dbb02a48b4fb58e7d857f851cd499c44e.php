<?php echo PageBuilder::section('head'); ?>


<div class="jumbotron" style="background: url(<?php echo e(PageBuilder::block('internal_banner', ['view' => 'raw'])); ?>) no-repeat center"></div>

<section id="sec1">
    <div class="container">

        <?php echo PageBuilder::breadcrumb(); ?>


        <div class="row">
            <div class="col-sm-12">
                <h1><?php echo PageBuilder::block('title'); ?></h1>
                <p class="lead"><?php echo PageBuilder::block('lead_text'); ?></p>
                <?php echo PageBuilder::block('content'); ?>

            </div>
        </div>

        <?php
        $contact = [
            'email' => PageBuilder::block('email'),
            'phone' => PageBuilder::block('phone'),
            'address' => PageBuilder::block('address')
        ];
        $columns = count(array_filter($contact));
        $columns = $columns?12/$columns:12;
        ?>

        <div class="row contactdetailsrow">
            <?php if($contact['email']): ?>
            <div class="col-sm-<?php echo e($columns); ?>">
                <p><span class="fa fa-envelope" aria-hidden="true"></span></p>
                <h3><?php echo $contact['email']; ?></h3>
            </div>
            <?php endif; ?>
            <?php if($contact['phone']): ?>
            <div class="col-sm-<?php echo e($columns); ?>">
                <p><span class="fa fa-mobile" aria-hidden="true"></span></p>
                <h3><?php echo $contact['phone']; ?></h3>
            </div>
            <?php endif; ?>
            <?php if($contact['address']): ?>
            <div class="col-sm-<?php echo e($columns); ?>">
                <p><span class="fa fa-map-marker" aria-hidden="true"></span></p>
                <h3><?php echo $contact['address']; ?></h3>
            </div>
            <?php endif; ?>
        </div>

        <?php echo PageBuilder::block('contact_form'); ?>


        <?php $map = PageBuilder::block('map_link'); ?>

        <?php if($map): ?>
        <div class="row">
            <div class="col-sm-12">
                <iframe src="<?php echo e($map); ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
        </div>
        <?php endif; ?>

    </div>
</section>

<?php echo PageBuilder::section('footer'); ?><?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/coaster2017/templates/contact.blade.php ENDPATH**/ ?>