<?php
$this->breadcrumbs=array(
	'Orders Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OrdersDetails','url'=>array('index')),
	array('label'=>'Create OrdersDetails','url'=>array('create')),
	array('label'=>'Update OrdersDetails','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete OrdersDetails','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);

$img_url=Yii::app()->baseUrl.'/media/types/'.strtolower(Category::model()->findByPk($model->cat_id)->title).'/'.strtolower(Subcategory::model()->findByPk($model->subcat_id)->title);

?>

<h1>View OrdersDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'orders_id',
		'qty',
		//'pro_id',
		'price',
		'cat_id',
		'subcat_id',
		'body'=>array(
				'name'=>'body',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'/'.$model->body.'/body.png',$model->title,array('width'=>250)),
			),
		'collar'=>array(
				'name'=>'collar',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'/'.$model->collar.'/collar.png',$model->title,array('width'=>250)),
			),
		'cuff_left'=>array(
				'name'=>'cuff_left',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'/'.$model->cuff_left.'/cuff-left.png',$model->title,array('width'=>250)),
			),
		'cuff_right'=>array(
				'name'=>'cuff_right',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'/'.$model->cuff_right.'/cuff-right.png',$model->title,array('width'=>250)),
			),
		'pocket_bottom_left'=>array(
				'name'=>'pocket_bottom_left',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'/'.$model->pocket_bottom_left.'/pocket-left.png',$model->title,array('width'=>250)),
			),
		'pocket_bottom_right'=>array(
				'name'=>'pocket_bottom_right',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'/'.$model->pocket_bottom_right.'/pocket-right.png',$model->title,array('width'=>250)),
			),
		'knit'=>array(
				'name'=>'knit',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'/'.$model->knit.'/knit.png',$model->title,array('width'=>250)),
			),
		'sleeve_right'=>array(
				'name'=>'sleeve_right',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'/'.$model->sleeve_right.'/sleeve-right.png',$model->title,array('width'=>250)),
			),
		'sleeve_left'=>array(
				'name'=>'sleeve_left',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'/'.$model->sleeve_left.'/sleeve-left.png',$model->title,array('width'=>250)),
			),
		'buttons'=>array(
				'name'=>'buttons',
				'type'=>'raw',
				'value'=>CHtml::image($img_url.'/'.$model->buttons.'/buttons.png',$model->title,array('width'=>250)),
			),
	),
)); ?>
