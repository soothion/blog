<?php
$this->breadcrumbs=array(
	'博客'=>array('blog/admin'),
	$model->title,
);
?>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>