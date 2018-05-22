<?php
$this->breadcrumbs=array(
	'Subcategories'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List SubType','url'=>array('index')),
	//array('label'=>'Create SubType','url'=>array('create')),
	array('label'=>'Update SubType','url'=>array('update','id'=>$model->id)),
	//array('label'=>'Delete SubType','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View SubType #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'title',
		'price',
	),
)); ?>
