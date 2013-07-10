<?php
$this->pageTitle= '登录 - ' . Yii::app()->name;
$this->breadcrumbs=array(
	'登录',
);
?>

    <div class="row-fluid">
    	<div class="span4 offset4">
      		<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableAjaxValidation'=>true,
			)); ?>
		        <h2>登录</h2>
		        <label>账号</label>
		        <?php echo $form->textField($model,'username', array('class'=>'input-block-level', 'placeholder'=>"账号")); ?>
		        <?php echo $form->error($model,'username'); ?>
		        <label>密码</label>
				<?php echo $form->passwordField($model,'password', array('class'=>'input-block-level', 'placeholder'=>"密码")); ?>
				<?php echo $form->error($model,'password'); ?>
				<label class="checkbox">
					<?php echo $form->checkBox($model,'rememberMe'); ?>
					记住我
				</label>
				<?php echo $form->error($model,'rememberMe'); ?>
		        <button class="btn btn-large btn-primary" type="submit">登录</button>
      		<?php $this->endWidget(); ?>
      	</div>
    </div>
