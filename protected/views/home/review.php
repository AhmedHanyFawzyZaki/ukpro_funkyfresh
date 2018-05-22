<?php  // set the page title
$this->pageTitle=Yii::app()->name . ' - Review';
?>

<div class="wrapper">
<h3 class="main-title">Design Process</h3>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/title-shadow.png'/>

<div class="container">
<div class="rev-left">
<h4>review your jacket</h4>

<p class="parag6">This is the last step.Make sure all of the information mathcjes your jacket. </p>

<p class="title2"><label>size :</label>small<a href="<?php echo Yii::app()->getBaseUrl(true); ?>">edit</a></p>

<p class="title2"><label>body color:</label>purple<a href="<?php echo Yii::app()->getBaseUrl(true); ?>">edit</a></p>

<p class="title2"><label>body color:</label>purple<a href="<?php echo Yii::app()->getBaseUrl(true); ?>">edit</a></p>

<p class="title2 chest"><label>chest letter:</label>A<a href="<?php echo Yii::app()->getBaseUrl(true); ?>">edit</a></p>
<p class="title2 ch2"><label>font :</label>pro black </p>
<p class="title2 ch2"><label>top color :</label>black</p>
<p class="title2 ch2"><label>bottom color :</label>brown </p>

<span class="proc">your process(100%):</span>

<div class="prog">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?> " class="complete radius"></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="complete"></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="complete"></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="complete"></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="complete"></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="current"></a>
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="complete not-radius"></a>

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


<button class="btn next" type="submit">next</button>
<button class="btn bk" type="submit">Previous</button>

<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/>
</div><!--end rev-left-->


<div class="rev-right">
<div class="j-price"><span>price<i>$200</i></span></div><!--end j-price-->

<div class="review-slider">

<div class="carousel slide" id="myCarousel">
                <ol class="carousel-indicators">
                  <li class="" data-slide-to="0" data-target="#myCarousel"></li>
                  <li data-slide-to="1" data-target="#myCarousel" class=""></li>
                  <li data-slide-to="2" data-target="#myCarousel" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                      <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev1.png'/>
                    
                  </div>
                  <div class="item">
                      <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev2.png'/>
                    
                  </div>
                  <div class="item">
                   <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev3.png'/>
                    
                  </div>
                  
                   <div class="item">
                   <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev4.png'/>
                    
                  </div>
                </div>
                <a data-slide="prev" href="#myCarousel" class="left carousel-control"></a>
                <a data-slide="next" href="#myCarousel" class="right carousel-control"></a>
              </div>
              
              
</div><!--end review-slider-->

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
