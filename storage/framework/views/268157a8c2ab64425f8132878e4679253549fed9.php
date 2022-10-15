<tr id='list_<?php echo $pageId; ?>' data-name='<?php echo $page_lang->name; ?>'>
    <td>
        <?php echo $page_lang->name; ?>

    </td>
    <?php $__currentLoopData = $showBlocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $showBlock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <td>
            <?php echo e($showBlock); ?>

        </td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <td>
        <?php if($can_edit): ?>
            <a href="<?php echo e(route('coaster.admin.pages.edit', ['pageId' => $pageId])); ?>" class="glyphicon glyphicon-pencil itemTooltip" title="<?php echo e('Edit '.$item_name); ?>"></a>
        <?php endif; ?>
        <?php if($can_delete): ?>
            <i class="delete glyphicon glyphicon-trash itemTooltip" data-name="<?php echo $page_lang->name; ?>"
               title="Delete <?php echo e($item_name); ?>"></i>
        <?php endif; ?>
    </td>
</tr><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/partials/groups/page_row.blade.php ENDPATH**/ ?>