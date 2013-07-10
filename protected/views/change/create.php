<?php
/* @var $this ChangeController */
/* @var $model Change */

$this->breadcrumbs=array(
	'Changes'=>array('index'),
	'Create',
);
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'change-form',
	'htmlOptions'=>array('enctype'=>"multipart/form-data"),
	'enableAjaxValidation'=>false,
)); ?>
            <fieldset>
              <legend>发布交换</legend>
       			<h4>带*部分必填</h4>
				<?php echo $form->errorSummary($model); ?>

				<?php echo $form->labelEx($model,'change_name'); ?>
				<?php echo $form->textField($model,'change_name',array('size'=>60,'maxlength'=>60)); ?>
				<?php echo $form->error($model,'change_name'); ?>

				<?php echo $form->labelEx($model,'change_info'); ?>
				<?php echo $form->textArea($model,'change_info',array('rows'=>6, 'cols'=>50, 'class'=>'ckeditor', 'id'=>'editor1')); ?>
				<?php echo $form->error($model,'change_info'); ?>

				<?php echo $form->labelEx($model,'end_time'); ?>
				<?php echo $form->dateField($model,'end_time'); ?>
				<?php echo $form->error($model,'end_time'); ?>

				<?php echo $form->labelEx($model,'image'); ?>
				<?php echo CHtml::activeFileField($model,'image'); ?>
				<?php echo $form->error($model,'image'); ?>

				<div class="bgWhite form-actions">
				<button type="submit" class="btn btn-primary">发布</button>
				<button type="button" class="btn">取消</button>
				</div>
            </fieldset>
          </form>
<?php $this->endWidget(); ?>