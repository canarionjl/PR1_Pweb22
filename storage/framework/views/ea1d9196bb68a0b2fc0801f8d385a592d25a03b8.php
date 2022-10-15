<div id="addRoleModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Add Role:</h3>
            </div>
            <div class="modal-body form-horizontal">
                <div class="form-group">
                    <div class="col-sm-3">
                        <?php echo Form::label('role_name', 'Role Name:', ['class' => 'control-label']); ?>

                    </div>
                    <div class="col-sm-9">
                        <?php echo Form::text('role_name', null, ['class' => 'form-control']); ?>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <?php echo Form::label('role_copy', 'Copy of:', ['class' => 'control-label']); ?>

                    </div>
                    <div class="col-sm-9">
                        <?php echo Form::select('role_copy', $roles, null, ['class' => 'form-control']); ?>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn cancel" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp; Cancel</button>
                <button class="btn btn-primary add"><i class="fa fa-plus"></i> &nbsp; Add</button>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/modals/roles/add.blade.php ENDPATH**/ ?>