<?php
/* @var $this ChangeController */
/* @var $model Change */

$this->breadcrumbs=array(
	'Changes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Change', 'url'=>array('index')),
	array('label'=>'Create Change', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#change-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 class="admin-header">参与悬赏</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'change-grid',
	'dataProvider'=>$model,
	'rowCssClass'=>'',
	'itemsCssClass'=>'table table-bordered table-hover table-condensed',
	'columns'=>array(
		/*
		'change_id',
		'user_id',
		'sof_change_id',
		'type',
		*/
		'change_name',
		'change_info:html',
		array(
			'name'=>'flag',
			'value'=>'$data->flag ? \'已中标\': \'未中标\'',
		),
		array(
			'name'=>'create_time',
			'value'=> 'date("Y-m-d H:i", $data->create_time)',
		),
		/*
		'flag',
		'create_time',
		'end_time',
		'image',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
