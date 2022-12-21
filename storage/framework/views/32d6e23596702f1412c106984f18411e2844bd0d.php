<h1>Dashboard</h1>
<br/>

<div class="row">
    <div class="col-md-8">
        <div class="well well-home">
            <div class="row">
                <div class="col-md-7">
                    <h2>Hi <strong><?php echo e(Auth::user()->getName()); ?>!</strong></h2>
                    <p>Welcome <?php echo e($firstTimer?'':'back '); ?>to the Coaster CMS control panel.</p>
                    <p>Click on the pages menu item to start editing page specific content, or for content on more than one page go to site-wide content.</p>
                </div>
                <div class="col-md-5 text-center">
                    <a href="<?php echo e(route('coaster.admin.account')); ?>" class="btn btn-default" style="margin-top:30px;">
                        <i class="fa fa-lock"></i>  &nbsp; Account settings
                    </a>
                    <a href="<?php echo e(config('coaster.admin.help_link')); ?>" class="btn btn-default" style="margin-top:30px;">
                        <i class="fa fa-life-ring"></i>  &nbsp; Help Docs
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="well well-home">
            <h3><i class="fa fa-info-circle" aria-hidden="true"></i> Version Details</h3>
            <ul>
                <li><strong>Your site:</strong> <?php echo e($upgrade->from); ?></li>
                <li><strong>Latest version:</strong> <?php echo e($upgrade->to); ?></li>
            </ul>
            <?php if($upgrade->allowed && $upgrade->required): ?>
            <p><a class="btn btn-primary" href="<?php echo e(route('coaster.admin.system.upgrade')); ?>">(upgrade)</a></p>
            <?php endif; ?>
            <?php if($canViewSettings): ?>
            <p><a href="<?php echo e(route('coaster.admin.system')); ?>" class="btn btn-default"><i class="fa fa-cog"></i> View all settings</a></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php if($any_requests): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-home">
                <h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Publish Requests To Moderate</h3>
                <?php echo $requests; ?>

                <p><a class="btn btn-default" href="<?php echo e(route('coaster.admin.home.requests')); ?>">View all requests</a></p>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if($any_user_requests): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-home">
                <h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Your Pending Publish Requests</h3>
                <?php echo $user_requests; ?>

                <p><a class="btn btn-default" href="<?php echo e(route('coaster.admin.home.your-requests')); ?>">View all your requests</a></p>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="row">
    <?php if($searchLogNumber): ?>
    <div class="col-md-6">
        <div class="well well-home">
            <h3><i class="fa fa-search" aria-hidden="true"></i> Search data <?php echo e($searchLogNumber?' (top '.$searchLogNumber.')':''); ?></h3>
            <?php echo preg_replace('/<h1.*>(.*)<\/h1>/', '', $searchLogs); ?>

            <p><a class="btn btn-default" href="<?php echo e(route('coaster.admin.search')); ?>">View all search logs</a></p>
        </div>
    </div>
    <?php endif; ?>
    <div class="col-md-<?php echo e($searchLogNumber ?'6':'12'); ?>">
        <div class="well well-home well-blog">
            <h3><i class="fa fa-rss" aria-hidden="true"></i> Latest from the Coaster Cms blog</h3>
            <?php if(!$coasterPosts->isEmpty()): ?>
                <?php $__currentLoopData = $coasterPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coasterPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h4><a href="<?php echo e($coasterPost->link); ?>" target="_blank"><?php echo e($coasterPost->title->rendered); ?></a></h4>
                    <p><?php echo e(CoasterCms\Helpers\Cms\StringHelper::cutString(strip_tags($coasterPost->content->rendered), $searchLogNumber?200:400)); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p>Error connecting to blog.</p>
            <?php endif; ?>
            <p><a class="btn btn-default" href="<?php echo e($coasterBlog); ?>" target="_blank">Visit our blog</a></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="well well-home">
            <h3><i class="fa fa-pencil" aria-hidden="true"></i> Site Updates</h3>
            <?php echo $logs; ?>

            <p><a class="btn btn-default" href="<?php echo e(route('coaster.admin.home.logs')); ?>">View all admin logs</a></p>
        </div>
    </div>
</div>

<?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/pages/dashboard.blade.php ENDPATH**/ ?>