    <!--end rev-left-->
<?php $cat_and_sub_path=Yii::app()->user->getState('cat').'/'.Yii::app()->user->getState('subcat');?>    
    
    
    <?php
if ($_GET['id']) {
    $id = $_GET['id'];
    $tmp_product = TmpProduct::model()->findByPk($id);
}
?>
    
<div class="rev-right">
	
	<p class="name"><?= Yii::app()->user->getState('Jname') ?></p>
	<div class="j-price"><span>price<i>&pound; <?= Yii::app()->user->getState('Jprice') ?></i></span></div>
 
 	<!--start main jacket--> 
    <div class="main-jacket">
    
        <!--end body-->

        <div class="body-fit"> 
  			
        
         <?php if(!$_GET['id'] or $tmp_product->body ==NULL){ ?>
  			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/back/back.png' id="back-body"> 
  		
          <?php }else{
                
        $path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' .strtolower($tmp_product->body_color) .'/back/'. $tmp_product->back;
                               
                ?>
                        
                     <img src="<?php echo $path ?>" id="body">    
                        <?php
            } ?>
                     
        </div>
        
        <div class="sleeve-left"> <!--back sleeves-->
        	
                <?php if(!isset($_GET['id']) or $tmp_product->front_sleeves== ''){ ?>
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/back/back-sleeves.png'  id="back-sleeves"> 
       
             <?php }else{
                 $sleeve_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' .strtolower($tmp_product->sleeves_color) .'/back/'. $tmp_product->back_sleeves;
                 ?>
            <img src="<?php echo $sleeve_path ?>"  id="sleeves" > 
            <?php
             } ?>
        </div>
        <!--end sleeve-back-->
        
        <div class="knit"> 
   			
                        
                        <?php if(!isset($_GET['id']) or $tmp_product->knit_base_color== ''){ ?>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/back/knit-back.png' id="back-knit">
  		      
 <?php }else{ 
                  $knit_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' .strtolower($tmp_product->knit_base_color) .'/back/'. $tmp_product->back_knit;
                ?>
                <img src="<?php echo $knit_path ?>" id="knit">
            <?php } ?>	
        
        </div>
        <!--end knit--> 
        <div class="knit" id="back-knit_stripe">
            
             <?php if(!isset($_GET['id']) or $tmp_product->knit_stripe_color== ''){ ?>
            <?php }else{ 
                  $knit_path = Yii::app()->getBaseUrl(true) . '/media/stripes'  .'/back/'. $tmp_product->knit_stripe_back;
                ?>
                <img src="<?php echo $knit_path ?>" id="knit">
            <?php } ?>	
                
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
      
     