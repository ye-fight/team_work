
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.bootcss.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">华师悬赏工会</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <?php $this->widget('zii.widgets.CMenu',array(
                'htmlOptions'=>array('class'=>'nav'),
                'id'=>'',
                'items'=>array(
                  array('label'=>'主页', 'url'=>array('/site/index')),
                  array('label'=>'悬赏任务', 'url'=>array('/reward/index')),
                  array('label'=>'物品交易', 'url'=>array('/change/index')),
                  array('label'=>'联系我们', 'url'=>array('/site/contact')),
                  array('label'=>'登录', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                  array('label'=>'用户中心', 'url'=>array('site/user'), 'visible'=>!Yii::app()->user->isGuest),
                  array('label'=>'登出 ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),
              )); ?>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <?php echo $content; ?>

      <hr>

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>

  </body>
</html>
