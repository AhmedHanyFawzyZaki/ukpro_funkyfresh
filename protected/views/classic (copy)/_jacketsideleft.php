<!-- --- end rev-left --- -->
<?php $cat_and_sub_path=Yii::app()->user->getState('cat').'/'.Yii::app()->user->getState('subcat');?>
<div class="rev-right">

	<p class="name"><?= Yii::app()->user->getState('Jname') ?></p>
	<div class="j-price"><span>price<i>&pound; <?= Yii::app()->user->getState('Jprice') ?></i></span></div>

	<!--start main jacket--> 
    <div class="main-jacket">
    
    	<div class="body-fit"> 
  			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/right/body-right.png' id="body-right"> 
  		</div>
    
        <div class="sleeve-right"> 
        	<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/right/sleeve-right.png'  id="sleeve-right"> 
        </div>
        
        <div class="lower-left-pocket">
  			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/right/pocket-right.png'  id="pocket-right"/> 
        </div>
        
        <div class="knit"> 
   			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/right/knit-right.png' id="knit-right"/>
  		</div>
        
        <div class="buttons"> 
        	<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/right/button-right.png'  id="buttons-right"/></div><!--end buttons-->
    
    	<!--end cuff-left-->
    	<div class="side-text-l jacket-l-<?=  str_replace(' ','',Yii::app()->user->getState('subcat'))?>" id="side-text-l-id">
            <span class="side-text-l-span" id="leftarm_text_id1">
            </span>
            <br/>
            <span class="side-text-l-span line233" id="leftarm_text_id2">            	
            </span>
        </div>
        
        <div class="knit" id="right-knit_stripe">
        </div>
        
        <div class="knit" id="right-knit_stripe_border">
        </div>
    </div>
	<!--end main jacket-->
	<div class="rotate-arrows">
        <a href="javascript:void(0);" onclick="document.getElementById('left_jacket').style.display='none';document.getElementById('front_jacket').style.display='block';"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-left.png'></a> 
        <a href="javascript:void(0);" onclick="document.getElementById('left_jacket').style.display='none';document.getElementById('back_jacket').style.display='block';"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-right.png'></a> 
    </div>
</div>