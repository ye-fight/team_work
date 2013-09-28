<?php
$this->pageTitle= '注册 - ' . Yii::app()->name;
$this->breadcrumbs=array(
	'注册',
);
?>

    <div class="row-fluid">
    	<div class="span4 offset4">
      		<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'user-form',
				'enableAjaxValidation'=>false,
			)); ?>
		        <h2>注册</h2>
		        <label>账号</label>
		        <?php echo $form->textField($model,'user_name', array('class'=>'input-block-level', 'placeholder'=>"账号")); ?>
		        <?php echo $form->error($model,'user_name'); ?>
				<label>密码</label>
				<?php echo $form->passwordField($model,'password', array('class'=>'input-block-level', 'placeholder'=>"密码")); ?>
	          	<?php echo $form->error($model,'password'); ?>
				<label>重复密码</label>
				<input type="password" name="password2" class="input-block-level">
		        <button class="btn btn-large btn-primary" type="submit">注册</button>
      		<?php $this->endWidget(); ?>
      	</div>
    </div>
