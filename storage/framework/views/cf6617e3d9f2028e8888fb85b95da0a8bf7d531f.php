<div class="form-group">
    <?php echo Form::label($name, $label, ['class' => 'control-label col-sm-2']); ?>

    <div class="col-sm-10">
        <div class="row">
            <div class="col-sm-3">Email From:</div>
            <div class="col-sm-9"><?php echo Form::text($name.'[from]', $content->email_from, ['class' => 'form-control']); ?></div>
        </div>
        <div class="row">
            <div class="col-sm-3">Email To:</div>
            <div class="col-sm-9"><?php echo Form::text($name.'[to]', $content->email_to, ['class' => 'form-control']); ?></div>
        </div>
        <div class="row">
            <div class="col-sm-3">Submit Page:</div>
            <div class="col-sm-9"><?php echo Form::select($name.'[page]', $pageList, $content->page_to, ['class' => 'form-control']); ?></div>
        </div>
        <?php if($content->template): ?>
        <div class="row">
            <div class="col-sm-3">Form Template:</div>
            <div class="col-sm-9"><?php echo Form::select($name.'[template]', $formTemplates, $content->template, ['class' => 'form-control form-template']); ?></div>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-sm-3">Enable Secure Captcha:</div>
            <div class="col-sm-9"><?php echo Form::checkbox($name.'[captcha]', 1, $content->captcha, ['class' => 'form-control']); ?></div>
        </div>
        <div class="row">
            <div class="col-sm-3">Form Submissions:</div>
            <div class="col-sm-9"><a href="<?php echo e(route('coaster.admin.forms.submissions', ['blockId' => $_block->id, 'pageId' => $_block->getPageId()])); ?>" class="btn btn-default">View</a></div>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/blocks/form/main.blade.php ENDPATH**/ ?>