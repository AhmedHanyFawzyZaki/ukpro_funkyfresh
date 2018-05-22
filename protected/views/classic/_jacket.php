<?php $cat_and_sub_path=Yii::app()->user->getState('cat').'/'.Yii::app()->user->getState('subcat');?>
<!--end rev-left-->
    
<?php 
if($_GET['id']){
    $id = $_GET['id'];
    $tmp_product = TmpProduct::model()->findByPk($id);
    
    $cat = Category::model()->findByPk($tmp_product->cat_id)->title;
    $subcat_ = Subcategory::model()->findByPk($tmp_product->subcat_id);
    $subcat = Subcategory::model()->findByPk($tmp_product->subcat_id)->title;
      $cat_and_sub_path = strtolower($cat) .'/'.strtolower($subcat);
      $price = Product::model()->findByPk($tmp_product->product_id)->price;
//    echo '<pre>';
//    print_r($tmp_product);die;
}
?>
    <div class="rev-right">
        
      <p class="name"><?= Yii::app()->user->getState('Jname') ?></p>
      <div class="j-price"><span>price<i>&pound;  <?php echo Yii::app()->user->getState('Jprice') ?></i></span></div>
     
     <!--start main jacket--> 
        
        <div class="main-jacket" id="jacket_div">
        
        <div class="body-fit"> 
            <?php if(!$_GET['id'] or $tmp_product->body ==NULL){ ?>
  			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/body.png' id="body"> 
            <?php }else{
                
               // $color_ = Color::model()->find("color = '$tmp_product->body_color'");
             // print_r($color_);die;
                                 $path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' .strtolower($tmp_product->body_color) .'/'. $tmp_product->body;
                               
                ?>
                        
                     <img src="<?php echo $path ?>" id="body">    
                        <?php
            } ?>	
        </div>
        
        <div class="left-chest" id="left-chest-id">
            
                            <?php if($_GET['id'] and $tmp_product->rightchest_image !='') {
   ?>
                    <img src="<?php echo Yii::app()->getBaseUrl(true) . "/upload/$tmp_product->rightchest_image?nocache='+Math.random()" ?>" />
                    
                        <?php
                    }
?>
        </div><!--end left-chest-->
        
        <div class="right-chest" id="right-chest-id">
                   <?php if($_GET['id'] and $tmp_product->leftchest_image !='') {
   ?>
                    <img src="<?php echo Yii::app()->getBaseUrl(true) . "/upload/$tmp_product->leftchest_image?nocache='+Math.random()" ?>" />
                    
                        <?php
                    }
?>           
                    
        </div><!--end right-chest-->

   		<div class="f-text-r">
        	<span class="f-text-r-span" id="right_text_id"  style="font-family: <?php echo $tmp_product->leftchest_txt_type ?>; color: <?php echo $tmp_product->leftchest_txt_color ?>;">
            	<!-- <div> class="f-letter"-->
               
                <?php //if($_GET['id'] and $) ?>
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
        
        <?php if($_GET['id'] and $tmp_product->leftchest !='' and $tmp_product->leftchest_image ==''){ ?>
         <script>
                    $(document).ready(function(){
                       var value = "<?php if($tmp_product->leftchest)echo $tmp_product->leftchest ?>";
                       if(value !=''){
                      change_txt1(value);
                      
                  }
                    });
                    </script>
        <?php } ?>
         
        
        <div class="f-text-l">
        
            <span class="f-text-l-span" id="left_text_id1" style="font-family: <?php echo $tmp_product->rightchest_txt_type1 ?>; color: <?php echo $tmp_product->rightchest_txt_color1 ?>;">
                    <?php if($_GET['id'] and $tmp_product->rightchest1 !='') {
     echo $tmp_product->rightchest1;
                    }
?>
            </span>
            <br/>
            
            <span class="f-text-l-span" id="left_text_id2" style="font-family: <?php echo $tmp_product->rightchest_txt_type2 ?>; color: <?php echo $tmp_product->rightchest_txt_color2 ?>;">
                  <?php if($_GET['id'] and $tmp_product->rightchest2 !='') {
     echo $tmp_product->rightchest2;
                    }
