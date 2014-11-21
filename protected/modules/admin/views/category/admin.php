<?php
$this->breadcrumbs=array(
	'分类'=>array('category/admin'),
);
$create=Yii::app()->createUrl('admin/category/create');
?>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'category-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'title',
        'sort',
        'display',
		array(
                        'header'=>'<a href="'.$create.'"><i class="icon-plus"></i></a>',
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template'=>'{update}{delete}'
		),
	),
)); ?>
