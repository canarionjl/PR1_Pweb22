<h1>Redirects</h1>

<div class="row textbox">
    <div class="col-sm-12">
        <p>The force option will force the redirect to run even it a page exists at the 'Redirect From' path.</p>
        <p>You can use % at the end of the 'Redirect From' field, ie. "test/%" will catch any pathnames starting with
            "test/".</p>
    </div>
</div>

<?php echo Form::open(['id' => 'editForm', 'enctype' => 'multipart/form-data']); ?>


<div class="table-responsive">
    <table id="redirects" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th><a href="<?php echo route('coaster.admin.redirects').'?order=redirect'; ?>">Redirect From</a></th>
            <th><a href="<?php echo route('coaster.admin.redirects').'?order=to'; ?>">Redirect To</a></th>
            <th><a href="<?php echo route('coaster.admin.redirects').'?order=forced'; ?>">Forced</a></th>
            <?php if($can_edit): ?>
                <th>Remove</th>
            <?php endif; ?>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $redirects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $redirect): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr id="redirect_<?php echo $redirect->id; ?>">
                <td>
                    <?php if($can_edit): ?>
                        <?php echo Form::text('redirect['.$redirect->id.'][from]', $redirect->redirect, ['class' => 'form-control']); ?>

                    <?php else: ?>
                        <?php echo $redirect->redirect; ?>

                    <?php endif; ?>
                </td>
                <td>
                    <?php if($can_edit): ?>
                        <?php echo Form::text('redirect['.$redirect->id.'][to]', $redirect->to, ['class' => 'form-control']); ?>

                    <?php else: ?>
                        <?php echo $redirect->to; ?>

                    <?php endif; ?>
                </td>
                <td>
                    <?php if($can_edit): ?>
                        <?php echo Form::checkbox('redirect['.$redirect->id.'][force]', 1, $redirect->force, ['class' => 'form-control']); ?>

                    <?php else: ?>
                        <?php echo ($redirect->force==1)?'Yes':'No'; ?>

                    <?php endif; ?>
                </td>
                <?php if($can_edit): ?>
                    <td>
                        <i class="glyphicon glyphicon-remove itemTooltip" title="Remove Redirect"
                           onclick="delete_redirect('<?php echo $redirect->id; ?>')"></i>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php if($can_edit): ?>
    <div class="row textbox">
        <div class="col-sm-12">
            <button type="button" class="btn add_another" onclick="add_redirect()"><i class="fa fa-plus"></i>
                &nbsp; Add Another
            </button>
            <button class="btn btn-primary" type="submit"><i class="fa fa-floppy-o"></i> &nbsp; Save Redirects</button>
        </div>
    </div>
<?php endif; ?>

<?php echo Form::close(); ?>



<?php $__env->startSection('scripts'); ?>
    <script type='text/javascript'>

        function delete_redirect(id) {
            var check_new = id.toString().substr(0, 3);
            if (check_new != 'new') {
                $.ajax({
                    url: route('coaster.admin.redirects.edit'),
                    type: 'POST',
                    data: {delete_id: id},
                    success: function () {
                        $("#redirect_" + id).remove();
                    }
                });
            }
            else {
                $("#redirect_" + id).remove();
            }
        }

        var new_redirect = 1;

        <?php if($can_edit): ?>
        function add_redirect() {
            var id = 'new' + new_redirect;
            new_redirect++;
            $("#redirects > tbody").append('<tr id="redirect_' + id + '">' +
                    '<td><input class="form-control" name="redirect[' + id + '][from]" type="text"></td>' +
                    '<td><input class="form-control" name="redirect[' + id + '][to]" type="text"></td>' +
                    '<td><input name="redirect[' + id + '][force]" class="form-control" type="checkbox" value="1"></td>' +
                    '<td><i class="glyphicon glyphicon-remove itemTooltip" title="Remove Redirect" onclick="delete_redirect(\'' + id + '\')"></i></td>' +
                    '</tr>'
            );
            $('.itemTooltip').tooltip({placement: 'bottom', container: 'body'});
        }
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/pages/redirects.blade.php ENDPATH**/ ?>