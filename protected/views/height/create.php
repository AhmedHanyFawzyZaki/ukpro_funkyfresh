<?php
$this->breadcrumbs=array(
	'Heights'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Height','url'=>array('index')),
);
?>

<h1>Create Height</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>