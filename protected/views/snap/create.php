<?php
$this->breadcrumbs=array(
	'Snaps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Snap','url'=>array('index')),
);
?>

<h1>Create Snap</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>