<?php
$this->breadcrumbs=array(
	'Contact Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ContactType','url'=>array('index')),
);
?>

<h1>Create ContactType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>