<?php
/* @var $this ReactionController */
/* @var $model Reaction */

$this->breadcrumbs=array(
	'Reactions'=>array('index'),
	$model->reward_reaction_id=>array('view','id'=>$model->reward_reaction_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Reaction', 'url'=>array('index')),
	array('label'=>'Create Reaction', 'url'=>array('create')),
	array('label'=>'View Reaction', 'url'=>array('view', 'id'=>$model->reward_reaction_id)),
	array('label'=>'Manage Reaction', 'url'=>array('admin')),
);
?>

<h1>Update Reaction <?php echo $model->reward_reaction_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>