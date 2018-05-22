<?php
$this->breadcrumbs=array(
	'Heights'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Height','url'=>array('index')),
	array('label'=>'Create Height','url'=>array('create')),
	array('label'=>'View Height','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Update Height <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_upf',array('model'=>$model,'details'=>$details)); ?>