<div class="footer">



<div class="wrapper">

<div class="f-logo">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/f-logo.png"></a>
</div><!--end logo-->
<div class="navbar">
              <div class="navbar-inner">
                <ul class="nav">
                  <li><a href="<?= Yii::app()->request->baseUrl ;?>/<?= Helper::DrawPageLink2(2) ;?>">Privacy policy</a></li>
                  <li><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/faq">FAQ</a></li>
                  
                  <li><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/contact">contact Us</a></li>
          
                  <li><a href="<?= Yii::app()->request->baseUrl ;?>/<?= Helper::DrawPageLink2(3) ;?>">terms and conditions</a></li>
                  
                  <li><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/shipping">shipping info</a></li>
    
                </ul>
                
                <div class="social">
    <a title="" target="_blank" href="<?php echo  Helper::yiiparam('facebook')?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/fb.png'/></a>
    <a title="" target="_blank" href="<?php echo  Helper::yiiparam('twitter')?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/tw.png'/></a>
    
    <a title="" target="_blank" href="<?php echo  Helper::yiiparam('google')?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/google.png'/></a>
    <a title="" target="_blank" href="<?php echo  Helper::yiiparam('instagram')?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/steg.png'/></a>
    </div>
              </div>
            </div>
            
            <span> &copy; 2015, All rights reserved.
            <p class="subscrib"><input type="text" placeholder="subscribe for mail" class="span2"></p>
             </span>
            </div><!--end wrapper-->

</div><!--end footer-->


         
<script>

$('#img_01').elevateZoom({
	gallery:'gal1',
            zoomType: "inner",
            cursor: "crosshair",
            zoomWindowFadeIn: 500,
            zoomWindowFadeOut: 750
               });
			   
			   

//pass the images to Fancybox
$("#img_01").bind("click", function(e) {  
  var ez =   $('#img_01').data('elevateZoom');	
	$.fancybox(ez.getGalleryList());
  return false;
});
</script>

  <script>

  $('.carousel').carousel();


  </script>


</body>
</html>
