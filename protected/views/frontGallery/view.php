<?php
$this->breadcrumbs=array(
	'Front Galleries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FrontGallery','url'=>array('index')),
	array('label'=>'Create FrontGallery','url'=>array('create')),
	array('label'=>'Update FrontGallery','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete FrontGallery','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View FrontGallery #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
	//	'id',
		'image'=>array(
				'name'=>'image',
				'type'=>'raw',
				'value'=>CHtml::image(Yii::app()->request->baseUrl.'/media/frontgallery/'.$model->image,'no image',array('width'=>250)),
			),	
	),
)); ?>
