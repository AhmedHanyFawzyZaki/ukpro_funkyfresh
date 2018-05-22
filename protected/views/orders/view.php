<?php
$this->breadcrumbs = array(
    'Orders' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Orders', 'url' => array('index')),
   // array('label' => 'Create Orders', 'url' => array('create')),
    array('label' => 'Update Orders', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Orders', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>

<h1>View Orders #<?php echo $model->id; ?></h1>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        //'id',
        'user_id' => array(
            'name' => 'user_id',
            'value' => $model->user->username,
        ),
       // 'price',
        'price' => array(
            'name' => 'price',
            'value' => $model->price.' GBP',
        ),
        'status' => array(
            'name' => 'status',
            'value' => $model->status0->title,
        ),
        'country_id' => array(
            'name' => 'country_id',
            'value' => $model->shippingcountry->country_name,
        ),
        'city',
        'zipcode',
        'address',
        'phone_no',
        'b_country_id' => array(
            'name' => 'b_country_id',
            'value' => $model->billingcountry->country_name,
        ),
        'b_city',
        'b_zipcode',
        'b_address',
        'b_phone_no',
    //'order_date',
    //'order_date',
    //'token',
    //'payer_id',
    ),
));
?>
