<?php
$this->breadcrumbs=array(
	'Types'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Types','url'=>array('index')),
	//array('label'=>'Create Category','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('category-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Types</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	//	'id',
		'title',
		array(
			'class'=>'CLinkColumn',
			'label'=>'SubType',
			'urlExpression'=>'Yii::app()->request->baseUrl."/subcategory/index?id=".$data->id',
			'header'=>'SubType'
	    ),
	//	'desc',
	//	'sort',
	//	'image',
	//	'temp1',
		/*
		'temp2',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update}{view}',
		),
	),
)); ?>
