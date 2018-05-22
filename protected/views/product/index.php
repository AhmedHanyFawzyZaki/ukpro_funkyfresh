<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Product','url'=>array('index')),
	array('label'=>'Create Product','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('product-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Jackets</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	//	'id',
		/*'main_image'=>array(
				'header'=>'Main Image',
				'type'=>'html',
				'value'=>'(!empty($data->main_image))?CHtml::image(Yii::app()->request->baseUrl."/media/product/".$data->main_image,"",array("style"=>"width:100px;height:75px;")):"no image"',
			) ,*/
		'title',
		'color_title',
	//	'desc',

		
	//	'gallery_id',
		//'price',
		
		'default'=>array(
			'name'=>'default',
			'value'=>'Helper::getStatus($data->default,"Yes","No")',
			'filter'=>'',
		),
		'cat_id'=>array(
			'name'=>'cat_id',
			'value'=>'$data->cat->title',
			'filter'=>'',
		),
		/*
		
		'color_id',
		'button',
		'cuff',
		'top_right_pocket',
		'top_left_pocket',
		'bottom_right_pocket',
		'bottom_left_pocket',
		'collar',
		'top_right_patch',
		'top_left_patch',
		'bottom_right_patch',
		'bottom_left_patch',
		'hoode',
		'upper_body',
		'bottom_body',
		'right_body',
		'left_body',
		'knit',
		'inner_lining',
		'right_sleeve',
		'left_sleeve',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
