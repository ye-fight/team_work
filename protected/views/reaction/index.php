<?php
/* @var $this ReactionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reactions',
);

$this->menu=array(
	array('label'=>'Create Reaction', 'url'=>array('create')),
	array('label'=>'Manage Reaction', 'url'=>array('admin')),
);
?>

<h1>Reactions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
