<li class="dropdown <?php echo e(($item->active)?' active':''); ?>">
    <a href="<?php echo e($item->url); ?>" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo e($item->name); ?><b class="caret" data-toggle="dropdown"></b>
    </a>
    <ul class="dropdown-menu">
        <?php echo $items; ?>

    </ul>
</li>
<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/coaster2017/menus/default/submenu_1.blade.php ENDPATH**/ ?>