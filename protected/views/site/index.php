
      <div class="jumbotron">
        <h1>找不到人帮忙吗？！</h1>
        <p class="lead">在校园里，我们常常需要完成一些任务，却苦于找不到人来帮忙。</p>
        <a class="btn btn-large btn-success" href="<?php echo Yii::app()->createUrl('reward/index');?>">发布悬赏</a>
        <a class="btn btn-large btn-success" href="<?php echo Yii::app()->createUrl('change/index');?>">物品交易</a>
      </div>

      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4">
          <h2>悬赏任务</h2>
          <p>需求：在校园里，我们常常需要完成一些任务，却苦于找不到人来帮忙。譬如：帮忙拿快递、帮女生搬东西、心理学学生找被试者、寻找调查问卷对象等等。</p>
          <p><a class="btn" href="<?php echo Yii::app()->createUrl('reward/index');?>">查看 &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>物品交易</h2>
          <p>以物易物，这种在货币出现之前大行其道的古老交易方式，穿过数千年的时光长廊，以一种时尚、新潮的姿态华丽亮相。</p>
          <p><a class="btn" href="<?php echo Yii::app()->createUrl('change/index');?>">查看 &raquo;</a></p>

       </div>
        <div class="span4">
          <h2>关于我们</h2>
          <p>高级软件实作:组员
            <ul class="unstyled text-success" style="padding-left:20px;">
              <li>叶江楠</li>
              <li>廖智锐</li>
              <li>黄培鸿</li>
              <li>林友鹏</li>
              <li>周炳佳</li>
            </ul>
            <a class="btn" href="<?php echo Yii::app()->createUrl('site/about');?>">查看 &raquo;</a>
          </p>
        </div>
      </div>
