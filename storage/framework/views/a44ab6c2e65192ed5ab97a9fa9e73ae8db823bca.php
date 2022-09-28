<?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="tab-pane" id="tab<?php echo $index; ?>">

        <br/><br/>

        <?php echo $content; ?>


        <?php if($index >= 0 && ((!empty($page) && !$page->link) || $can_publish)): ?>

            <?php if($new_page): ?>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-floppy-o"></i> &nbsp;
                            Add Page</button>
                    </div>
                </div>
            <?php elseif(!$publishing): ?>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button class="btn btn-primary" name="publish" value="publish" type="submit"><i class="fa fa-floppy-o"></i>
                            &nbsp; Update Page</button>
                    </div>
                </div>
            <?php elseif($publishing): ?>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-floppy-o"></i> &nbsp;
                            Save Version</button>
                        &nbsp;
                        <?php if($can_publish): ?>
                            <button class="btn btn-primary" name="publish" type="submit" value="publish"><i class="fa fa-floppy-o"></i>
                                &nbsp; Save <?php echo e($page->is_live() ? 'Version & Publish':' & Set As Version Ready To Go Live'); ?></button>
                        <?php else: ?>
                            <button class="btn btn-primary request_publish"><i class="fa fa-paper-plane"></i> &nbsp;
                                Save & Request Publish Of Version</button>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

        <?php endif; ?>

    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/partials/tabs/content.blade.php ENDPATH**/ ?>