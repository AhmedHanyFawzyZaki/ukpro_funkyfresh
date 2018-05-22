<?php
$this->breadcrumbs=array(
	'Contact Types'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContactType','url'=>array('index')),
	array('label'=>'Create ContactType','url'=>array('create')),
	array('label'=>'View ContactType','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Update ContactType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>