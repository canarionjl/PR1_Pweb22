<div class="table-responsive">
    <table class="table table-striped">

        <thead>
        <tr>
            <th><?php echo $item_name; ?></th>
            <?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <th>
                    <?php echo $block->label; ?>

                </th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
            <?php echo $rows; ?>

        </tbody>

    </table>
</div><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/partials/groups/page_table.blade.php ENDPATH**/ ?>