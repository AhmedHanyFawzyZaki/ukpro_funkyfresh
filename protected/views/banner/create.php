<?php
$this->breadcrumbs=array(
	'Banners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Banner','url'=>array('index')),
	array('label'=>'Manage Banner','url'=>array('index')),
);
?>

<h1>Create Banner</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>