?>
            </span>
        </div>
        
        
       
        
        <div class="lower-left-pocket">
            <?php if(!$_GET['id'] or $tmp_product->pockets ==NULL){ ?>
  			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/pockets.png'  id="pockets" > 
            <?php }else{
                  $pocket_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' .strtolower($tmp_product->pocket_color) .'/'. $tmp_product->pockets;
                               
                ?>
        
                <img src="<?php echo $pocket_path ?>"  id="pockets" > 
       
          <?php  } ?>
      </div>
        <!--end lower-left-pocket-->
        
        <div class="sleeve-left">
             <?php if(!isset($_GET['id']) or $tmp_product->top_zip== ''){ ?>
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/top_zip.png'  id="zip_top" > 
             <?php }else{
//                 $sleeve_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' .strtolower($tmp_product->sleeves_color) .'/'. $tmp_product->front_sleeves;
                 ?>
             
              <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/<?php echo $tmp_product->top_zip ?>/top_zip.png'  id="zip_top" > 
                 <?php
             } ?>
        </div>
        
        <div class="sleeve-left"> <!--front sleeves-->
        	
         <?php if(!isset($_GET['id']) or $tmp_product->front_sleeves== ''){ ?>
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/front-sleeves.png'  id="sleeves">
        
             <?php }else{
                 $sleeve_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' .strtolower($tmp_product->sleeves_color) .'/'. $tmp_product->front_sleeves;
                 ?>
            <img src="<?php echo $sleeve_path ?>"  id="sleeves" > 
            <?php
             } ?>
        </div>
        <!--end sleeve-left-->
        
        
        <div class="knit"> 
            <?php if(!isset($_GET['id']) or $tmp_product->knit_base_color== ''){ ?>
   			<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/knit.png' id="knit">
            <?php }else{ 
                  $knit_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' .strtolower($tmp_product->knit_base_color) .'/'. $tmp_product->knit;
                ?>
                <img src="<?php echo $knit_path ?>" id="knit">
            <?php } ?>	
                        
                        
        </div>
        <!--end knit--> 
        
        <div class="knit" id="knit_stripe">
             <?php if(!isset($_GET['id']) or $tmp_product->knit_stripe_color== ''){ ?>
            <?php }else{ 
                  $knit_path = Yii::app()->getBaseUrl(true) . '/media/stripes'  .'/'. $tmp_product->knit_stripe;
                ?>
                <img src="<?php echo $knit_path ?>" id="knit">
            <?php } ?>	
        </div>
        
        <div class="knit" id="knit_stripe_border">
            
               <?php if(!isset($_GET['id']) or $tmp_product->knit_stripe_border_color== ''){ ?>
            <?php }else{ 
                  $knit_path = Yii::app()->getBaseUrl(true) . '/media/stripeborder'  .'/'. $tmp_product->knit_stripe_border;
                ?>
                <img src="<?php echo $knit_path ?>" id="knit">
            <?php } ?>	
                
        </div>
  
        <div class="buttons"> 
        	<!--<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/buttons.png'  id="buttons" ></div>end buttons-->
      	
     <?php if(!isset($_GET['id']) or $tmp_product->button== ''){ ?>
   		<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path?>/default/buttons.png'  id="buttons" >
      	
 <?php }else{ 
                  $buttons_path = Yii::app()->getBaseUrl(true) . '/media/snap/'. $tmp_product->button;
                ?>
                <img src="<?php echo $buttons_path ?>" id="buttons">
            <?php } ?>	
    
    </div>
      
     <!--end main jacket-->
      	
      	<div class="rotate-arrows">
       		<a href="javascript:void(0);" onclick="document.getElementById('front_jacket').style.display='none';document.getElementById('right_jacket').style.display='block';"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-left.png'></a> 
       		<a href="javascript:void(0);" onclick="document.getElementById('front_jacket').style.display='none';document.getElementById('left_jacket').style.display='block';"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rot-right.png'></a> 
    	</div>
      
      </div>
     
      </div>
 <!--</div>-->