<?php  // set the page title
$this->pageTitle=Yii::app()->name . ' - Design';
?>

<div class="wrapper">
<h3 class="main-title">Design Process</h3>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/title-shadow.png'/>

<div class="container">
<div class="rev-left">
<h4>body color</h4>
<h5 class="title8">choose your body color</h5>

<div class="colors">
<button class="btn d-blue" type="submit"></button>
<button class="btn brown" type="submit"></button>
<button class="btn d-blue" type="submit"></button>
<button class="btn blue" type="submit"></button>
<button class="btn light-brown" type="submit"></button>
<button class="btn pink" type="submit"></button>
<button class="btn light-blue" type="submit"></button>
<button class="btn d-orange" type="submit"></button>
<button class="btn d-brown" type="submit"></button>
<button class="btn purple" type="submit"></button>
<button class="btn green" type="submit"></button>
<button class="btn orange" type="submit"></button>
<button class="btn gray" type="submit"></button>
<button class="btn yellow" type="submit"></button>
<button class="btn brown2" type="submit"></button>
<button class="btn red" type="submit"></button>
<button class="btn d-green" type="submit"></button>
<button class="btn d-brown" type="submit"></button>
<button class="btn blue2" type="submit"></button>
<button class="btn gray2" type="submit"></button>
</div><!--end colors-->
<span class="proc">your process(30%):</span>



<div class="prog">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?> " class="complete radius"></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="complete"></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="complete"></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="complete"></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="complete"></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="current"></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="not-complete"></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="not-complete"></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="not-complete not-radius"></a>

</div><!--end prog-->

<p class="label2">
<span class="box1"></span><span class="title7">completed steps</span>
</p>

<p class="label2">
<span class="box2"></span><span class="title7">current steps</span>
</p>

<p class="label2">
<span class="box3"></span><span class="title7">not completed steps</span>
</p>

<span class="proc">my saved jackets:</span>

<div class="saved-imgs">
<a href="#"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/saved-jackets.png'/></a>
</div><!--end saved-imgs-->

<div class="row1">
<button class="btn next" type="submit">next</button>
<button class="btn bk" type="submit">Previous</button>
</div>

<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/>
</div><!--end rev-left-->


<div class="rev-right">
<p class="name">jacket name</p>
<div class="j-price"><span>price<i>$200</i></span></div><!--end j-price-->
<!--
<div class="review-slider">

<div class="carousel slide" id="myCarousel">
                <ol class="carousel-indicators">
                  <li class="" data-slide-to="0" data-target="#myCarousel"></li>
                  <li data-slide-to="1" data-target="#myCarousel" class=""></li>
                  <li data-slide-to="2" data-target="#myCarousel" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                      <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/design1.png'/>
                    
                  </div>
                  <div class="item">
                      <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/design2.png'/>
                    
                  </div>
                  <div class="item">
                   <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/design3.png'/>
                    
                  </div>
                  
                   <div class="item">
                   <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/design4.png'/>
                    
                  </div>
                </div>
                <a data-slide="prev" href="#myCarousel" class="left carousel-control"></a>
                <a data-slide="next" href="#myCarousel" class="right carousel-control"></a>
              </div>
              
              
</div><!--end review-slider-->

<div class="main-jacket">
<div class="body-fit">
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/purple/body.png'>


</div><!--end body-->

<div class="upper-body"></div><!--end upper-body-->
<div class="lower-body"></div><!--end lower-body-->

<div class="body-left"></div><!--end body-left-->
<div class="body-right"></div><!--end body-left-->
<div class="buttons"></div><!--end buttons-->

<div class="top-left-patch"></div><!--end top-left-patch-->
<div class="top-right-patch"></div><!--end top-right-patch-->

<div class="bottom-left-patch"></div><!--end bottom-left-patch-->
<div class="bottom-right-patch"></div><!--end bottom-right-patch-->

<div class="u-left-pocket"></div><!--end u-left-pocket-->

<div class="u-right-pocket"></div><!--end u-right-pocket-->

<div class="lower-left-pocket">
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/purple/pocket-left.png'>
</div><!--end lower-left-pocket-->

<div class="lower-right-pocket">
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/purple/pocket-right.png'>
</div><!--end lower-right-pocket-->

<div class="sleeve-left">

<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/purple/sleeve-left.png'>
</div><!--end sleeve-left-->

<div class="sleeve-right">
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/purple/sleeve-right.png'>
</div><!--end sleeve-right-->



<div class="collar">
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/purple/collar.png'>
</div><!--end collar-->

<div class="hoode"></div><!--end hode-->

<div class="inside-lining"></div><!--inside-lining-->

<div class="cuff-left">
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/purple/cuff-left.png'>
</div><!--end cuff-left-->

<div class="cuff-right">
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/purple/cuff-right.png'>
</div><!--end cuff-left-->


<div class="knit">
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/purple/knit.png'>
</div><!--end cuff-left-->
</div><!--end main jacket-->

<div class="rotate-arrows">
<a href="#"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-left.png'></a>
<a href="#"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-right.png'></a>
</div><!--end rotate-arrows-->

<h4 class="share">share my jacket:</h4>
<div class="sharing">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/fb2.png'/></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/tw2.png'/></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/steg2.png'/></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/p2.png'/></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/in.png'/></a>
</div><!--end sharing-->
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-slide-shadow.png' class="rev-slide-shadow"/>
</div><!--end rev-right-->

<div class="rev-button">
<button class="btn buy" type="submit"><i>buy now</i></button>
<button class="btn save" type="submit"><i>save my jacket</i></button>

</div><!--end rev-button-->

</div><!--end container-->
</div><!--end wrapper-->
