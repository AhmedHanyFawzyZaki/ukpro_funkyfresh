<?php
$this->breadcrumbs=array(
	'Snaps'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Snap','url'=>array('index')),
	array('label'=>'Create Snap','url'=>array('create')),
	array('label'=>'Update Snap','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Snap','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Snap <?php echo $model->title; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'title',
		'type'=>array(
			'name'=>'type',
			'value'=>Snap::GetSnapType($model->type),
		),
		'extra_image'=>array(
			'name'=>'extra_image',
			'type'=>'html',
			'value'=>(!empty($model->extra_image))?CHtml::image(Yii::app()->request->baseUrl."/media/snap/".$model->extra_image,"",array("style"=>"width:100px;height:75px;")):"no image",
		),
		'image'=>array(
			'name'=>'image',
			'type'=>'html',
			'value'=>(!empty($model->image))?CHtml::image(Yii::app()->request->baseUrl."/media/snap/".$model->image,"",array("style"=>"width:100px;height:75px;")):"no image",
		),
		'left_image'=>array(
			'name'=>'left_image',
			'type'=>'html',
			'value'=>(!empty($model->left_image))?CHtml::image(Yii::app()->request->baseUrl."/media/snap/".$model->left_image,"",array("style"=>"width:100px;height:75px;")):"no image",
		),
		'right_image'=>array(
			'name'=>'right_image',
			'type'=>'html',
			'value'=>(!empty($model->right_image))?CHtml::image(Yii::app()->request->baseUrl."/media/snap/".$model->right_image,"",array("style"=>"width:100px;height:75px;")):"no image",
		),
		'color'=>array(
			'name'=>'color',
			'type'=>'html',
			'value'=>Snap::GetSnapColor($model->color),
		),		
	),
)); ?>
