<?php
$this->breadcrumbs=array(
	'Stripes'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stripe','url'=>array('index')),
	array('label'=>'Create Stripe','url'=>array('create')),
	array('label'=>'View Stripe','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Update Stripe <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>