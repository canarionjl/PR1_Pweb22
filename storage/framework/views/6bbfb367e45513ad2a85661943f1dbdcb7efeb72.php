<?php if(!$page->id || $page->link == 0 || $menus): ?>
    <h4>Display Info</h4>
<?php endif; ?>

<?php if(!$page->id || $page->link == 0): ?>
    <div id="template_select">
        <?php if(!$templateSelectHidden): ?>
            <?php echo CmsBlockInput::make('select', ['name' => 'page_info[template]', 'label' => 'Page Template', 'content' => $template, 'selectOptions' => $templates]); ?>

        <?php else: ?>
            <?php echo Form::hidden('page_info[template]', $template); ?>

        <?php endif; ?>
    </div>
<?php endif; ?>

<?php if($menus): ?>
    <div class="form-group">
        <?php echo Form::label('page_info_other[menus]', 'Show in Menus', ['class' => 'control-label col-sm-2']); ?>

        <div class="col-sm-10">
            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <label class="checkbox-inline">
                    <?php $options = []; if (!$can_publish) :$options['disabled'] = true; endif; ?>
                    <?php echo Form::checkbox('page_info_other[menus]['.$menu->id.']', 1, $menu->in_menu, $options); ?> &nbsp; <?php echo $menu->label; ?>

                </label>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/partials/tabs/page_info/display_info.blade.php ENDPATH**/ ?>