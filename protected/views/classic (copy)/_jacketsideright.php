<!--end rev-right-->
<?php $cat_and_sub_path=Yii::app()->user->getState('cat').'/'.Yii::app()->user->getState('subcat');?>
<div class="rev-right">
	
	<p class="name"><?= Yii::app()->user->getState('Jname') ?></p>
	<div class="j-price"><span>price<i>&pound; <?= Yii::app()->user->getState('Jprice') ?></i></span></div>

	<!--start main jacket--> 
    <div class="main-jacket" style="margin-left:25px">
    
        <div class="body-fit"> 
  			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/left/body-left.png' id="body-left"> 
  		</div>
    
        <div class="sleeve-left"> 
        	<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/left/sleeve-left.png'  id="sleeve-left"> 
        </div>
        
        <div class="lower-right-pocket">
  			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/left/pocket-left.png'  id="pocket-left" > 
        </div>
        
        <div class="knit"> 
   			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/left/knit-left.png' id="knit-left">
  		</div>
        
        <div class="buttons"> 
        	<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/left/button-left.png'  id="buttons-left" >
        </div><!--end buttons-->
    
    	<!--end cuff-right-->
        <div class="side-text-r jacket-r-<?=  str_replace(' ','',Yii::app()->user->getState('subcat'))?>">
            <span class="side-text-r-span" id="rightarm_text_id1">
            </span>
            <br/>
            <span class="side-text-r-span line233" id="rightarm_text_id2">            	
            </span>
        </div>
        
        <div class="knit" id="left-knit_stripe">
        </div>
        
        <div class="knit" id="left-knit_stripe_border">
        </div>
    </div>
	<!--end main jacket-->
	<div class="rotate-arrows">
        <a href="javascript:void(0);" onclick="document.getElementById('right_jacket').style.display='none';document.getElementById('back_jacket').style.display='block';"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-left.png'></a> 
        <a href="javascript:void(0);" onclick="document.getElementById('right_jacket').style.display='none';document.getElementById('front_jacket').style.display='block';"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-right.png'></a> 
    </div>
</div>