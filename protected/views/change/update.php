<?php
/* @var $this ChangeController */
/* @var $model Change */

$this->breadcrumbs=array(
	'Changes'=>array('index'),
	$model->change_id=>array('view','id'=>$model->change_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Change', 'url'=>array('index')),
	array('label'=>'Create Change', 'url'=>array('create')),
	array('label'=>'View Change', 'url'=>array('view', 'id'=>$model->change_id)),
	array('label'=>'Manage Change', 'url'=>array('admin')),
);
?>

<h1>Update Change <?php echo $model->change_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>