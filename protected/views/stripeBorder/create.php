<?php
$this->breadcrumbs=array(
	'Stripe Border'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stripe Border','url'=>array('index')),
);
?>

<h1>Create Stripe Border</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>