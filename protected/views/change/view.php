<?php
/* @var $this ChangeController */
/* @var $model Change */

$this->breadcrumbs=array(
	'Changes'=>array('index'),
	$model->change_id,
);

?>

	  <h2 class="page-header">物品交换</h2>
      <div class="row-fluid text-center">
        <div class="span8">
          <h4><?php echo $model['change_name']; ?></h4>
          <img class="img-rounded change" src="<?php echo Yii::app()->baseUrl .'/assets/uploads/'. $model['image']; ?>" />
          <ul class="unstyled text-left">
          	<li>物品描述：<?php echo $model['change_info']; ?></li>
            <li>状态：<?php echo $model['flag'] ? '已交换' : '未交换'; ?></li>
            <li>开始日期：<?php echo date("Y-m-d", $model['create_time']); ?></li>            
            <li>截至日期：<?php echo date("Y-m-d", $model['end_time']); ?></li>
          </ul>
        </div>
        <div class="span4 text-left">
          <form class="postForm" enctype="multipart/form-data" action="<?php echo Yii::app()->createUrl('change/reaction/'); ?>" method="post">
            <fieldset>
              <legend>申请交换</legend>
       			<h4>带*部分必填</h4>
       			<label>物品名*</label>
       			<input type="text" name="Change[change_name]">
       			<label>物品描述</label>
              	<textarea class="ckeditor" cols="80" id="editor1" name="Change[change_info]" rows="10"></textarea>
              	<label>图片*</label>
				<?php echo CHtml::activeFileField($model,'image'); ?>
				<label>结束时间*</label>
				<input type='date' name="Change['end_time']" />
              	<input type="hidden" name="Change[sof_change_id]" value="<?php echo $model['change_id']; ?>">
              <div class="bgWhite form-actions">
                <button type="submit" class="btn btn-primary">发布</button>
                <button type="button" class="btn">取消</button>
              </div>
            </fieldset>
          </form>

        </div>               
      </div>

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
		            <img class=\"img-rounded change\" src=\"%s\">
		          %s
		          <div class=\"reward\">
		            <span>创建日期：%s</span>
		          </div>
		         </div>
        		", 
		        $result[$j]['change_name'], 
		        Yii::app()->baseUrl .'/assets/uploads/'. $result[$j]['image'],
		        $result[$j]['change_info'], 
		        date('Y-m-d', $result[$j]['create_time'])
		    );
			if (($j + 1) % 4 == 0) {
				$j++;
				break;
			}
		}
		printf("</div>");
	}
?>