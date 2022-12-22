<div class="row textbox">
    <div class="col-sm-6">
        <h1>User List</h1>
    </div>
    <div class="col-sm-6 text-right">
        <?php if($can_add == true): ?>
            <a href="<?php echo e(route('coaster.admin.users.add')); ?>" class="btn btn-warning addButton"><i class="fa fa-plus"></i> &nbsp;
                Add User</a>
        <?php endif; ?>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>User</th>
            <th>Role</th>
            <?php if($can_edit || $can_delete): ?>
                <th>Actions</th>
            <?php endif; ?>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr id="user_<?php echo $user->id; ?>">
                <td><?php echo $user->email; ?></td>
                <td><?php echo $user->name; ?></td>
                <?php if($can_edit || $can_delete): ?>
                    <td data-uid="<?php echo $user->id; ?>">
                        <?php if($can_edit): ?>
                            <?php $enable = ($user->active == 0) ? null : ' hide'; ?>
                            <?php $disable = ($user->active == 0) ? ' hide' : null; ?>
                            <i class="glyphicon glyphicon-stop itemTooltip<?php echo $enable; ?>" title="Enable User"></i>
                            <i class="glyphicon glyphicon-play itemTooltip<?php echo $disable; ?>" title="Disable User"></i>
                            <a class="glyphicon glyphicon-pencil itemTooltip" href="<?php echo e(route('coaster.admin.users.edit', ['userId' => $user->id])); ?>" title="Edit User"></a>
                        <?php endif; ?>
                        <?php if($can_delete): ?>
                            <i class="glyphicon glyphicon-remove itemTooltip" title="Remove User"
                               data-name="<?php echo $user->email; ?>"></i>
                        <?php endif; ?>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">

        function disable_user(user_id, active) {
            if (user_id == <?php echo e(Auth::user()->id); ?>) {
                cms_alert('danger', 'Can\'t disable your own account');
            }
            else {
                $.ajax({
                    url: route('coaster.admin.users.edit', {userId: user_id, action: 'status'}),
                    type: 'POST',
                    data: {set: active},
                    success: function (r) {
                        if (r == 1) {
                            if (active == 0) {
                                $("#user_" + user_id + " .glyphicon-play").addClass('hide');
                                $("#user_" + user_id + " .glyphicon-stop").removeClass('hide');
                            }
                            else {
                                $("#user_" + user_id + " .glyphicon-stop").addClass('hide');
                                $("#user_" + user_id + " .glyphicon-play").removeClass('hide');
                            }
                        }
                        else {
                            cms_alert('danger', 'Can\'t disable this user.');
                        }
                    }
                });
            }
        }

        $(document).ready(function () {
            $('.glyphicon-play').click(function () {
                disable_user($(this).parent().attr('data-uid'), 0);
            });
            $('.glyphicon-stop').click(function () {
                disable_user($(this).parent().attr('data-uid'), 1);
            });

            watch_for_delete('.glyphicon-remove', 'user', function (el) {
                var user_id = el.parent().attr('data-uid');
                if (user_id == <?php echo Auth::user()->id; ?>) {
                    alert('Can\'t delete your own account');
                    return false;
                } else {
                    return 'user_' + user_id;
                }
            });
        });

    </script>
<?php $__env->stopSection(); ?><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/pages/users.blade.php ENDPATH**/ ?>