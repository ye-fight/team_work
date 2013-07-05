<?php
/* @var $this RewardController */
/* @var $model Reward */

$this->breadcrumbs=array(
	'Rewards'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#reward-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 class="admin-header">管理悬赏</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reward-grid',
	'itemsCssClass'=>'table table-bordered table-hover table-condensed',
	'dataProvider'=>$model,
	'columns'=>array(
		'reward_name',
		'reward_info:html',
		array(
			'name'=>'flag',
			'value'=>'$data->flag ? \'已完成\': \'未完成\'',
		),
		'price_name',
		/*
		'price_info',
		'create_time',
		*/
		array(
			'name'=>'end_time',
			'value'=> 'date("Y-m-d", $data->end_time)',
		),
		
		array(
			'class'=>'CButtonColumn',
			'header'=>'操作',
			'template'=>'{update}{delete}',
			'buttons'=>array(
				'update'=>array(
					'label'=>'修改',
					'options'=>array()
				),
				'delete'=>array(
					'label'=>'删除'
				)
			)
		),
	),
)); 

?>
