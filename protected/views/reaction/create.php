<?php
/* @var $this ReactionController */
/* @var $model Reaction */

$this->breadcrumbs=array(
	'Reactions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Reaction', 'url'=>array('index')),
	array('label'=>'Manage Reaction', 'url'=>array('admin')),
);
?>

<h1>Create Reaction</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>