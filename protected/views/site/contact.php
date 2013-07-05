<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle="联系我们 -" . Yii::app()->name;
$this->breadcrumbs=array(
	'Contact',
);
?>


        <div class="row-fluid">

          <form class="postForm">
            <fieldset>
              <legend>联系我们</legend>
              <h4>如果你有什么问题或者要求, 请填写以下表单以联系我们. 谢谢。</h4>
              <label>标题</label>
              <input class="span12" type="text">
              <label>email地址</label>
              <input class="span12" type="text">
              <label>内容</label>
              <textarea id="editor1" name="editor1"></textarea>  
              <div class="bgWhite form-actions">
                <button type="submit" class="btn btn-primary">发布</button>
                <button type="button" class="btn">取消</button>
              </div>
            </fieldset>
          </form>
        </div>