<tr>
    <td>
        <?php if($id > 0): ?>
            <div class="form-inline">
                <label for="<?php echo e($id); ?>">
                    <?php echo Form::checkbox($id, 'yes', $val, ['class' => 'form-control '.$class]); ?> &nbsp; <?php echo e($name); ?>

                </label>
            </div>
            <?php else: ?>
            &raquo; <a href="<?php echo e(route('coaster.admin.roles.pages', ['roleId' => ''])); ?>" id="page_permissions"><?php echo e($name); ?></a>
        <?php endif; ?>
    </td>
</tr><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/partials/roles/option.blade.php ENDPATH**/ ?>