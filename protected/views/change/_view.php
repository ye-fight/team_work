<?php
/* @var $this ChangeController */
/* @var $data Change */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('change_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->change_id), array('view', 'id'=>$data->change_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sof_change_id')); ?>:</b>
	<?php echo CHtml::encode($data->sof_change_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('change_name')); ?>:</b>
	<?php echo CHtml::encode($data->change_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('change_info')); ?>:</b>
	<?php echo CHtml::encode($data->change_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag')); ?>:</b>
	<?php echo CHtml::encode($data->flag); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_time')); ?>:</b>
	<?php echo CHtml::encode($data->end_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	*/ ?>

</div>