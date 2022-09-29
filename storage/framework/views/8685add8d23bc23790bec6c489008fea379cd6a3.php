<?php if($crumb->active): ?>
    <li class="active"><?php echo e($crumb->name); ?></li>
<?php else: ?>
    <li><?php echo HTML::link($crumb->url, $crumb->name); ?></li>
<?php endif; ?><?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/breadcrumbs/default/link_element.blade.php ENDPATH**/ ?>