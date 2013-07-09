<?php
/* @var $this RewardController */
/* @var $model Reward */

$this->breadcrumbs=array(
	'Rewards'=>array('index'),
	$model->reward_id,
);


?>

	  <h2 class="page-header">悬赏任务</h2>
      <div class="row-fluid text-center">
        <div class="span8">
          <h4><?php echo $model['reward_name']; ?></h4>
          
          <ul class="unstyled text-left">
          	<li>需求：<?php echo $model['reward_info']; ?></li>
          	<li>赏金：<?php echo $model['price_name']; ?></li>
          	<li>赏金描述：<?php echo $model['price_info']; ?></li>
            <li>状态：<?php echo $model['flag'] ? '已完成' : '未完成'; ?></li>
            <li>开始日期：<?php echo date("Y-m-d", $model['create_time']); ?></li>            
            <li>截至日期：<?php echo date("Y-m-d", $model['end_time']); ?></li>
          </ul>
        </div>
        <div class="span4 text-left">
          <form class="postForm" action="<?php echo Yii::app()->createUrl('reaction/create/'); ?>" method="post">
            <fieldset>
              <legend>申请任务</legend>
       			<h4>带*部分必填</h4>
              	<textarea class="ckeditor" cols="80" id="editor1" name="Reaction[reaction_info]" rows="10"></textarea>
              	<input type="hidden" name="Reaction[reward_id]" value="<?php echo $model['reward_id']; ?>">
              <div class="bgWhite form-actions">
                <button type="submit" class="btn btn-primary">发布</button>
                <button type="button" class="btn">取消</button>
              </div>
            </fieldset>
          </form>
        </div>               
      </div>

    <?php
        $len = sizeof($reaction);
        $times = ceil($len / 4);
        $j = 0;
        for ($i=0; $i < $times; $i++) {
            printf("<div class='row-fluid text-center'>");
            for( ; $j < $len; $j++) {
                printf("
                    <div class='span3'>
                    %s
                    <span>发布日期：%s</span><br>
                    <span>发布人:%s</span>
                    %s
                    </div>
                ", $reaction[$j]['reaction_info'],
                date('Y-m-d', $reaction[$j]['create_time']),
                $name[$j]['user_name'],
                $reaction[$j]['flag'] ? '<h5 class="text-success">完成任务！</h5>' : '');
                if(($j + 1) % 4 == 0) {
                    $j++;
                    break;
                }
            }
            printf("</div>");
        }
    ?>