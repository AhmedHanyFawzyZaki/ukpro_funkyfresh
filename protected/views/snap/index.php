<?php
$this->breadcrumbs = array(
    'Snaps' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Snap', 'url' => array('index')),
    array('label' => 'Create Snap', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('snap-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Snaps</h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php
$this->renderPartial('_search', array(
    'model' => $model,
));
?>
</div><!-- search-form -->

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'snap-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        //'id',
        'title',
        'type' => array(
            'name' => 'type',
            'value' => 'Snap::GetSnapType($data->type)',
            'filter' => array('0' => 'Snap', '1' => 'Zip', '2' => 'Hidden Zip')
        ),
        /* array(
          'name'=>'image',
          'type'=>'html',
          'filter' => '',
          'value'=>'(!empty($data->image))?CHtml::image(Yii::app()->request->baseUrl."/media/snap/".$data->image,"",array("style"=>"width:100px;height:75px;")):"no image"',
          ) , */
        'color' => array(
            'name' => 'color',
            'filter' => '',
            'type' => 'html',
            'value' => 'Snap::GetSnapColor($data->color)',
        ),
        array(
            'name' => 'sub_category',
            'value' => '$data->subCategory->title',
            'filter' => CHtml::listData(Subcategory::model()->findAll(), 'id', 'title'),
        ),
        //'extra_image',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>
