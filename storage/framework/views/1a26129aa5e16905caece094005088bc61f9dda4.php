<div class="menuLayout">

    <div class="row textbox">

        <h3 class="col-sm-6"><?php echo $menu->label; ?></h3>

        <div class="col-sm-6 text-right">
            <span class="hide btn btn-success disabled" id="menu_<?php echo $menu->id; ?>_saved">Order Saved</span>
            <span class="hide btn btn-danger disabled" id="menu_<?php echo $menu->id; ?>_failed">Sort Failed</span>
            <?php if($permissions['can_add_item']): ?>
                <button class="btn btn-warning" id="menu_<?php echo $menu->id; ?>_add" onclick="add_item(<?php echo $menu->id; ?>)"><i
                            class="fa fa-plus"></i> &nbsp; Add Menu Item
                </button>
            <?php endif; ?>
        </div>

    </div>

    <ol id="menu_<?php echo $menu->id; ?>" class="sortable">
        <?php echo $renderedItems; ?>

    </ol>

</div><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/partials/menus/ol.blade.php ENDPATH**/ ?>