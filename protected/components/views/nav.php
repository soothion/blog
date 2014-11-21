<ul>
    <li <?php if(Yii::app()->controller->id=='index') echo 'class="current-item"';?>><a href="<?php echo Yii::app()->createUrl('index');?>">首页</a></li>
    <li <?php if(Yii::app()->controller->id=='blog'&&$_REQUEST['alias']!='demo'&&$_REQUEST['alias']!='about'&&$_REQUEST['alias']!='service'&&$_REQUEST['alias']!='contact') echo 'class="current-item"';?>><a href="<?php echo Yii::app()->createUrl('blog');?>">博客</a></li>
    <li <?php if(isset($_REQUEST['alias'])&&$_REQUEST['alias']=='demo') echo 'class="current-item"';?>><a href="<?php echo Yii::app()->createUrl('blog/index', array('alias' => 'demo'));?>">案例</a></li>
    <li <?php if(isset($_REQUEST['alias'])&&$_REQUEST['alias']=='about') echo 'class="current-item"';?>><a href="<?php echo Yii::app()->createUrl('blog/index', array('alias' => 'about')) ;?>">关于</a></li>
</ul>