    <!--end rev-left-->
<?php $cat_and_sub_path=Yii::app()->user->getState('cat').'/'.Yii::app()->user->getState('subcat');?>    
<div class="rev-right">
	
	<p class="name"><?= Yii::app()->user->getState('Jname') ?></p>
	<div class="j-price"><span>price<i>&pound; <?= Yii::app()->user->getState('Jprice') ?></i></span></div>
 
 	<!--start main jacket--> 
    <div class="main-jacket">
    
        <!--end body-->

        <div class="body-fit"> 
  			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/back/back.png' id="back-body"> 
  		</div>
        
        <div class="sleeve-left"> <!--back sleeves-->
        	<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/back/back-sleeves.png'  id="back-sleeves"> 
        </div>
        <!--end sleeve-back-->
        
        <div class="knit"> 
   			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/back/knit-back.png' id="back-knit">
  		</div>
        <!--end knit--> 
        <div class="knit" id="back-knit_stripe">
        </div>
        
        <div class="knit" id="back-knit_stripe_border">
        </div>
        
        <div class="text-inner-back">
        	
            <span id="back_text_id" style="width:100%; float:left; margin-left:0px;" class="tailmain">
            </span>
            <span id="back_img_id">
            </span>
            <span id="sub_tail" class="tailsub"></span>
        
        
            <span id="back_text_id1" class="middle_letters"></span>
            <span id="back_text_id2" class="bottom_letters"></span>
        </div>

    </div>
    <!--end main jacket-->
 	<div class="rotate-arrows">
        <a href="javascript:void(0);" onclick="document.getElementById('back_jacket').style.display='none';document.getElementById('left_jacket').style.display='block';"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-left.png'></a> 
        <a href="javascript:void(0);" onclick="document.getElementById('back_jacket').style.display='none';document.getElementById('right_jacket').style.display='block';"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-right.png'></a> 
    </div>
</div>
      
     