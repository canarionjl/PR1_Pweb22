<?php AssetBuilder::setStatus('cms-editor', true); ?>

<h1><?php echo $item_name; ?>: <?php echo $page_lang->name; ?></h1>

<div class="row textbox">
    <div class="col-sm-6">
        <?php $__currentLoopData = $page->groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><a href="<?php echo route('coaster.admin.groups.pages', ['groupId' => $group->id]); ?>">Back
                    to <?php echo $group->name; ?></a></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($publishingOn && $page->link == 0): ?>
            <p id="version-well" class="well">
                Published Version: #<span class="live_version_id"><?php echo e($version['live']); ?></span>
                <?php if($page->is_live()): ?>
                    <?php $published = '<b>&nbsp;<span class="text-success version-p"> - latest version live</span></b>'; ?>
                    <?php $unPublished = '<b>&nbsp;<span class="text-danger version-up"> - latest version not published</span></b>'; ?>
                <?php else: ?>
                    <?php $published = '<b>&nbsp;<span class="text-warning version-p"> - latest version published (page not live)</span></b>'; ?>
                    <?php $unPublished = ' <b>&nbsp;<span class="text-danger version-up"> - latest version not published & page not live</span></b>'; ?>
                <?php endif; ?>
                <?php if($version['live'] != $version['latest']): ?>
                    <?php echo str_replace('version-p', 'version-p hidden', $published).$unPublished; ?>

                <?php else: ?>
                    <?php echo $published.str_replace('version-up', 'version-up hidden', $unPublished); ?>

                <?php endif; ?>
                <br />
                Editing From Version: #<?php echo e($version['editing']); ?> &nbsp;&nbsp; (Latest Version: #<?php echo e($version['latest']); ?>)
            </p>
        <?php endif; ?>
    </div>
    <div class="col-sm-6 text-right">
        <?php if($auth['can_duplicate']): ?>
            <button class="btn btn-danger" onclick="duplicate_page()">
                <i class="fa fa-files-o"></i> &nbsp; Duplicate Page
            </button> &nbsp;
        <?php endif; ?>
        <?php if($page->link == 1): ?>
            <a href="<?php echo e($frontendLink); ?>" class="btn btn-warning"
               target="_blank">
                <i class="fa fa-eye"></i> &nbsp; View Doc / Url
            </a>
        <?php elseif(!$page->is_live()): ?>
            <a href="<?php echo e($frontendLink); ?>" class="btn btn-warning"
               target="_blank">
                <i class="fa fa-eye"></i> &nbsp; Preview
            </a>
        <?php else: ?>
            <a href="<?php echo e($frontendLink); ?>" class="btn btn-warning" target="_blank">
                <i class="fa fa-eye"></i> &nbsp; View Live Page
            </a>
        <?php endif; ?>

    </div>
</div>

<br/>

<?php echo Form::open(['class' => 'form-horizontal', 'id' => 'editForm', 'enctype' => 'multipart/form-data']); ?>


<div class="tabbable" id="contentTabs">

    <ul class="nav nav-tabs">
        <?php echo $tab['headers']; ?>

    </ul>

    <div class="tab-content">
        <?php echo $tab['contents']; ?>

    </div>

</div>

<input type="hidden" name="versionFrom" value="<?php echo e($version['editing']); ?>">
<input type="hidden" name="duplicate" value="0" id="duplicate_set">

<?php echo Form::close(); ?>


<?php $__env->startSection('scripts'); ?>
    <script type='text/javascript'>
        function duplicate_page() {
            $('#duplicate_set').val(1);
            $('#editForm').trigger('submit');
        }

        $(document).ready(function () {

            selected_tab('#editForm', parseInt(<?php echo e($page->link ? 0 : 1); ?>));
            updateListenPageUrl(true);
            updateListenLiveOptions();
            updateListenGroupFields();
            load_editor_js();
            headerNote();

            page_id = parseInt(<?php echo e($page->id); ?>);
            latest_version = '<?php echo e($version['latest']); ?>';

        });
    </script>
<?php $__env->appendSection(); ?><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/pages/pages/edit.blade.php ENDPATH**/ ?>