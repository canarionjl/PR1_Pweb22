<div class="row textbox">
    <div class="col-sm-6">
        <h1><?php echo $form; ?> Submissions</h1>
    </div>
    <div class="col-sm-6 text-right">
        <?php if($can_export): ?>
            <a href="<?php echo e($export_link); ?>" class="btn btn-warning addButton" target="_blank"><i
                        class="fa fa-share-square-o"></i> &nbsp; Export</a>
        <?php endif; ?>
    </div>
</div>

<?php echo $links; ?>


<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Content</th>
            <th>Sent</th>
            <th>Date/Time</th>
            <th>Page</th>
        </tr>
        </thead>
        <tbody>
        <?php echo $submissions; ?>

        </tbody>
    </table>
</div><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/pages/forms/submissions.blade.php ENDPATH**/ ?>