<h1>Install Coaster CMS</h1>

<br/>

<?php if($stage == 'complete'): ?>

    <p class="text-success">Install Complete</p>
    <p><a href="<?php echo e(route('coaster.admin.login')); ?>">Go to admin and login</a></p>
    <p><a href="<?php echo e(URL::to('/')); ?>" target="_blank">Go to front-end</a></p>

<?php elseif($stage == 'theme'): ?>

    <?php echo Form::open(['url' => route('coaster.install.themeInstall')]); ?>


    <p>Select a theme to use</p>
    <p>&nbsp;</p>

    <div class="form-group <?php echo FormMessage::getErrorClass('theme'); ?>">
        <?php echo Form::label('theme', 'Theme', ['class' => 'control-label']); ?>

        <?php echo Form::select('theme', $themes, $defaultTheme, ['class' => 'form-control']); ?>

        <span class="help-block"><?php echo FormMessage::getErrorMessage('theme'); ?></span>
    </div>
    <div class="form-group <?php echo FormMessage::getErrorClass('page-data'); ?> page-data-group">
        <?php echo Form::label('page-data', 'Install with example page data (recommended)', ['class' => 'control-label']); ?>

        <?php echo Form::checkbox('page-data', 1, true, ['class' => 'form-control']); ?>

        <span class="help-block"><?php echo FormMessage::getErrorMessage('page-data'); ?></span>
    </div>

    <!-- submit button -->
    <?php echo Form::submit('Complete Install', ['class' => 'btn btn-primary']); ?>


    <?php echo Form::close(); ?>


<?php elseif($stage == 'adduser'): ?>

    <?php echo Form::open(['url' => route('coaster.install.adminSave')]); ?>


    <p>Set up the admin user</p>
    <p>&nbsp;</p>

    <div class="form-group <?php echo FormMessage::getErrorClass('email'); ?>">
        <?php echo Form::label('email', 'Admin Email', ['class' => 'control-label']); ?>

        <?php echo Form::text('email', Request::input('user'), ['class' => 'form-control']); ?>

        <span class="help-block"><?php echo FormMessage::getErrorMessage('email'); ?></span>
    </div>
    <div class="form-group <?php echo FormMessage::getErrorClass('password'); ?>">
        <?php echo Form::label('password', 'Admin Password', ['class' => 'control-label']); ?>

        <?php echo Form::password('password', ['class' => 'form-control']); ?>

        <span class="help-block"><?php echo FormMessage::getErrorMessage('password'); ?></span>
    </div>
    <div class="form-group <?php echo FormMessage::getErrorClass('password_confirmation'); ?>">
        <?php echo Form::label('password_confirmation', 'Admin Password Confirmation', ['class' => 'control-label']); ?>

        <?php echo Form::password('password_confirmation', ['class' => 'form-control']); ?>

    </div>

    <!-- submit button -->
    <?php echo Form::submit('Create User', ['class' => 'btn btn-primary']); ?> &nbsp; <?php echo $currentUsers > 0 ? Form::submit('Skip', ['name' => 'skip', 'class' => 'btn btn-default']) : ''; ?>


    <?php echo Form::close(); ?>


<?php elseif($stage == 'envCheck'): ?>

    <p class="text-warning">The database config has bee saved in the .env file, however the environment variables loaded are different to what's in the .env file</p>

    <?php if(php_sapi_name() == 'cli-server'): ?>
        <p>If you are running artisan serve you may need to restart it.</p>
    <?php endif; ?>

    <p>&nbsp;</p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Environment Variable</th>
            <th>Current Value</th>
            <th>.env File Value</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $unMatchedEnvVars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $envVar => $envValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $envVar; ?></td>
                <td><?php echo getenv($envVar); ?></td>
                <td><?php echo $envValue; ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <p>&nbsp;</p>

    <a href="<?php echo e(route('coaster.install.databaseMigrate', ['shipEnvCheck' => 1])); ?>" class="btn btn-default">Ignore Warning</a> &nbsp; <a href="<?php echo e(route('coaster.install.databaseMigrate')); ?>" class="btn btn-primary">Recheck & Continue</a>

