<tr id="<?php echo $repeater_id; ?>_<?php echo $row_id; ?>">
    <td class="repeater-action">
        <?php echo Form::hidden('repeater['.$repeater_id.']['.$row_id.'][0]', 1); ?>

        <i class="glyphicon glyphicon-move"></i>
    </td>
    <td>
        <?php echo $blocks; ?></td>
    <td class="repeater-action">
        <i class="glyphicon glyphicon-remove itemTooltip"
           onclick="repeater_delete(<?php echo $repeater_id; ?>, <?php echo $row_id; ?>)"></i>
    </td>
</tr><?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/blocks/repeater/row.blade.php ENDPATH**/ ?>