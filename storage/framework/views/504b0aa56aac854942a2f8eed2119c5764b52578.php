<div id="blogBar">

    <h3>Search</h3>

    <form id="blogSearch">
        <div class="input-group">
            <input type="text" id="query" placeholder="Search the blog ..." class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" id="blogSearchButton" type="submit"><span class="fa fa-search"></span></button>
            </span>
        </div><!-- /input-group -->
    </form>

    <h3>Categories</h3>

    <ul class="category-detailed">
        <?php
        $categories = PageBuilder::blockData('categories', ['importIgnore' => true, 'returnAll' => true]) ?: [];
        $blogCategoryPage = PageBuilder::pageUrl(PageBuilder::block('blog_category_page'));
        ?>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e($blogCategoryPage); ?>?id=<?php echo e($link); ?>"><?php echo e($category); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h3>Archives</h3>

    <ul class="category-detailed">
        <?php $month = (new Carbon\Carbon)->startOfMonth()->modify('+1 month'); $maxArchives = 10; $orStopAt = clone $month; $orStopAt->modify('-3 year'); ?>
        <?php while($maxArchives > 0 && $month->gt($orStopAt)): ?>
            <?php $cloneMonth = clone $month; ?>
            <?php if(PageBuilder::categoryFilter('post_date', [$month->modify('-1 month'), $cloneMonth], ['render' => false, 'page_id' => PageBuilder::block('blog_main_page'), 'match' => 'in'])): ?>
                <li><a href="<?php echo PageBuilder::pageUrl(PageBuilder::block('blog_archive_page')); ?>?id=<?php echo e($month->format('Y-m')); ?>"><?php echo e($month->format('F Y')); ?></a></li>
                <?php $maxArchives--; ?>
            <?php endif; ?>
        <?php endwhile; ?>
    </ul>

</div>
<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/coaster2017/sections/blog-bar.blade.php ENDPATH**/ ?>