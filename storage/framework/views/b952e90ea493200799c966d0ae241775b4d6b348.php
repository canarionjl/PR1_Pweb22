<?php echo Form::open($formAttributes); ?>

<?php echo Form::hidden('form_template', $formTemplate); ?>

<?php echo Form::hidden('block_id', $blockId); ?>

<?php echo Form::hidden('page_id', $pageId); ?>

<?php if($honeyPot): ?>
    <?php echo Form::hidden('coaster_check', ''); ?>

<?php endif; ?>
<?php echo $formView; ?>

<?php echo Form::close(); ?><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/frontend/form/wrap.blade.php ENDPATH**/ ?>