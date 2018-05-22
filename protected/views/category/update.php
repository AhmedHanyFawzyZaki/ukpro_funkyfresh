<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Type','url'=>array('index')),
	//array('label'=>'Create Type','url'=>array('create')),
	array('label'=>'View Type','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Update Type <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>