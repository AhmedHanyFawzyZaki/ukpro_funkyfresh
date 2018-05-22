<?php
$this->breadcrumbs=array(
	'Heights'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Height','url'=>array('index')),
	array('label'=>'Create Height','url'=>array('create')),
	array('label'=>'Update Height','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Height','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Height : <?php echo $model->title; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'title',
	),
)); ?>

<h1>height details</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'heightdetails-grid',
	'dataProvider'=>$details,
	'columns'=>array(
		'weight',
		'shoulder',
		'size',
		'sleeve',
		'waist',
	),
)); ?>

