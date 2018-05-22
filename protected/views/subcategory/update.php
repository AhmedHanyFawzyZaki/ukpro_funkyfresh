<?php
$this->breadcrumbs=array(
	'Subcategories'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubType','url'=>array('index')),
	//array('label'=>'Create SubType','url'=>array('create')),
	array('label'=>'View SubType','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Update SubType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>