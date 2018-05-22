<?php $cat_and_sub_path=Yii::app()->user->getState('cat').'/'.Yii::app()->user->getState('subcat');?>
<!--end rev-left-->
    
    <div class="rev-right">
        
      <p class="name"><?= Yii::app()->user->getState('Jname') ?></p>
      <div class="j-price"><span>price<i>&pound; <?= Yii::app()->user->getState('Jprice') ?></i></span></div>
     
     <!--start main jacket--> 
        
        <div class="main-jacket" id="jacket_div">
        
        <div class="body-fit"> 
  			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/body.png' id="body"> 
  		</div>
        
        <div class="left-chest" id="left-chest-id">
        </div><!--end left-chest-->
        
        <div class="right-chest" id="right-chest-id">
        </div><!--end right-chest-->

   		<div class="f-text-r">
        	<span class="f-text-r-span" id="right_text_id" style="font-family: pro-block; text-transform: capitalize;">
            	<!-- <div> class="f-letter"-->
                    <span id="r-1" style="font-size:50px;">
                    </span>
                
                
                <!-- <div> class="s-letter"-->
                    <span id="r-2" style="font-size:50px;">
                    </span>
                
                
                <!-- <div> class="th-letter"-->
                    <span id="r-3"  style="font-size:50px;">
                    </span>
               	
            </span>
        </div>
        
        <div class="f-text-l">
        
        	<span class="f-text-l-span" id="left_text_id1">
            </span>
            <br/>
            
            <span class="f-text-l-span" id="left_text_id2">
            </span>
        </div>
        
        <div class="lower-left-pocket">
  			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/pockets.png'  id="pockets" > </div>
        <!--end lower-left-pocket-->
        
        <div class="sleeve-left">
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/top_zip.png'  id="zip_top" > 
        </div>
        
        <div class="sleeve-left"> <!--front sleeves-->
        	<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/front-sleeves.png'  id="sleeves"> </div>
        <!--end sleeve-left-->
        
        
        <div class="knit"> 
   			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/knit.png' id="knit">
  		</div>
        <!--end knit--> 
        
        <div class="knit" id="knit_stripe">
        </div>
        
        <div class="knit" id="knit_stripe_border">
        </div>
  
        <div class="buttons"> 
        	<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/buttons.png'  id="buttons" ></div><!--end buttons-->
      	</div>
      
     <!--end main jacket-->
      	
      	<div class="rotate-arrows">
       		<a href="javascript:void(0);" onclick="document.getElementById('front_jacket').style.display='none';document.getElementById('right_jacket').style.display='block';"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-left.png'></a> 
       		<a href="javascript:void(0);" onclick="document.getElementById('front_jacket').style.display='none';document.getElementById('left_jacket').style.display='block';"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-right.png'></a> 
    	</div>
      
      </div>
   