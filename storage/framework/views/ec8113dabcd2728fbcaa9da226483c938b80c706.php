<h4>Groups</h4>

<div class="form-group" id="groupContainer">
    <?php echo Form::label('page_groups', 'Top Level Group Page', ['class' => 'control-label col-xs-6 col-sm-2']); ?>

    <div class="col-sm-2 col-xs-6">
        <label class="radio-inline">
            <?php echo Form::radio('page_info_other[group_radio]', 1, $page->group_container ? 1 : 0); ?> Yes
        </label>
        <label class="radio-inline">
            <?php echo Form::radio('page_info_other[group_radio]', 0, $page->group_container ? 0 : 1); ?> No
        </label>
    </div>
    <div class="col-sm-7 col-xs-8 group-container-options">
        <select name="page_info[group_container]" title="Group Container" class="form-control">
            <option value="-1">-- New Group --</option>
            <option value="0">-- Not Top Level Group Page --</option>
            <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupPage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($groupPage->id); ?>" <?php echo e($page->group_container == $groupPage->id ? 'selected="selected"' : ''); ?>><?php echo e($groupPage->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="col-sm-1 col-xs-4 group-container-options header_note" data-note="The url priority for canonicals. Group pages will use the path from the top level group page with the highest priority by default.">
        <?php echo Form::text('page_info[group_container_url_priority]', $page->group_container_url_priority ?: 0, ['class' => 'form-control form-inline', 'placeholder' => 50]); ?>

    </div>
</div>

<?php if(!$groups->isEmpty()): ?>
<div class="form-group" id="inGroup">
    <?php echo Form::label('page_groups', 'In Group', ['class' => 'control-label col-sm-2']); ?>

    <div class="col-sm-10">
        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <label class="checkbox-inline">
                <?php echo Form::checkbox('page_groups['.$group->id.']', 1, in_array($group->id, array_merge($page->groupIds(), $page->groups->pluck('id')->toArray()))); ?> &nbsp; <?php echo $group->name; ?>

            </label>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/partials/tabs/page_info/groups.blade.php ENDPATH**/ ?>