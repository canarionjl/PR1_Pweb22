<?php if($is_first): ?>
<div id="main-banner" class="carousel slide" data-ride="carousel">

    <?php if($total > 1): ?>
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for($i = 0; $i < $total; $i++): ?>
        <li data-target="main-banner" data-slide-to="<?php echo e($i); ?>"<?php echo ($i==0)?' class="active"':''; ?>></li>
        <?php endfor; ?>
    </ol>
    <?php endif; ?>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
<?php endif; ?>

        <div class="item <?php echo e(($count==1)?'active':''); ?>" style="background-image:url('<?php echo e(PageBuilder::block('slide_image', ['view' => 'raw'])); ?>')">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="carwrap">
                            <<?php echo e(($count == 1)?'h1':'h2'); ?>><?php echo e(PageBuilder::block('slide_title')); ?></<?php echo e(($count == 1)?'h1':'h2'); ?>>
                            <p><?php echo PageBuilder::block('slide_text'); ?></p>
                            <?php if(PageBuilder::block('slide_button_link') == ''): ?>
                                <button class="btn btn-default" id="scrollbutton"><?php echo e(PageBuilder::block('slide_button_text')); ?><?php echo PageBuilder::block('slide_button_icon')?' &nbsp; '.PageBuilder::block('slide_button_icon'):''; ?></button>
                            <?php else: ?>
                                <a href="<?php echo PageBuilder::block('slide_button_link'); ?>" class="btn btn-default"><?php echo e(PageBuilder::block('slide_button_text')); ?><?php echo PageBuilder::block('slide_button_icon')?' &nbsp; '.PageBuilder::block('slide_button_icon'):''; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php if($is_last): ?>
    </div>

    <?php if($total > 1): ?>
    <!-- Controls -->
    <a class="left carousel-control" href="#main-banner" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#main-banner" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <?php endif; ?>

</div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/blocks/repeater/carousel.blade.php ENDPATH**/ ?>