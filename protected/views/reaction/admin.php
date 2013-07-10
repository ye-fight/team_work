<?php
/* @var $this ReactionController */
/* @var $model Reaction */

$this->breadcrumbs=array(
	'Reactions'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#reaction-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 class="admin-header">参与悬赏</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reaction-grid',
	'dataProvider'=>$model,
	'rowCssClass'=>'',
	'itemsCssClass'=>'table table-bordered table-hover table-condensed',
	'columns'=>array(
		'reaction_info:html',
		array(
			'name'=>'flag',
			'value'=>'$data->flag ? \'已中标\': \'未中标\'',
		),
		array(
			'name'=>'create_time',
			'value'=> 'date("Y-m-d H:i", $data->create_time)',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
