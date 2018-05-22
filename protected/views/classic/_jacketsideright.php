<!--end rev-right-->
<?php $cat_and_sub_path=Yii::app()->user->getState('cat').'/'.Yii::app()->user->getState('subcat');?>

<?php

if ($_GET['id']) {
    $id = $_GET['id'];
    $tmp_product = TmpProduct::model()->findByPk($id);
     $cat = Category::model()->findByPk($tmp_product->cat_id)->title;
    $subcat = Subcategory::model()->findByPk($tmp_product->subcat_id)->title;
      $cat_and_sub_path = strtolower($cat) .'/'.strtolower($subcat);
      $price =Product::model()->findByPk($tmp_product->product_id)->price;
}
?>
<div class="rev-right">
	
	<p class="name"><?= Yii::app()->user->getState('Jname') ?></p>
	<div class="j-price"><span>price<i>&pound;  <?php echo Yii::app()->user->getState('Jprice') ?></i></span></div>

	<!--start main jacket--> 
    <div class="main-jacket" style="margin-left:25px">
    
        <div class="body-fit"> 
  			
        
            <?php if (!$_GET['id'] or $tmp_product->body_color== '') { ?>
               <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/left/body-left.png' id="body-left"> 
  		
            <?php
            } else {

                $path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . strtolower($tmp_product->body_color) . '/left/' . $tmp_product->left_body;
                ?>

                <img src="<?php echo $path ?>" id="body-right">    
                <?php }
            ?>
        
        </div>
    
        
        <div class="sleeve-left"> 
        	
          <?php if(!isset($_GET['id']) or $tmp_product->front_sleeves== ''){ ?>
           <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/left/sleeve-left.png'  id="sleeve-left"> 
        
             <?php }else{
                 $sleeve_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' .strtolower($tmp_product->sleeves_color) .'/left/'. $tmp_product->left_sleeve;
                 ?>
            <img src="<?php echo $sleeve_path ?>"  id="sleeves" > 
            <?php
             } ?>
        
        </div>
        
        <div class="lower-right-pocket">
  			
         <?php if(!$_GET['id'] or $tmp_product->pockets ==NULL){ ?>
  	<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/left/pocket-left.png'  id="pocket-left" > 
        
 <?php }else{
                  $pocket_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' .strtolower($tmp_product->pocket_color) .'/left/'. $tmp_product->bottom_left_pocket;
                               
                ?>
        
                <img src="<?php echo $pocket_path ?>"  id="pocket-right" > 
          <?php  } ?>
        
        </div>
        
        <div class="knit"> 
   			
          <?php if(!isset($_GET['id']) or $tmp_product->knit_base_color== ''){ ?>
   			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/left/knit-left.png' id="knit-left">
  		
 <?php }else{ 
                  $knit_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' .strtolower($tmp_product->knit_base_color) .'/left/'. $tmp_product->left_knit;
                ?>
                <img src="<?php echo $knit_path ?>" id="knit">
            <?php } ?>	
                
        </div>
        
        <div class="buttons"> 
        	
          <?php if(!isset($_GET['id']) or $tmp_product->button== ''){ ?>
   		<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/left/button-left.png'  id="buttons-left" >
       
 <?php }else{ 
                  $buttons_path = Yii::app()->getBaseUrl(true) . '/media/snap/'. $tmp_product->left_button;
                ?>
                <img src="<?php echo $buttons_path ?>" id="buttons">
            <?php } ?>	
                
        </div><!--end buttons-->
    
    	<!--end cuff-right-->
        <div class="<?php  if(Yii::app()->user->getState('subcat') != 'classic' and $tmp_product->subcat_id != 1){ ?>jacket-r-retro<?php } ?>  side-text-r jacket-r-<?=  str_replace(' ','',Yii::app()->user->getState('subcat'))?>">
            <span class="side-text-r-span" id="rightarm_text_id1"  style="<?php if($_GET['id'] and $tmp_product->leftarm_txt_color1){echo "color:$tmp_product->leftarm_txt_color1";} 
            if($_GET['id'] and $tmp_product->leftarm_txt_type1){ echo ";font-family:$tmp_product->leftarm_txt_type1";}
            ?>">
                
                     <?php if($_GET['id'] and $tmp_product->leftarm_image !='') {
   ?>
                    <img src="<?php echo Yii::app()->getBaseUrl(true) . "/upload/$tmp_product->leftarm_image?nocache='+Math.random()" ?>" />
                    
                        <?php
                      }elseif($_GET['id'] and $tmp_product->left_arm1 !=''){
                        echo  $tmp_product->left_arm1 ;
                    }
?>           
                    
                    
            </span>
            <br/>
            <span class="side-text-r-span line233" id="rightarm_text_id2"  style="<?php if($_GET['id'] and $tmp_product->leftarm_txt_color2){echo "color:$tmp_product->leftarm_txt_color2";} 
            if($_GET['id'] and $tmp_product->leftarm_txt_type2){ echo ";font-family:$tmp_product->leftarm_txt_type2";}
            ?>">   

                                 <?php if($_GET['id'] and $tmp_product->leftarm_image2 !='') {
   ?>
                    <img src="<?php echo Yii::app()->getBaseUrl(true) . "/upload/$tmp_product->leftarm_image2?nocache='+Math.random()" ?>" />
                    
                        <?php
                    }elseif($_GET['id'] and $tmp_product->left_arm2 !=''){
                        echo  $tmp_product->left_arm2 ;
                    }
?>           
                    
            </span>
        </div>
        
        <div class="knit" id="left-knit_stripe">
            
            <?php if(!isset($_GET['id']) or $tmp_product->knit_stripe_color== ''){ ?>
            <?php }else{ 
                  $knit_path = Yii::app()->getBaseUrl(true) . 'right/media/stripes'  .'/left/'. $tmp_product->knit_stripe_left;
                ?>
                <img src="<?php echo $knit_path ?>" id="knit">
            <?php } ?>	
                
        </div>
        
        <div class="knit" id="left-knit_stripe_border">
              <?php if(!isset($_GET['id']) or $tmp_product->knit_stripe_border_color== ''){ ?>
            <?php }else{ 
                  $knit_path = Yii::app()->getBaseUrl(true) . '/media/stripeborder/left'  .'/'. $tmp_product->knit_stripe_border;
                ?>
                <img src="<?php echo $knit_path ?>" id="knit">
            <?php } ?>	
        </div>
    </div>
	<!--end main jacket-->
	<div class="rotate-arrows">
        <a href="javascript:void(0);" onclick="document.getElementById('right_jacket').style.display='none';document.getElementById('back_jacket').style.display='block';"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-left.png'></a> 
        <a href="javascript:void(0);" onclick="document.getElementById('right_jacket').style.display='none';document.getElementById('front_jacket').style.display='block';"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-right.png'></a> 
    </div>
</div>