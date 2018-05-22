<?php
$this->breadcrumbs=array(
	'Heights'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Height','url'=>array('index')),
	array('label'=>'Create Height','url'=>array('create')),
);
?>

<h1>Manage Heights</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'height-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'title',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
