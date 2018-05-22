<?php  // set the page title
$this->pageTitle=Yii::app()->name . ' - Cart Details';
?>

<div class="wrapper">
<h3 class="main-title">Shopping cart</h3>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/title-shadow.png'/>

<div class="container">

<div class="detaild-slider">
<div class="main-img">
<img   id="img_01" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/small/image1.png" data-zoom-image="<?php echo Yii::app()->getBaseUrl(true); ?>/img/large/image1.png"/>

</div><!--end main-img-->

<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/cart-shadow.png' class="j-shadow"/>


<div id="gal1" class="thumbs">
 
  <a href="#" data-image="<?php echo Yii::app()->getBaseUrl(true); ?>/img/small/image1.png" data-zoom-image="<?php echo Yii::app()->getBaseUrl(true); ?>/img/large/image1.png">
    <img class="active" id="img_01" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/thumb/image1.png" />
  </a>
  



   <a href="#" data-image="<?php echo Yii::app()->getBaseUrl(true); ?>/img/small/image2.png" data-zoom-image="<?php echo Yii::app()->getBaseUrl(true); ?>/img/large/image2.png">
    <img class="active" id="img_01" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/thumb/image2.png" />
  </a>
  

   <a href="#" data-image="<?php echo Yii::app()->getBaseUrl(true); ?>/img/small/image3.png" data-zoom-image="<?php echo Yii::app()->getBaseUrl(true); ?>/img/large/image3.png">
    <img class="active" id="img_01" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/thumb/image3.png" />
  </a>
  

  <a href="#" data-image="<?php echo Yii::app()->getBaseUrl(true); ?>/img/small/image4.png" data-zoom-image="<?php echo Yii::app()->getBaseUrl(true); ?>/img/large/image4.png">
    <img class="active" id="img_01" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/thumb/image4.png" />
  </a>
  

</div>

<h4 class="share">share my jacket:</h4>
<div class="sharing">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/fb2.png'/></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/tw2.png'/></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/steg2.png'/></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/p2.png'/></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/in.png'/></a>
</div><!--end sharing-->
</div><!--end detaild-->



<div class="cart-details">
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/details-shadow.png' class="det-shadow"/>

<div class="cart-info">
<h4 class="j-details">jacket details</h4>
<div class="j-data">
<p class="title2"><label>Price :</label>$200 </p>
<p class="title2"><label>size :</label>small</p>
<p class="title2"><label>quantity :</label>1 </p>
<p class="title2"><label>color:</label>black </p>

<p class="title2 chest"><label>chest letter:</label>A </p>
<p class="title2 ch2"><label>font :</label>pro black </p>
<p class="title2 ch2"><label>top color :</label>black</p>
<p class="title2 ch3"><label>bottom color :</label>brown </p><button type="button" class="btn s-btn">edit jacket</button>

<div class="total">
<p class="total2"><a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="delete">Delete from cart</a><span><label>Total:</label>$200</span></p>
<button type="button" class="btn back">back</button><button type="button" class="btn check">checkout</button>

</div><!--end total-->

</div><!--end j-data-->

</div><!--end cart-info-->


</div><!--end cart-details-->

</div><!--end container-->

</div><!--end wrapper-->
