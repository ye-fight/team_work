<?php
/* @var $this ReactionController */
/* @var $model Reaction */

$this->breadcrumbs=array(
	'Reactions'=>array('index'),
	$model->reward_reaction_id=>array('view','id'=>$model->reward_reaction_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Reaction', 'url'=>array('index')),
	array('label'=>'Create Reaction', 'url'=>array('create')),
	array('label'=>'View Reaction', 'url'=>array('view', 'id'=>$model->reward_reaction_id)),
	array('label'=>'Manage Reaction', 'url'=>array('admin')),
);
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reaction-form',
	'enableAjaxValidation'=>false,
)); ?>

          <form class="postForm">
            <fieldset>
              <legend>参与悬赏</legend>
       			<h4>带*部分必填</h4>


		 		<?php echo $form->labelEx($model,'reaction_info'); ?>
				<?php echo $form->textArea($model,'reaction_info',array('rows'=>6, 'cols'=>50, 'class'=>'ckeditor', 'id'=>'editor1')); ?>
				<?php echo $form->error($model,'reaction_info'); ?>

				<label>状态</label>
				<span class="uneditable-input"><?php echo $model['flag'] ? '已中标': '未中标'; ?></span>	
              <div class="bgWhite form-actions">
                <button type="submit" class="btn btn-primary">发布</button>
                <button type="button" class="btn">取消</button>
              </div>
            </fieldset>
          </form>

<?php $this->endWidget(); ?>