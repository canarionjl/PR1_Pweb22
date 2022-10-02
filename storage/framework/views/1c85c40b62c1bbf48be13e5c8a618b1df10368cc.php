<li id="list_p<?php echo e($page->id); ?>" data-id="<?php echo e($item->id); ?>" data-page-id="<?php echo e($page->id); ?>" class="<?php echo e($item->isHiddenPage($page->id) ? 'hidden-page ' : ''); ?><?php echo $leaf ? 'mjs-nestedSortable-branch mjs-nestedSortable-collapsed' : ''; ?>">
    <div>
        <span class='disclose glyphicon'></span>
        <?php echo $name; ?> &nbsp; <span class="custom-name"><?php echo e(($customName = $item->getCustomName($page->id)) ? '(Custom Name: ' . $customName . ')' : ''); ?></span>
        <span class='pull-right'>
            <?php if($permissions['rename']): ?>
                <i class="rename glyphicon glyphicon-pencil itemTooltip" data-name="<?php echo $name; ?>" title="Rename Menu Item"></i>&nbsp;
                <i class="hide-page fa <?php echo e($item->isHiddenPage($page->id) ? 'fa-eye' : 'fa-eye-slash'); ?> itemTooltip" data-name="<?php echo $name; ?>" title="Hide/Show In Menu"></i>&nbsp;
            <?php endif; ?>
        </span>
    </div>
    <?php echo $leaf; ?>

</li><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/partials/menus/page_li.blade.php ENDPATH**/ ?>