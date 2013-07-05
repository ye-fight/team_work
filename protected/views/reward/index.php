<?php
/* @var $this RewardController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rewards',
);

$this->menu=array(
	array('label'=>'Create Reward', 'url'=>array('create')),
	array('label'=>'Manage Reward', 'url'=>array('admin')),
);
?>

<h2 class="page-header">悬赏任务</h2>



<?php
	$len = sizeof($result);
	$times = ceil($len / 3); // 进一取整
	$j = 0;

	for ($i=0; $i < $times; $i++) { 
		printf("<div class='row-fluid'>");
		for(; $j < $len; $j++) {
			printf("
	        <div class='span4'>
	          <h3>%s</h3>
	          %s
	          <div class='reward'><span>截至日期：%s</span><a class='btn' href='%s'>查看 &raquo;</a></div>
	        </div>		
        ", $result[$j]['reward_name'], $result[$j]['reward_info'], 
        date('Y-m-d', $result[$j]['end_time']), Yii::app()->createUrl('reward/view/', array('id'=>$result[$j]['reward_id'])));
			if (($j + 1) % 3 == 0) {
				$j++;
				break;
			}
		}
		printf("</div>");
	}
?>

