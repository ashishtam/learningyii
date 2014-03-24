<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="view">

    <table>
        <thead>
            <th><?php echo CHtml::encode($data->getAttributeLabel('id')); ?></th>
            <th><?php echo CHtml::encode($data->getAttributeLabel('role_id')); ?></th>
            <th><?php echo CHtml::encode($data->getAttributeLabel('full_name')); ?></th>
            <th><?php echo CHtml::encode($data->getAttributeLabel('email_id')); ?></th>
            <th><?php echo CHtml::encode($data->getAttributeLabel('contact')); ?></th>
            <th><?php echo CHtml::encode($data->getAttributeLabel('designation_id')); ?></th>
        </thead>
        <tr>
            <td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>
            <td><?php echo CHtml::encode($data->role->name); ?></td>
            <td><?php echo CHtml::encode($data->full_name); ?></td>
            <td><?php echo CHtml::encode($data->email_id);?></td>
            <td><?php echo CHtml::encode($data->contact); ?></td>
            <td><?php echo CHtml::encode($data->designation->name); ?></td>
        </tr>
    </table>

</div>