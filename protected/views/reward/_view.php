<?php
/* @var $this RewardController */
/* @var $data Reward */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('reward_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->reward_id), array('view', 'id'=>$data->reward_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reward_name')); ?>:</b>
	<?php echo CHtml::encode($data->reward_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reward_info')); ?>:</b>
	<?php echo CHtml::encode($data->reward_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag')); ?>:</b>
	<?php echo CHtml::encode($data->flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_name')); ?>:</b>
	<?php echo CHtml::encode($data->price_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_info')); ?>:</b>
	<?php echo CHtml::encode($data->price_info); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_time')); ?>:</b>
	<?php echo CHtml::encode($data->end_time); ?>
	<br />

	*/ ?>

</div>