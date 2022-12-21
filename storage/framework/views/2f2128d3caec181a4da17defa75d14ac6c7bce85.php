<h1>Themes</h1>
<br/>

<h2>Manage Themes</h2>

<p>View all uploaded themes. Can upload, install, activate and delete them here.</p>
<p>Can also update a themes blocks (this option may take a few seconds as it has to process all theme files):</p>

<br />

<div class="form-horizontal">
    <div class="form-inline">
        <a href="<?php echo e(route('coaster.admin.themes.list')); ?>" class="btn btn-warning"><i class="fa fa-tint"></i> &nbsp; Manage Themes</a>
    </div>
</div>

<?php if(!empty($blockSettings)): ?>

    <br />

    <h2>Block Settings</h2>

    <?php $__currentLoopData = $blockSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><a href="<?php echo e($url); ?>"><?php echo e($name); ?></a></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?>
<?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/pages/themes.blade.php ENDPATH**/ ?>