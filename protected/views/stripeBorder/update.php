<?php
$this->breadcrumbs=array(
	'Stripe Border'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stripe Border','url'=>array('index')),
	array('label'=>'Create Stripe Border','url'=>array('create')),
	array('label'=>'View Stripe Border','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Update Stripe Border <?php echo $model->title; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>