<?php  // set the page title
$this->pageTitle=Yii::app()->name . ' - '.$cat->title;
?>

<div class="wrapper">
<h3 class="main-title">choose your type of jacket</h3>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/title-shadow.png'/>


<div class="choose">

<div class="jacket-slider">
<div class="main-img">
<img id="img_01" src="<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?=strtolower($cat->title)?>/<?php echo $cat->image; ?>" data-zoom-image="<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?=strtolower($cat->title)?>/<?php echo $cat->image; ?>"/>

</div><!--end main-img-->



<div id="gal1" class="thumbs">
 

   <a href="#" data-image="<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?=strtolower($cat->title)?>/<?php echo $cat->image1; ?>" data-zoom-image="<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?=strtolower($cat->title)?>/<?php echo $cat->image1; ?>">
    <img class="active" id="img_01" src="<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?=strtolower($cat->title)?>/<?php echo $cat->image1; ?>" />
  </a>
  

   <a href="#" data-image="<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?=strtolower($cat->title)?>/<?php echo $cat->image2; ?>" data-zoom-image="<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?=strtolower($cat->title)?>/<?php echo $cat->image2; ?>">
    <img class="active" id="img_01" src="<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?=strtolower($cat->title)?>/<?php echo $cat->image2; ?>" />
  </a>
  

  <a href="#" data-image="<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?=strtolower($cat->title)?>/<?php echo $cat->image3; ?>" data-zoom-image="<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?=strtolower($cat->title)?>/<?php echo $cat->image3; ?>">
    <img class="active" id="img_01" src="<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?=strtolower($cat->title)?>/<?php echo $cat->image3; ?>" />
  </a>
  

</div>

<div class="type-shadow">
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/type-shadow.png'/>
</div>

</div><!--end jacket-slider-->

<div class="type-details">
<h4 class="title5"><?php echo $cat->title; ?></h4>
<p class="price"><span>price</span>($<?php echo $cat->price; ?>)</p>
<p class="parag4"><?php echo $cat->desc; ?></p>

<form action="<?=Yii::app()->request->baseUrl?>/classic" method="post">
	<input type="hidden" name="cat_id" value="<?=$cat->id?>">
	<? if($jackets!=''){ echo $jackets;?>
	<input class="btn" type="submit" value="design">
    <? }?>
</form>
</div><!--end type-details-->


<!--end all-types-->
</div><!--end choose-->

</div><!--end wrapper-->
