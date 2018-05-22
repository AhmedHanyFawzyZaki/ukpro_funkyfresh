<?php
$this->breadcrumbs=array(
	'Contact Types'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ContactType','url'=>array('index')),
	array('label'=>'Create ContactType','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('contact-type-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Contact Types</h1>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'contact-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'title',
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
