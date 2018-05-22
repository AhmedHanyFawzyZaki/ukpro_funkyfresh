<?php
$this->breadcrumbs=array(
	'Colors'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Color','url'=>array('index')),
	array('label'=>'Create Color','url'=>array('create')),
	array('label'=>'View Color','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Update Color <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model,'gallery' => $gallery)); ?>