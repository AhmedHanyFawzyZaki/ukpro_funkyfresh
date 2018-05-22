<?php
$this->breadcrumbs=array(
	'Front Galleries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FrontGallery','url'=>array('index')),
	array('label'=>'Create FrontGallery','url'=>array('create')),
	array('label'=>'View FrontGallery','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Update FrontGallery <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>