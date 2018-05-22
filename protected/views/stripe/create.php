<?php
$this->breadcrumbs=array(
	'Stripes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stripe','url'=>array('index')),
);
?>

<h1>Create Stripe</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>