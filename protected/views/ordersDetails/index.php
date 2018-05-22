<?php
$this->breadcrumbs=array(
	'Orders Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OrdersDetails','url'=>array('index')),
	array('label'=>'Create OrdersDetails','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('orders-details-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Orders Details</h1>

<!--<p>
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
	'id'=>'orders-details-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'orders_id',
		'qty',
		//'pro_id',
		'price',
		'cat_id'=>array(
                'name'=>'cat_id',
               	'value'=>'$data->cat->title',
				'filter'=>Category::model()->getCategories(),
            ),
		'subcat_id'=>array(
                'name'=>'subcat_id',
               	'value'=>'$data->subcat->title',
				'filter'=>Subcategory::model()->getSubCategories(),
            ),
		/*
		'body',
		'collar',
		'cuff_left',
		'cuff_right',
		'pocket_bottom_left',
		'pocket_bottom_right',
		'knit',
		'sleeve_left',
		'sleeve_right',
		'buttons',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
