<?php
/* @var $this RewardController */
/* @var $model Reward */

$this->breadcrumbs=array(
	'Rewards'=>array('index'),
	'Create',
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>