<?php
$this->breadcrumbs=array(
	'分类'=>array('category/admin'),
	$model->title,
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>