<?php  // set the page title
$this->pageTitle=Yii::app()->name . ' - Group Jackets';
?>


<div class="wrapper">

<h3 class="main-title">Group jackets</h3>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/title-shadow.png'/>

<div class="container">

<h4 class="types">types of jackets</h4>

<div class="row">
<div class="g-type">

<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/profile"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/g-jacket.png'/></a>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/g-shadow.png' class="j-shadow"/>
<button class="btn" type="button">classic jackets</button>

</div><!--end g-type-->

<div class="g-type j-last">

<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/profile"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/g-jacket.png'/></a>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/g-shadow.png' class="j-shadow"/>
<button class="btn red-bt" type="button">legacy jackets</button>

</div><!--end g-type-->
</div><!--end row-->
</div><!--end container-->
</div><!--end wrapper-->