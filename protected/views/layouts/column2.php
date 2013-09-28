<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
      <div class="row-fluid">
        <div class="span3">
          <ul class="nav nav-list side-nav">  
            <li><a href="<?php echo Yii::app()->createUrl('site/user'); ?>">控制板</a></li>  
            <li class="divider"></li>
            <li>悬赏任务</li>  
            <li><a href="<?php echo Yii::app()->createUrl('reward/create'); ?>">发布悬赏</a></li>  
            <li><a href="<?php echo Yii::app()->createUrl('reward/admin'); ?>">管理悬赏</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('reaction/admin'); ?>">参与悬赏</a></li>
            <li class="divider"></li>
            <li>物品交换</li>
            <li><a href="<?php echo Yii::app()->createUrl('change/create'); ?>">发布交换</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('change/admin'); ?>">管理交换</a></li>
            <li class="divider"></li>
            <li><a href="#">个人设置</a></li>
          </ul>
        </div>
        <div class="span9">
            <?php echo $content; ?>
        </div>
      </div>
<?php $this->endContent(); ?>