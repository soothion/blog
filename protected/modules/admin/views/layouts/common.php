<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="/assets/css/admin/style.css" media="screen, projection" />
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<?php
Yii::app()->bootstrap->register();//载入boostrap
?>

<div class="container">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
            <?php $this->widget('bootstrap.widgets.TbNavbar', array(
                'type'=>'inverse', // null or 'inverse'
                'brand'=>'火焰雨后台管理系统',
                'brandUrl'=>array('/admin'),
                'collapse'=>true, // requires bootstrap-responsive.css
                'items'=>array(
                    array(
                        'class'=>'bootstrap.widgets.TbMenu',
                        'items'=>array(
                            array('label'=>'系统管理', 'url'=>'/admin/index/index', 'items'=>array(
                                array('label'=>'系统设置', 'url'=>array('/admin/index/index')),
                                array('label'=>'更改密码', 'url'=>array('/admin/index/password')),
                                array('label'=>'退出系统', 'url'=>array('/admin/login/logout')),
                            )),
                            array('label'=>'博客管理', 'url'=>array('/admin/blog/admin')),
                            array('label'=>'分类管理', 'url'=>array('/admin/category/admin')),
                            array('label'=>'模块管理', 'url'=>array('/admin/module/admin')),
                        ),  
                    ),
                    array(
                        'class'=>'boostrap.widgets.TbMenu',
                        'htmlOptions'=>array('class'=>'pull-right'),
                        'items'=>array(
                                array('label'=>'网站首页', 'url'=>array('/index')),
                        ),
                    ),
                ),
            )); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                        'homeLink'=>CHtml::link('首页',Yii::app()->createUrl('admin/blog/admin')),  
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

        <div id="footer" class="well">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
