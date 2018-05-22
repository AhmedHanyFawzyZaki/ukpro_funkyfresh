<?php
$this->breadcrumbs=array(
	'Colors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Color','url'=>array('index')),
	array('label'=>'Create Color','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('color-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Colors</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'color-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'title',
		array(
			'name'=>'color',
			 'type'=>'raw',
			  'value'=>'Helper::displayColor($data->color)',

			),

		/*array(
			'class'=>'CLinkColumn',
			'label'=>'Products',
			'urlExpression'=>'Yii::app()->request->baseUrl."/product/index?id=".$data->id',
			'header'=>'Products'
	    ),		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
