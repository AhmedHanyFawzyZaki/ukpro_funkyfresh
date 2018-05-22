<?php
$this->breadcrumbs=array(
	'Settings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Update Settings','url'=>array('index')),
);
?>

<h1>View Settings </h1>





<?php $this->widget('bootstrap.widgets.TbDetailView',array(
    'data'=>$model,
    'attributes'=>array(
        'facebook',
        'google',
        'twitter',
    //    'pinterest',
        'email',
        'instagram',
        'api_username',
        'api_password',
        'signature'
    //    'press_email',
    //    'support_email',
    //    'paypal_email',
    //    'signature',
    //    'site_commession',
	//	'grant_discount_num',
	//	'grant_discount_text',
    ),
)); ?>
