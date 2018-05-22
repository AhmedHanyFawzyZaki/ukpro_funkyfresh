<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Type','url'=>array('index')),
	//array('label'=>'Create Type','url'=>array('create')),
	array('label'=>'Update Type','url'=>array('update','id'=>$model->id)),
	//array('label'=>'Delete Type','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Type #<?php echo $model->title; ?></h1>

<?php 
$img_url=Yii::app()->request->baseUrl.'/media/types/'.strtolower($model->title);
$this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
	//	'id',
		'title',
		array(
                      'name'=>'desc',
                      'type'=>'raw',
                ),
		array(
		'name'=>'image',
		'type'=>'raw',
		'value'=>CHtml::image($img_url.'/'.$model->image,$model->title,array('width'=>250)),
		),
		
		array(
		'name'=>'image1',
		'type'=>'raw',
		'value'=>CHtml::image($img_url.'/'.$model->image1,$model->title,array('width'=>250)),
		),
		array(
		'name'=>'image2',
		'type'=>'raw',
		'value'=>CHtml::image($img_url.'/'.$model->image2,$model->title,array('width'=>250)),
		),
		array(
		'name'=>'image3',
		'type'=>'raw',
		'value'=>CHtml::image($img_url.'/'.$model->image3,$model->title,array('width'=>250)),
		),
	//	'desc',
	//	'sort',
	//	'image',
	//	'temp1',
	//	'temp2',
	),
)); ?>
