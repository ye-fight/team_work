<?php
/* @var $this ReactionController */
/* @var $data Reaction */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('reward_reaction_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->reward_reaction_id), array('view', 'id'=>$data->reward_reaction_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reward_id')); ?>:</b>
	<?php echo CHtml::encode($data->reward_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reaction_info')); ?>:</b>
	<?php echo CHtml::encode($data->reaction_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag')); ?>:</b>
	<?php echo CHtml::encode($data->flag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />


</div>