<?php
$this->breadcrumbs=array(
	'Sizes'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Size','url'=>array('index')),
	array('label'=>'Create Size','url'=>array('create')),
	array('label'=>'Update Size','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Size','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Size (<?php echo $model->title; ?>)</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'title',
	),
)); ?>