<?php elseif($stage == 'database'): ?>

    <?php echo Form::open(['url' => route('coaster.install.databaseSave')]); ?>


    <p>Set up the database connection<br />
        Will load current values if set in the .env file</p>
    <p>&nbsp;</p>

    <div class="form-group <?php echo FormMessage::getErrorClass('host'); ?>">
        <?php echo Form::label('host', 'Database Host', ['class' => 'control-label']); ?>

        <?php echo Form::text('host', Request::input('host')?:env('DB_HOST'), ['class' => 'form-control']); ?>

        <span class="help-block"><?php echo FormMessage::getErrorMessage('host'); ?></span>
    </div>

    <div class="form-group <?php echo FormMessage::getErrorClass('user'); ?>">
        <?php echo Form::label('user', 'Database User', ['class' => 'control-label']); ?>

        <?php echo Form::text('user', Request::input('user')?:env('DB_USERNAME'), ['class' => 'form-control']); ?>

        <span class="help-block"><?php echo FormMessage::getErrorMessage('user'); ?></span>
    </div>
    <div class="form-group <?php echo FormMessage::getErrorClass('password'); ?>">
        <?php echo Form::label('password', 'Database User Password', ['class' => 'control-label']); ?>

        <?php echo Form::input('password', 'password', env('DB_PASSWORD'), ['class' => 'form-control']); ?>

    </div>

    <div class="form-group <?php echo FormMessage::getErrorClass('name'); ?>">
        <?php echo Form::label('name', 'Database Name', ['class' => 'control-label']); ?>

        <?php echo Form::text('name', Request::input('name')?:env('DB_DATABASE'), ['class' => 'form-control']); ?>

        <span class="help-block"><?php echo FormMessage::getErrorMessage('name'); ?></span>
    </div>
    <?php if($allowPrefix): ?>
    <div class="form-group <?php echo FormMessage::getErrorClass('prefix'); ?>">
        <?php echo Form::label('prefix', 'Database Prefix', ['class' => 'control-label']); ?>

        <?php echo Form::text('prefix', Request::input('prefix')?:env('DB_PREFIX'), ['class' => 'form-control']); ?>

    </div>
    <?php endif; ?>

    <!-- submit button -->
    <?php echo Form::submit('Run Database Setup', ['class' => 'btn btn-primary']); ?>


    <?php echo Form::close(); ?>


<?php elseif($stage == 'permissions'): ?>

    <p>Checking the following folders and files are writable:</p>
    <p>&nbsp;</p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Location</th>
                <th>Writable ?</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $dirs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dir => $isWritable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $dir . (base_path('.env') == $dir ? ' *' : ''); ?></td>
                <td class="<?php echo e($isWritable ? 'text-success' : 'text-danger'); ?>"><?php echo e($isWritable ? 'Yes' : 'Nah'); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <p>* only required to be writable for installation</p>
    <p>&nbsp;</p>

    <a href="<?php echo e(route('coaster.install.permissions')); ?>" class="btn btn-default">Recheck</a> &nbsp; <a href="<?php echo e($continue ? route('coaster.install.permissions', ['next' => 1]) : '#'); ?>" class="btn btn-primary" <?php echo e($continue ? '' : 'disabled="disabled"'); ?>>Continue</a>

<?php endif; ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        function updatePageDataOption() {
            if ($('#theme').val() == '') {
                $('.page-data-group').hide();
                $('#page-data').prop('checked', false);
            } else {
                $('.page-data-group').show();
                $('#page-data').prop('checked', true);
            }
        }
        $(document).ready(function() {
            updatePageDataOption();
            $('#theme').change(updatePageDataOption);
        });
    </script>
<?php $__env->stopSection(); ?><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/pages/install.blade.php ENDPATH**/ ?>