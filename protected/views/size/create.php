<?php
$this->breadcrumbs=array(
	'Sizes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Size','url'=>array('index')),
);
?>

<h1>Create Size</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>