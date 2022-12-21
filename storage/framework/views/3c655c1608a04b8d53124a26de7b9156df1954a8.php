<?php AssetBuilder::setStatus('cms-editor', true); ?>

<h1>Site-wide Content</h1>
<br/>

<?php echo Form::open(['url' => Request::url(), 'id' => 'blocksForm', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']); ?>

<div class="tabbable" id="contentTabs">

    <ul class="nav nav-tabs">
        <?php echo $tab['headers']; ?>

    </ul>

    <div class="tab-content">
        <?php echo $tab['contents']; ?>

    </div>

</div>

<?php echo Form::close(); ?>



<?php $__env->startSection('scripts'); ?>
    <script type='text/javascript'>

        $(document).ready(function () {
            selected_tab('#blocksForm', 0);
            load_editor_js();
        });

    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/pages/blocks.blade.php ENDPATH**/ ?>