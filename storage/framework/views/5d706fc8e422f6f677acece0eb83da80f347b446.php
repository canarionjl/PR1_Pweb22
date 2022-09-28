<?php
// Vertical listing (down then right)
$cols = 3;
$new_col_on_count = array_map(function($v) use($total, $cols) { return ceil($v*$total/$cols); }, range(1,$cols));
?>

<?php if($is_first || in_array($count-1, $new_col_on_count)): ?>
    <div class="col-sm-4">
        <ul>
            <?php endif; ?>
            <li><a href="<?php echo $page->url; ?>"><?php echo $page->name; ?></a></li>
            <?php if($is_last || in_array($count, $new_col_on_count)): ?>
        </ul>
    </div>
<?php endif; ?><?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/coaster2017/categories/default/page.blade.php ENDPATH**/ ?>