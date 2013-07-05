<?php
/* @var $this ReactionController */
/* @var $model Reaction */

$this->breadcrumbs=array(
	'Reactions'=>array('index'),
	$model->reward_reaction_id,
);

$this->menu=array(
	array('label'=>'List Reaction', 'url'=>array('index')),
	array('label'=>'Create Reaction', 'url'=>array('create')),
	array('label'=>'Update Reaction', 'url'=>array('update', 'id'=>$model->reward_reaction_id)),
	array('label'=>'Delete Reaction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->reward_reaction_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reaction', 'url'=>array('admin')),
);
?>

<h1>View Reaction #<?php echo $model->reward_reaction_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'reward_reaction_id',
		'user_id',
		'reward_id',
		'reaction_info',
		'flag',
		'create_time',
	),
)); ?>
