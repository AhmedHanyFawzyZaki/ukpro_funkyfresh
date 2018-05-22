<?php
$this->breadcrumbs=array(
	'Stripes'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Stripe','url'=>array('index')),
	array('label'=>'Create Stripe','url'=>array('create')),
	array('label'=>'Update Stripe','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Stripe','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Stripe #<?php echo $model->title; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'title',
		'color_title',
		array(
		'name'=>'image',
		'type'=>'raw',
		'value'=>CHtml::image(Yii::app()->request->baseUrl.'/media/stripes/'.$model->image,$model->title,array('width'=>250)),
		),
		array(
		'name'=>'left_image',
		'type'=>'raw',
		'value'=>CHtml::image(Yii::app()->request->baseUrl.'/media/stripes/left/'.$model->left_image,$model->title,array('width'=>250)),
		),
		array(
		'name'=>'right_image',
		'type'=>'raw',
		'value'=>CHtml::image(Yii::app()->request->baseUrl.'/media/stripes/right/'.$model->right_image,$model->title,array('width'=>250)),
		),
		array(
		'name'=>'back_image',
		'type'=>'raw',
		'value'=>CHtml::image(Yii::app()->request->baseUrl.'/media/stripes/back/'.$model->back_image,$model->title,array('width'=>250)),
		),
		array(
			'name'=>'icon',
			'type'=>'raw',
			'value'=>Helper::displayColor($model->icon),
			
			),
		/*array(
		'name'=>'icon',
		'type'=>'raw',
		'value'=>CHtml::image(Yii::app()->request->baseUrl.'/media/stripes/icons/'.$model->icon,$model->title,array('width'=>250)),
		),*/
	),
)); ?>
