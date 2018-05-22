<?php
$this->breadcrumbs = array(
    'Orders' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Orders', 'url' => array('index')),
   // array('label' => 'Create Orders', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('orders-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Orders</h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<!--<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php
$this->renderPartial('_search', array(
    'model' => $model,
));
?>
</div><!-- search-form -->

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'orders-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        //'id',
        'user_id' => array(
            'name' => 'user_id',
            'value' => '$data->user->username',
            'filter' => User::model()->getUsers(),
        ),
        'price',
//        'first_name',
//        'last_name',
//        'email',
       // 'address',
        'status' => array(
            'name' => 'status',
            'value' => '$data->status0->title',
            'filter' => OrderStatus::model()->getOrderStatus(),
        ),
//        array(
//            'class' => 'CLinkColumn',
//            'label' => 'Order Details',
//            'urlExpression' => 'Yii::app()->request->baseUrl."/ordersDetails/index?id=".$data->id',
//            'header' => 'View Details'
//        ),
        array(
            'class' => 'CLinkColumn',
            'label' => 'Preview Order',
            'urlExpression' => 'Yii::app()->request->baseUrl."/classic/index/id/".$data->tmp_product_id',
            'header' => 'Preview Order',
        ),
        /*
          'status',
          'order_date',
          'token',
          'payer_id',
         */
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>
