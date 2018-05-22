<?php  // set the page title
$this->pageTitle=Yii::app()->name . ' - Shipping Info';
?>

<div class="wrapper">
<h4 class="ship-title"><?= $shippingInfo->title ;?></h4>

<div class="shipping">
	<?= $shippingInfo->details ;?>
</div><!--end shipping-->


<h4 class="ship-title"><?= $shippingTimes->title ;?></h4>

<div class="shipping">
	<?= $shippingTimes->details ;?>
</div><!--end shipping-->


<h4 class="ship-title"><?= $internationalShipping->title ;?></h4>

<div class="shipping">
	<?= $internationalShipping->details ;?>
</div><!--end shipping-->

</div><!--end wrapper-->
