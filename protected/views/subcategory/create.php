<?php
$this->breadcrumbs=array(
	'Subcategories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subcategory','url'=>array('index')),
);
?>

<h1>Create Subcategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>