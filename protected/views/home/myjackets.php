<?php  // set the page title
$this->pageTitle=Yii::app()->name . ' - My Jackets';
?>


<div class="wrapper">
<h3 class="main-title">My jackets</h3>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/title-shadow.png'/>

<div class="container">

<?php echo $this->renderPartial('profile_left',array()); ?>

<div class="content">

<div class="row row1">
<div class="my-jacket">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/profile"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket1.png'/></a>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket-shadow.png' class="j-shadow"/>
<button class="btn" type="button">Buy</button>
</div><!--end my-jacket-->

<div class="my-jacket black">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/profile"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket1.png'/></a>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket-shadow.png' class="j-shadow"/>
<button class="btn" type="button">Buy</button>
</div><!--end my-jacket-->

<div class="my-jacket j-last">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/profile"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket1.png'/></a>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket-shadow.png' class="j-shadow"/>
<button class="btn" type="button">Buy</button>
</div><!--end my-jacket-->

</div><!--end row-->

<div class="row row1">
<div class="my-jacket">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/profile"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket1.png'/></a>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket-shadow.png' class="j-shadow"/>
<button class="btn" type="button">Buy</button>
</div><!--end my-jacket-->

<div class="my-jacket black">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/profile"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket1.png'/></a>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket-shadow.png' class="j-shadow"/>
<button class="btn" type="button">Buy</button>
</div><!--end my-jacket-->

<div class="my-jacket j-last">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/profile"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket1.png'/></a>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket-shadow.png' class="j-shadow"/>
<button class="btn" type="button">Buy</button>
</div><!--end my-jacket-->

</div><!--end row-->

<div class="row row1">
<div class="my-jacket">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/profile"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket1.png'/></a>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket-shadow.png' class="j-shadow"/>
<button class="btn" type="button">Buy</button>
</div><!--end my-jacket-->

<div class="my-jacket black">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/profile"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket1.png'/></a>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket-shadow.png' class="j-shadow"/>
<button class="btn" type="button">Buy</button>
</div><!--end my-jacket-->

<div class="my-jacket j-last">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/profile"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket1.png'/></a>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/jacket-shadow.png' class="j-shadow"/>
<button class="btn" type="button">Buy</button>
</div><!--end my-jacket-->

</div><!--end row-->

<div class="pagination">
              <ul>
                <li><a href="#">prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">next</a></li>
              </ul>
            </div>

</div><!--end content-->
</div><!--end container-->

</div><!--end wrapper-->