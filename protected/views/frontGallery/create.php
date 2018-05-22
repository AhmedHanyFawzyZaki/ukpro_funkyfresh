<?php
$this->breadcrumbs=array(
	'Front Galleries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FrontGallery','url'=>array('index')),
);
?>

<h1>Create FrontGallery</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>