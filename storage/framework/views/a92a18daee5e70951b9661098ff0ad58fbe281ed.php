<?php if($is_first || $count % 4 == 1): ?>
<section class="socialmedia">
    <div class="container">
        <div class="row text-center">
<?php endif; ?>

            <div class="col-sm-3">
                <p>
                    <a href="<?php echo e(PageBuilder::block('social_link')); ?>">
                        <?php echo PageBuilder::block('social_icon'); ?> &nbsp; <?php echo e(PageBuilder::block('social_name')); ?>

                    </a>
                </p>
            </div>

<?php if($is_last || $count % 4 == 0): ?>
        </div>
    </div>
</section>
<?php endif; ?><?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/blocks/repeater/social.blade.php ENDPATH**/ ?>