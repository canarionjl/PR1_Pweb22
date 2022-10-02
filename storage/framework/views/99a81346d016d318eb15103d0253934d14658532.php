<li id="list_<?php echo $item->id; ?>" data-id="<?php echo $item->id; ?>">
    <div>
        <span class='disclose glyphicon'></span>
        <?php echo $name; ?> &nbsp; <span class="custom-name"><?php echo e(($customName = $item->getCustomName()) ? '(Custom Name: ' . $customName . ')' : ''); ?></span>
        <span class='pull-right'>
            <?php if($permissions['subpage'] == true): ?>
                <span class='sl_numb'><?php echo $item->sub_levels; ?></span> Sublevels  &nbsp;
                <i class="sub-levels fa fa-sort-amount-desc itemTooltip" data-name="<?php echo $name; ?>"
                   title="Edit Subpage Level"></i> &nbsp;
            <?php else: ?>
                <span class='sl_numb'><?php echo $item->sub_levels; ?></span> Sublevels &nbsp;
            <?php endif; ?>
            <?php if($permissions['rename'] == true): ?>
                <i class="rename glyphicon glyphicon-pencil itemTooltip" data-name="<?php echo $name; ?>"
                   title="Rename Menu Item"></i>&nbsp;
            <?php endif; ?>
            <?php if($permissions['delete'] == true): ?>
                <i class="delete glyphicon glyphicon-trash itemTooltip" data-name="<?php echo $name; ?>"
                   title="Delete Menu Item"></i>&nbsp;
            <?php endif; ?>
        </span>
    </div>
    <?php echo $leaf; ?>

</li><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/partials/menus/li.blade.php ENDPATH**/ ?>