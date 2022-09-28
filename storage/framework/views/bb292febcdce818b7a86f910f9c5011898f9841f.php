<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Action</th>
        <th>User</th>
        <th>Date</th>
        <th></th>
    </tr>

    <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><?php echo $log->id; ?></td>
            <td><?php echo $log->log; ?></td>
            <td><?php echo ($log->user)?$log->user->email:'Undefined'; ?></td>
            <td><?php echo DateTimeHelper::display($log->created_at); ?></td>
            <td>
                <?php if($log->backup && (((time()-strtotime($log->created_at)) < config('coaster.admin.undo_time') && $log->user_id == Auth::user()->id) || Auth::action('backups.restore'))): ?>
                    <a href="javascript:undo_log(<?php echo $log->id; ?>)">Restore</a>
                <?php endif; ?>
            </td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/partials/logs/table.blade.php ENDPATH**/ ?>