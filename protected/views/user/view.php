<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->username.' Profile',
);

$this->menu=array(
	array('label'=>'List User','url'=>array('index')),
	array('label'=>'Create User','url'=>array('create')),
	array('label'=>'Update User','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete User','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View User - <?php echo $model->username; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(

		array(
			'name'=>'groups_id',
			'type'=>'raw',
			 'value'=>$model->usergroup->group_title
				),


		'username',

		'email',

		'fname',
		'lname',

		


		array(
		'name'=>'image',
		'type'=>'raw',
		'value'=>$model->image ? CHtml::image(Yii::app()->request->baseUrl.'/media/members/'.$model->image,$model->username,array('width'=>250)) : "no image",
		),




	//	'details',
	//	'catList',
	),
)); ?>
