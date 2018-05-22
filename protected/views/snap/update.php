<?php
$this->breadcrumbs=array(
	'Snaps'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Snap','url'=>array('index')),
	array('label'=>'Create Snap','url'=>array('create')),
	array('label'=>'View Snap','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Update Snap <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>