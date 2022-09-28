<?php if($is_first): ?>
    <section class="banners">
        <div class="container">
            <?php endif; ?>

            <?php if($is_first || $count % 4 == 1): ?>
                <div class="row">
                    <?php endif; ?>
                    <div class="col-sm-4">
                        <a href="<?php echo PageBuilder::block('banner_link'); ?>">
                            <?php echo PageBuilder::block('banner_image', ['class' => 'img-responsive']); ?>

                        </a>
                    </div>
                    <?php if($is_last || $count % 4 == 0): ?>
                </div>
            <?php endif; ?>

            <?php if($is_last): ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/coaster2017/blocks/repeater/banner.blade.php ENDPATH**/ ?>