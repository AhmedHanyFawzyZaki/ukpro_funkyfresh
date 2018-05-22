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

<h1>Manage Products</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'desc',
		'main_image',
		'gallery_id',
		'price',
		/*
		'cat_id',
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
