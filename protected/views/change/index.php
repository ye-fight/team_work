<?php
/* @var $this ChangeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Changes',
);

$this->menu=array(
	array('label'=>'Create Change', 'url'=>array('create')),
	array('label'=>'Manage Change', 'url'=>array('admin')),
);
?>

<h2 class="page-header">物品交易</h2>

<?php
	$len = sizeof($result);
	$times = ceil($len / 4); // 进一取整
	$j = 0;

	for ($i=0; $i < $times; $i++) { 
		printf("<div class='row-fluid'>");
		for(; $j < $len; $j++) {
			printf("
		        <div class=\"span3\">
		          <h4>%s</h4>
		          <a href=\"%s\" class=\"thumbnail change\">
		            <img class=\"img-rounded\" src=\"%s\">
		          </a>
		          %s
		          <div class=\"reward\">
		            <span>截至日期：%s</span>
		            <a class=\"btn\" href=\"%s\">查看 &raquo;</a>
		          </div>
		         </div>
        		", 
		        $result[$j]['change_name'], 
		        Yii::app()->createUrl('change/view/', array('id'=>$result[$j]['change_id'])),
		        Yii::app()->baseUrl .'/assets/uploads/'. $result[$j]['image'],
		        $result[$j]['change_info'], 
		        date('Y-m-d', $result[$j]['end_time']), 
		        Yii::app()->createUrl('change/view/', array('id'=>$result[$j]['change_id']))
		    );
			if (($j + 1) % 4 == 0) {
				$j++;
				break;
			}
		}
		printf("</div>");
	}
?>



