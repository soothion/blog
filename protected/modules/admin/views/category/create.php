<?php
$this->breadcrumbs=array(
	'分类'=>array('category/admin'),
	'添加',
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>