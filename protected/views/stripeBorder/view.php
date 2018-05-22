<?php
$this->breadcrumbs=array(
	'Stripe Border'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Stripe Border','url'=>array('index')),
	array('label'=>'Create Stripe Border','url'=>array('create')),
	array('label'=>'Update Stripe Border','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Stripe Border','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Stripe Border <?php echo $model->title; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'title',
		'color_title',
		array(
		'name'=>'image',
		'type'=>'raw',
		'value'=>CHtml::image(Yii::app()->request->baseUrl.'/media/stripeborder/'.$model->image,$model->title,array('width'=>250)),
		),
		array(
		'name'=>'left_image',
		'type'=>'raw',
		'value'=>CHtml::image(Yii::app()->request->baseUrl.'/media/stripeborder/left/'.$model->left_image,$model->title,array('width'=>250)),
		),
		array(
		'name'=>'right_image',
		'type'=>'raw',
		'value'=>CHtml::image(Yii::app()->request->baseUrl.'/media/stripeborder/right/'.$model->right_image,$model->title,array('width'=>250)),
		),
		array(
		'name'=>'back_image',
		'type'=>'raw',
		'value'=>CHtml::image(Yii::app()->request->baseUrl.'/media/stripeborder/back/'.$model->back_image,$model->title,array('width'=>250)),
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
