<div class="row">
    <div class="col-sm-6">
        <h1><?php echo $group->name; ?></h1>
    </div>
    <div class="col-sm-6 text-right">
        <?php if($can_edit): ?>
            <a href="<?php echo e(route('coaster.admin.groups.edit', ['groupId' => $group->id])); ?>" class="btn btn-warning addButton">
                <i class="fa fa-pencil"></i> &nbsp; Edit Group Settings</a> &nbsp;
        <?php endif; ?>
        <?php if($can_add): ?>
            <a href="<?php echo e(route('coaster.admin.pages.add', ['pageId' => 0, 'groupId' => $group->id])); ?>" class="btn btn-warning addButton">
                <i class="fa fa-plus"></i> &nbsp; Add <?php echo $group->item_name; ?></a>
        <?php endif; ?>
    </div>
</div>

<?php echo $pages; ?>


<?php $__env->startSection('scripts'); ?>
    <script type='text/javascript'>

        $(document).ready(function () {

            watch_for_delete('.delete', 'page', function (el) {
                return el.closest('tr').attr('id');
            }, route('coaster.admin.pages.delete', {pageId : ''}));

        });
    </script>
<?php $__env->stopSection(); ?><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/pages/groups.blade.php ENDPATH**/ ?>