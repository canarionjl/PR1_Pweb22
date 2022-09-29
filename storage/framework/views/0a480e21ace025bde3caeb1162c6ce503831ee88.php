<li id='list_<?php echo $page->id; ?>'>
    <div class='<?php echo $li_info->type; ?>'>
        <span class='disclose glyphicon'></span>
        <?php echo $li_info->altName ?: $page_lang->name; ?> <?php echo $li_info->group ? ' &nbsp; (Group: ' . $li_info->group->name . ')' : ''; ?>

        <span class="pull-right">
            <?php if(!empty($li_info->blog) && $permissions['blog']): ?>
                <?php echo HTML::link($li_info->blog, '', ['class' => 'glyphicon glyphicon-share itemTooltip', 'title' => 'WordPress Admin', 'target' => '_blank']); ?>

            <?php endif; ?>
            <?php if($li_info->number_of_forms > 0 && $permissions['forms']): ?>
                <a href="<?php echo e(route('coaster.admin.forms.list', ['pageId' => $page->id])); ?>" class="glyphicon glyphicon-inbox itemTooltip" title="View Form Submissions"></a>
            <?php endif; ?>
            <?php if($li_info->number_of_galleries > 0 && $permissions['galleries']): ?>
                <a href="<?php echo e(route('coaster.admin.gallery.list', ['pageId' => $page->id])); ?>" class="glyphicon glyphicon-picture itemTooltip" title="Edit Gallery"></a>
            <?php endif; ?>
            <?php if($page->group_container && $permissions['group']): ?>
                <a href="<?php echo e(route('coaster.admin.groups.pages', ['groupId' => $page->group_container])); ?>" class="glyphicon glyphicon-list-alt itemTooltip" title="Manage Items"></a>
            <?php endif; ?>
            <?php echo HTML::link($li_info->preview_link, '', ['class' => 'glyphicon glyphicon-eye-open itemTooltip', 'title' => ($li_info->type=='type_hidden')?'Preview':'View Page', 'target' => '_blank']); ?>

            <?php if($permissions['add'] == true && empty($page->link)): ?>
                <a href="<?php echo e(route('coaster.admin.pages.add', ['pageId' => $page->group_container?0:$page->id, 'groupId' => $page->group_container?:null])); ?>" class="glyphicon glyphicon-plus itemTooltip addPage" title="<?php echo e('Add '.($page->group_container?'Group Page':'Sub Page')); ?>"></a>
            <?php endif; ?>
            <?php if($permissions['edit'] == true): ?>
                <a href="<?php echo e(route('coaster.admin.pages.edit', ['pageId' => $page->id])); ?>" class="glyphicon glyphicon-pencil itemTooltip" title="Edit Page"></a>
            <?php endif; ?>
            <?php if($permissions['delete'] == true): ?>
                <a href="javascript:void(0)" class="delete glyphicon glyphicon-trash itemTooltip"
                   data-name="<?php echo $page_lang->name; ?>" title="Delete Page"></a>
            <?php endif; ?>
        </span>
    </div>
    <?php echo $li_info->leaf; ?>

</li><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/partials/pages/li.blade.php ENDPATH**/ ?>