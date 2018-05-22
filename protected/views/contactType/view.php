<?php
$this->breadcrumbs=array(
	'Contact Types'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List ContactType','url'=>array('index')),
	array('label'=>'Create ContactType','url'=>array('create')),
	array('label'=>'Update ContactType','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ContactType','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View ContactType #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'temp',
	),
)); ?>
