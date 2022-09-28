<?php echo PageBuilder::section('head'); ?>


<div class="jumbotron" style="background: url(<?php echo e(PageBuilder::block('internal_banner', ['view' => 'raw'])); ?>) no-repeat center"></div>

<section id="sec1">
    <div class="container">

        <?php echo PageBuilder::breadcrumb(); ?>


        <div class="row">

            <div class="col-sm-9">

                <h1><?php echo PageBuilder::block('title'); ?></h1>
                <h2 class="sub-header">Posted on <?php echo e(PageBuilder::block('post_date', ['format' => 'jS F Y'])); ?> by <?php echo e(PageBuilder::block('post_author')); ?></h2>
                <p class="lead"><?php echo PageBuilder::block('lead_text'); ?></p>
                <?php echo PageBuilder::block('content'); ?>

                <?php echo PageBuilder::block('video'); ?>


                <?php $categories = PageBuilder::blockData('categories'); ?>
                <?php if($categories): ?>
                    <p>In categories:
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(PageBuilder::pageUrl(PageBuilder::block('blog_category_page'))); ?>?id=<?php echo e($category); ?>"><?php echo e($category); ?></a><?php echo e((!$loop->last) ? ',' : ''); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </p>
                <?php endif; ?>

                <?php echo PageBuilder::block('comments'); ?>

                <?php echo PageBuilder::block('comments', ['form' => true]); ?>


            </div>

            <div class="col-sm-3">
                <?php echo PageBuilder::section('blog-bar'); ?>

            </div>

        </div>

    </div>
</section>

<?php echo PageBuilder::section('footer'); ?><?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/coaster2017/templates/blog-post.blade.php ENDPATH**/ ?>