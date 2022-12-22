<h1>System Settings</h1>

<br/>

<div id="system_tabs" class="tabbable">

    <ul class="nav nav-tabs">
        <li id="navtab0"><a href="#tab0" data-toggle="tab">Settings</a></li>
        <li id="navtab1"><a href="#tab1" data-toggle="tab">Site Health</a></li>
        <?php if(Auth::action('coaster.wpimport')): ?>
            <li id="navtab2"><a href="#tab2" data-toggle="tab">Import Tools</a></li>
        <?php endif; ?>
    </ul>

    <div class="tab-content">


        <div class="tab-pane" id="tab0">
            <br />
            <?php echo Form::open(['url' => Request::url()]); ?>



            <div class="table-responsive">
                <table class="table table-bordered">

                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Value</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $__currentLoopData = $site_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo $setting->label; ?></td>
                            <td>
                                <?php $inputDetails = ($setting->editable) ? ['class' => 'form-control'] : ['class' => 'form-control', 'disabled' => true]; ?>
                                <?php if(is_string($setting->value)): ?>
                                    <?php echo Form::text($setting->name, $setting->value, $inputDetails); ?>

                                <?php else: ?>
                                    <?php echo Form::select($setting->name, $setting->value->options, $setting->value->selected, $inputDetails); ?>

                                <?php endif; ?>
                                <?php if($setting->note): ?>
                                    <span class="help-block"><?php echo $setting->note; ?></span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>
            </div>

            <?php if(Auth::action('system.update')): ?>
                <div class="form-group">
                    <?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>

                </div>
            <?php endif; ?>

            <?php echo Form::close(); ?>

        </div>


        <div class="tab-pane" id="tab1">
            <br/>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>PHP Version</td>
                        <td><span class="<?php echo e(version_compare(phpversion(), '5.5.9')?'text-success':'text-danger'); ?>"><?php echo e(phpversion()); ?>&nbsp; (required: 5.5.9+)</span></td>
                    </tr>

                    <tr>
                        <td>Site Version</td>
                        <?php if($can_upgrade && $upgrade->required): ?>
                            <td><span class="text-warning"><?php echo e($upgrade->from); ?> [latest release <?php echo e($upgrade->to); ?>]</span> <a href="<?php echo e(route('coaster.admin.system.upgrade')); ?>">(upgrade)</a></td>
                        <?php else: ?>
                            <td><span class="text-success"><?php echo e($upgrade->from); ?> [latest release <?php echo e($upgrade->to); ?>]</span></td>
                        <?php endif; ?>
                    </tr>
                    <tr>
                        <td>Database Structure</td>
                        <td>
                            <?php if(!empty($database_structure['errors'])): ?>
                                <span class="text-danger"><?php echo e(count($database_structure['errors']).' '.\Str::plural('error', count($database_structure['errors']))); ?> found</span>
                            <?php elseif(!empty($database_structure['warnings'])): ?>
                                <span class="text-warning"><?php echo e(count($database_structure['warnings']).' '.\Str::plural('warning', count($database_structure['warnings']))); ?> found</span>
                            <?php elseif(!empty($database_structure['notices'])): ?>
                                <span class="text-success"><?php echo e(count($database_structure['notices']).' '.\Str::plural('notice', count($database_structure['notices']))); ?> found</span>
                            <?php else: ?>
                                <span class="text-success">No errors found</span>
                            <?php endif; ?>
                            <?php if($can_validate): ?>
                                <a href="<?php echo e(route('coaster.admin.system.validate-db')); ?>">(more details)</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Search Index</td>
                        <td>
                            <?php if($last_indexed_search): ?>
                                <span id="last_indexed_search">Last ran - <?php echo e($last_indexed_search); ?></span>
                                <?php if($can_index_search): ?>
                                    <a href="javascript:void(0)" id="search_index">(reindex)</a>
                                <?php endif; ?>
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <?php if($can_upgrade && $upgrade->required): ?>
                    <br /><br />
                    <a class="btn btn-primary" href="<?php echo e(route('coaster.admin.system.upgrade')); ?>">Upgrade Coaster CMS</a>
                <?php endif; ?>
            </div>
        </div>

        <?php if(Auth::action('coaster.wpimport')): ?>
            <div class="tab-pane" id="tab2">
                <br />
                <a class="btn btn-primary" href="<?php echo e(route('coaster.admin.wpimport')); ?>">Wordpress Import (Beta)</a>
            </div>
        <?php endif; ?>

    </div>

</div>

<?php $__env->startSection('scripts'); ?>
    <script type='text/javascript'>
        $(document).ready(function () {
            $('#system_tabs a:first').tab('show');
            $('#search_index').click(function () {
                $('#search_index').html("(reindex in progress)");
                $.ajax({
                    url: route('coaster.admin.system.search'),
                    type: 'GET',
                    success: function (r) {
                        if (r == 1) {
                            $('#last_indexed_search').addClass("text-success");
                            $('#last_indexed_search').html("successfully re-indexed");
                        }
                        else {
                            $('#last_indexed_search').addClass("text-danger");
                            $('#last_indexed_search').html("failed to reindex");
                        }
                        $('#search_index').html("(reindex)");
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>


<?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/pages/system.blade.php ENDPATH**/ ?>