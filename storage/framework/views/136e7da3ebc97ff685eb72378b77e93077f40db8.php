<?php if($count % 3 == 1): ?>
    <div class="row text-center meetrow">
<?php endif; ?>

        <div class="col-sm-4">
            <?php echo PageBuilder::block('member_image', ['class' => 'img-responsive img-inline']); ?>

            <h3><?php echo PageBuilder::block('member_name'); ?></h3>
            <p><?php echo PageBuilder::block('member_text'); ?></p>
        </div>

<?php if($is_last || $count % 3 == 0): ?>
    </div>
<?php endif; ?><?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/blocks/repeater/team.blade.php ENDPATH**/ ?>