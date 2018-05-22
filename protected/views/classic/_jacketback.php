    <!--end rev-left-->
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
	<div class="j-price"><span>price<i>&pound;   <?php echo Yii::app()->user->getState('Jprice') ?></i></span></div>
 
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
            
              <?php if(!isset($_GET['id']) or $tmp_product->knit_stripe_border_color== ''){ ?>
            <?php }else{ 
                  $knit_path = Yii::app()->getBaseUrl(true) . '/media/stripeborder/back'  .'/'. $tmp_product->knit_stripe_border;
                ?>
                <img src="<?php echo $knit_path ?>" id="knit">
            <?php } ?>	
        </div>
        
        <div class="text-inner-back">
        	
            <span id="back_text_id" style="width:100%; float:left; margin-left:0px;<?php if($tmp_product->back_text_color){ ?> color:<?php echo $tmp_product->back_text_color; } ?>;font-family:<?php if($tmp_product->back_text_type){  echo $tmp_product->back_text_type ?> <?php } ?>" class="tailmain">
                 <?php if($_GET['id'] and $tmp_product->back_text !=null) {
     echo $tmp_product->back_text;
                    }
                    ?>
            </span>
            <span id="back_img_id">
                     <?php if($_GET['id'] and $tmp_product->back_image !=null) {
   ?>
                    <img src="<?php echo Yii::app()->getBaseUrl(true) . "/upload/$tmp_product->back_image?nocache='+Math.random()" ?>" />
                    
                        <?php
                    }
?>           
            </span>
            <span id="sub_tail" class="tailsub"  style="<?php if($tmp_product->back_text_color2){ ?> color:<?php echo $tmp_product->back_text_color2; } ?>;font-family:<?php if($tmp_product->back_text_type2){  echo $tmp_product->back_text_type2 ?> <?php } ?>">
                
                 <?php if($_GET['id'] and $tmp_product->back_text2 !=null ) {
    // echo $tmp_product->back_text2;
                    }
?>           
            </span>
        
        
            <span id="back_text_id1" class="middle_letters" style="<?php if($tmp_product->back_text_color1){ ?> color:<?php echo $tmp_product->back_text_color1; } ?>;font-family:<?php if($tmp_product->back_text_type1){  echo $tmp_product->back_text_type1 ?> <?php } ?>">
                
                 <?php if($_GET['id'] and $tmp_product->back_text1 !=null) {
     echo $tmp_product->back_text1;
                    }
?>           
                
            </span>
            <span id="back_text_id2" class="bottom_letters" style="<?php if($tmp_product->back_text_color2){ ?> color:<?php echo $tmp_product->back_text_color2; } ?>;font-family:<?php if($tmp_product->back_text_type2){  echo $tmp_product->back_text_type2 ?> <?php } ?>">
                
                 <?php if($_GET['id'] and $tmp_product->back_text2 !=null) {
    // echo $tmp_product->back_text2;
                    }
                    ?>
            </span>
        </div>

    </div>
        
        
        <script>
                    $(document).ready(function(){
                       var value = "<?php if ($tmp_product->back_text) echo $tmp_product->back_text ?>";
                       if(value !=''){
                      //change_txt1(value);
                      change_txt_back("<?php if ($tmp_product->back_text) echo $tmp_product->back_text ?>",'<?php if($tmp_product->back_type == "tail"){echo  "tail";}else{ echo "letter";} ?>','');
                       change_txt_back("<?php if ($tmp_product->back_text1 and $tmp_product->back_type != "tail") echo $tmp_product->back_text1 ?>",'letter','1');
                        change_txt_back("<?php if ($tmp_product->back_text2 and $tmp_product->back_type != "tail") echo $tmp_product->back_text2 ?>",'letter','2');
                   <?php if($tmp_product->back_type == "tail"){ ?>
                      change_sub_tail("<?php echo $tmp_product->back_text2; ?>");
                   <?php } ?>
                  }
                    });
                    </script>
                    
    <!--end main jacket-->
 	<div class="rotate-arrows">
        <a href="javascript:void(0);" onclick="document.getElementById('back_jacket').style.display='none';document.getElementById('left_jacket').style.display='block';"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-left.png'></a> 
        <a href="javascript:void(0);" onclick="document.getElementById('back_jacket').style.display='none';document.getElementById('right_jacket').style.display='block';"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-right.png'></a> 
    </div>
</div>
      
     