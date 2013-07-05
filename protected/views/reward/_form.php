<?php
/* @var $this RewardController */
/* @var $model Reward */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reward-form',
	'enableAjaxValidation'=>false,
)); ?>

          <form class="postForm">
            <fieldset>
              <legend>发布悬赏</legend>
       			<h4>带*部分必填</h4>

				<?php echo $form->errorSummary($model); ?>
				<?php echo $form->labelEx($model,'reward_name'); ?>
				<?php echo $form->textField($model,'reward_name',array('size'=>60,'maxlength'=>60)); ?>
				<?php echo $form->error($model,'reward_name'); ?>

		 		<?php echo $form->labelEx($model,'reward_info'); ?>
				<?php echo $form->textArea($model,'reward_info',array('rows'=>6, 'cols'=>50, 'class'=>'ckeditor', 'id'=>'editor1')); ?>
				<?php echo $form->error($model,'reward_info'); ?>

				<?php echo $form->labelEx($model,'price_name'); ?>
				<?php echo $form->textField($model,'price_name',array('size'=>60,'maxlength'=>60)); ?>
				<?php echo $form->error($model,'price_name'); ?>

				<?php echo $form->labelEx($model,'price_info'); ?>
				<?php echo $form->textArea($model,'price_info',array('rows'=>6, 'cols'=>50,  'class'=>'ckeditor', 'id'=>'editor2')); ?>
				<?php echo $form->error($model,'price_info'); ?>

				<?php echo $form->labelEx($model,'end_time'); ?>
				<?php echo $form->dateField($model,'end_time'); ?>
				<?php echo $form->error($model,'end_time'); ?>		
              <div class="bgWhite form-actions">
                <button type="submit" class="btn btn-primary">发布</button>
                <button type="button" class="btn">取消</button>
              </div>
            </fieldset>
          </form>

<?php $this->endWidget(); ?>