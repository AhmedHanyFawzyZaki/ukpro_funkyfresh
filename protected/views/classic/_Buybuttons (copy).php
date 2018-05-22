

   
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

<form name="tmp_product" id="tmp_product" method="post">
    <input type="hidden" name="tmp_product_id" id="tmp_product_id" value="<?php if($tmp_product->product_id) echo $tmp_product->product_id; ?>">
	<input type="hidden" name="tmp_form_size" id="form_size" value="<?php if($tmp_product->form_size) echo $tmp_product->form_size; ?>">
    <input type="hidden" name="tmp_form_type" id="tmp_form_type" value="<?php // if($tmp_product->form_type) echo $tmp_product->form_type; ?>">
    <input type="hidden" name="tmp_chest_size" id="tmp_chest_size" value="<?php if($tmp_product->chest_size) echo $tmp_product->chest_size; ?>">
    <input type="hidden" name="tmp_waist_size" id="tmp_waist_size" value="<?php if($tmp_product->waist_size) echo $tmp_product->waist_size; ?>">
    <input type="hidden" name="tmp_shoulder_length" id="tmp_shoulder_length" value="<?php if($tmp_product->shoulder_length) echo $tmp_product->shoulder_length; ?>">
    <input type="hidden" name="tmp_body_length" id="tmp_body_length" value="<?php if($tmp_product->body_length) echo $tmp_product->body_length; ?>">
    <input type="hidden" name="tmp_sleeve_length" id="tmp_sleeve_length" value="<?php if($tmp_product->sleeve_length) echo $tmp_product->sleeve_length; ?>">
    
    
    
    
    <input type="hidden" name="tmp_body_color" id="tmp_body_color" value="<?php if($tmp_product->body_color) echo $tmp_product->body_color; ?>">
    <input type="hidden" name="tmp_body" id="tmp_body" value="<?php if($tmp_product->body) echo $tmp_product->body; ?>">
    <input type="hidden" name="tmp_back_body" id="tmp_back_body" value="<?php if($tmp_product->back) echo $tmp_product->back; ?>">
    <input type="hidden" name="tmp_body_right" id="tmp_body_right" value="<?php if($tmp_product->right_body) echo $tmp_product->right_body; ?>">
    <input type="hidden" name="tmp_body_left" id="tmp_body_left" value="<?php if($tmp_product->left_body) echo $tmp_product->left_body; ?>">  
    
    <input type="hidden" name="tmp_sleeves_color" id="tmp_sleeves_color" value="<?php if($tmp_product->sleeves_color) echo $tmp_product->sleeves_color; ?>">
    <input type="hidden" name="tmp_front_sleeves" id="tmp_front_sleeves" value="<?php if($tmp_product->front_sleeves) echo $tmp_product->front_sleeves; ?>">
    <input type="hidden" name="tmp_back_sleeves" id="tmp_back_sleeves" value="<?php if($tmp_product->back_sleeves) echo $tmp_product->back_sleeves; ?>">
    <input type="hidden" name="tmp_right_sleeves" id="tmp_right_sleeves" value="<?php if($tmp_product->right_sleeve) echo $tmp_product->right_sleeve; ?>">
    <input type="hidden" name="tmp_left_sleeves" id="tmp_left_sleeves" value="<?php if($tmp_product->left_sleeve) echo $tmp_product->left_sleeve; ?>">  
    
    <!-- snap(buttons)-->
    <input type="hidden" name="tmp_snap_color" id="tmp_snap_color" value="<?php if($tmp_product->button_color) echo $tmp_product->button_color; ?>">
    <input type="hidden" name="tmp_front_snap" id="tmp_front_snap" value="<?php if($tmp_product->button_color) echo $tmp_product->button_color; ?>">
    <input type="hidden" name="tmp_right_snap" id="tmp_right_snap" value="<?php if($tmp_product->right_button) echo $tmp_product->right_button; ?>">
    <input type="hidden" name="tmp_left_snap" id="tmp_left_snap" value="<?php if($tmp_product->left_button) echo $tmp_product->left_button; ?>">  
    
     <!-- pocket-->
    <input type="hidden" name="tmp_pocket_color" id="tmp_pocket_color" value="<?php if($tmp_product->pocket_color) echo $tmp_product->pocket_color; ?>">
    <input type="hidden" name="tmp_front_pocket" id="tmp_front_pocket" value="<?php if($tmp_product->pockets) echo $tmp_product->pockets; ?>">
    <input type="hidden" name="tmp_right_pocket" id="tmp_right_pocket" value="<?php if($tmp_product->bottom_right_pocket) echo $tmp_product->bottom_right_pocket; ?>">
    <input type="hidden" name="tmp_left_pocket"  id="tmp_left_pocket" value="<?php if($tmp_product->bottom_left_pocket) echo $tmp_product->bottom_left_pocket; ?>">  
    
     <!-- knit-->
    <input type="hidden" name="tmp_knit_color" id="tmp_knit_color" value="<?php if($tmp_product->knit_base_color) echo $tmp_product->knit_base_color; ?>">
    <input type="hidden" name="tmp_front_knit" id="tmp_front_knit" value="<?php if($tmp_product->knit) echo $tmp_product->knit; ?>">
     <input type="hidden" name="tmp_back_knit" id="tmp_back_knit" value="<?php if($tmp_product->back_knit) echo $tmp_product->back_knit; ?>">
    <input type="hidden" name="tmp_right_knit" id="tmp_right_knit" value="<?php if($tmp_product->right_knit) echo $tmp_product->right_knit; ?>">
    <input type="hidden" name="tmp_left_knit"  id="tmp_left_knit" value="<?php if($tmp_product->left_knit) echo $tmp_product->left_knit; ?>">  
    
    <!-- knit strip-->
    <input type="hidden" name="tmp_knit_stripe_color" id="tmp_knit_stripe_color" value="<?php if($tmp_product->knit_stripe_color) echo $tmp_product->knit_stripe_color; ?>">
    <input type="hidden" name="tmp_knit_stripe" id="tmp_knit_stripe" value="<?php if($tmp_product->knit_stripe) echo $tmp_product->knit_stripe; ?>">
     <input type="hidden" name="tmp_knit_stripe_back" id="tmp_knit_stripe_back" value="<?php if($tmp_product->knit_stripe_back) echo $tmp_product->knit_stripe_back; ?>">
    <input type="hidden" name="tmp_knit_stripe_right" id="tmp_knit_stripe_right" value="<?php if($tmp_product->knit_stripe_right) echo $tmp_product->knit_stripe_right; ?>">
    <input type="hidden" name="tmp_knit_stripe_left"  id="tmp_knit_stripe_left" value="<?php if($tmp_product->knit_stripe_left) echo $tmp_product->knit_stripe_left; ?>">  
    
     <!-- knit double strip-->
    <input type="hidden" name="tmp_double_stripe" id="tmp_double_stripe" value="<?php // if($tmp_product->double_stripe) echo $tmp_product->double_stripe; ?>">
    <input type="hidden" name="tmp_double_stripe" id="tmp_double_stripe" value="<?php // if($tmp_product->double_stripe) echo $tmp_product->double_stripe; ?>">
     <input type="hidden" name="tmp_double_stripe_back" id="tmp_double_stripe_back" value="<?php // if($tmp_product->double_stripe_back) echo $tmp_product->double_stripe_back; ?>">
    <input type="hidden" name="tmp_knit_double_stripe_right" id="tmp_knit_double_stripe_right" value="<?php // if($tmp_product->knit_double_stripe_right) echo $tmp_product->knit_double_stripe_right; ?>">
    <input type="hidden" name="tmp_knit_double_stripe_left"  id="tmp_knit_double_stripe_left" value="<?php // if($tmp_product->double_stripe_left) echo $tmp_product->double_stripe_left; ?>">  
    
    
    <!-- right chest line one-->
    <input type="hidden" name="tmp_rightchest1" id="tmp_rightchest1" value="<?php if($tmp_product->rightchest1) echo $tmp_product->rightchest1; ?>">
    <input type="hidden" name="tmp_rightchest_txt_color1" id="tmp_rightchest_txt_color1" value="<?php if($tmp_product->rightchest_txt_color1) echo $tmp_product->rightchest_txt_color1; ?>">
     <input type="hidden" name="tmp_rightchest_txt_type1" id="tmp_rightchest_txt_type1" value="<?php if($tmp_product->rightchest_txt_type1) echo $tmp_product->rightchest_txt_type1; ?>">
       <input type="hidden" name="tmp_rightchest_image" id="tmp_rightchest_image" value="<?php if($tmp_product->rightchest_image) echo $tmp_product->rightchest_image; ?>">
   
     
      <!-- right chest line two-->
    <input type="hidden" name="tmp_rightchest2" id="tmp_rightchest2" value="<?php if($tmp_product->rightchest2) echo $tmp_product->rightchest2; ?>">
    <input type="hidden" name="tmp_rightchest_txt_color2" id="tmp_rightchest_txt_color2" value="<?php if($tmp_product->rightchest_txt_color2) echo $tmp_product->rightchest_txt_color2; ?>">
     <input type="hidden" name="tmp_rightchest_txt_type2" id="tmp_rightchest_txt_type2" value="<?php if($tmp_product->rightchest_txt_type2) echo $tmp_product->rightchest_txt_type2; ?>">
     
     
      <!-- left chest-->
    <input type="hidden" name="tmp_leftchest" id="tmp_leftchest" value="<?php if($tmp_product->leftchest) echo $tmp_product->leftchest; ?>">
    <input type="hidden" name="tmp_leftchest_txt_color" id="tmp_leftchest_txt_color" value="<?php if($tmp_product->leftchest_txt_color) echo $tmp_product->leftchest_txt_color; ?>">
     <input type="hidden" name="tmp_leftchest_txt_type" id="tmp_leftchest_txt_type" value="<?php if($tmp_product->leftchest_txt_type) echo $tmp_product->leftchest_txt_type; ?>">
      <input type="hidden" name="tmp_leftchest_image" id="tmp_leftchest_image" value="<?php if($tmp_product->leftchest_image) echo $tmp_product->leftchest_image; ?>">
    
     
     <!-- right arm line one-->
    <input type="hidden" name="tmp_rightarm1" id="tmp_rightarm1" value="<?php if($tmp_product->right_arm1) echo $tmp_product->right_arm1; ?>">
    <input type="hidden" name="tmp_rightarm_txt_color1" id="tmp_rightarm_txt_color1" value="<?php if($tmp_product->rightarm_txt_color1) echo $tmp_product->rightarm_txt_color1; ?>">
     <input type="hidden" name="tmp_rightarm_txt_type1" id="tmp_rightarm_txt_type1" value="<?php if($tmp_product->rightarm_txt_type1) echo $tmp_product->rightarm_txt_type1; ?>">
    
      <!-- right arm line two-->
    <input type="hidden" name="tmp_rightarm2" id="tmp_rightarm2" value="<?php if($tmp_product->right_arm2) echo $tmp_product->right_arm2; ?>">
    <input type="hidden" name="tmp_rightarm_txt_color2" id="tmp_rightarm_txt_color2" value="<?php if($tmp_product->rightarm_txt_color2) echo $tmp_product->rightarm_txt_color2; ?>">
     <input type="hidden" name="tmp_rightarm_txt_type2" id="tmp_rightarm_txt_type2" value="<?php if($tmp_product->rightarm_txt_type2) echo $tmp_product->rightarm_txt_type2; ?>">
     
     <input type="hidden" name="tmp_rightarm_image" id="tmp_rightarm_image" value="<?php if($tmp_product->rightarm_image) echo $tmp_product->rightarm_image; ?>">
     <input type="hidden" name="tmp_rightarm_image2" id="tmp_rightarm_image2" value="<?php if($tmp_product->rightarm_image2) echo $tmp_product->rightarm_image2; ?>">
    
    
     <!-- left arm line one-->
    <input type="hidden" name="tmp_leftarm1" id="tmp_leftarm1" value="<?php if($tmp_product->left_arm1) echo $tmp_product->left_arm1; ?>">
    <input type="hidden" name="tmp_leftarm_txt_color1" id="tmp_leftarm_txt_color1" value="<?php if($tmp_product->leftarm_txt_color1) echo $tmp_product->leftarm_txt_color1; ?>">
     <input type="hidden" name="tmp_leftarm_txt_type1" id="tmp_leftarm_txt_type1" value="<?php if($tmp_product->leftarm_txt_type1) echo $tmp_product->leftarm_txt_type1; ?>">
    
      <!-- left arm line two-->
    <input type="hidden" name="tmp_leftarm2" id="tmp_leftarm2" value="<?php if($tmp_product->left_arm2) echo $tmp_product->left_arm2; ?>">
    <input type="hidden" name="tmp_leftarm_txt_color2" id="tmp_leftarm_txt_color2" value="<?php if($tmp_product->leftarm_txt_color2) echo $tmp_product->leftarm_txt_color2; ?>">
    <input type="hidden" name="tmp_leftarm_txt_type2" id="tmp_leftarm_txt_type2" value="<?php if($tmp_product->leftarm_txt_type2) echo $tmp_product->leftarm_txt_type2; ?>">
    
     <input type="hidden" name="tmp_leftarm_image" id="tmp_leftarm_image" value="<?php if($tmp_product->leftarm_image) echo $tmp_product->leftarm_image; ?>">
     <input type="hidden" name="tmp_leftarm_image2" id="tmp_leftarm_image2" value="<?php if($tmp_product->leftarm_image2) echo $tmp_product->leftarm_image2; ?>">
    
    
     <!-- back text top-->
    <input type="hidden" name="tmp_back_text" id="tmp_back_text" value="<?php if($tmp_product->back_text) echo $tmp_product->back_text; ?>">
    <input type="hidden" name="tmp_back_text_color" id="tmp_back_text_color" value="<?php if($tmp_product->back_text_color) echo $tmp_product->back_text_color; ?>">
     <input type="hidden" name="tmp_back_text_type" id="tmp_back_text_type" value="<?php if($tmp_product->back_text_type) echo $tmp_product->back_text_type; ?>">
     
     <!-- back text top-->
    <input type="hidden" name="tmp_back_text1" id="tmp_back_text1" value="<?php if($tmp_product->back_text1) echo $tmp_product->back_text1; ?>">
    <input type="hidden" name="tmp_back_text_color1" id="tmp_back_text_color1" value="<?php if($tmp_product->back_text_color1) echo $tmp_product->back_text_color1; ?>">
     <input type="hidden" name="tmp_back_text_type1" id="tmp_back_text_type1" value="<?php if($tmp_product->back_text_type1) echo $tmp_product->back_text_type1; ?>">
     
     <input type="hidden" name="tmp_back_text2" id="tmp_back_text2" value="<?php if($tmp_product->back_text2) echo $tmp_product->back_text2; ?>">
    <input type="hidden" name="tmp_back_text_color2" id="tmp_back_text_color2" value="<?php if($tmp_product->back_text_color2) echo $tmp_product->back_text_color2; ?>">
     <input type="hidden" name="tmp_back_text_type2" id="tmp_back_text_type2" value="<?php if($tmp_product->back_text_type2) echo $tmp_product->back_text_type2; ?>">
     
     
      <input type="hidden" name="tmp_back_image" id="tmp_back_image" value="<?php if($tmp_product->back_image) echo $tmp_product->back_image; ?>">
    
     
</form> 

<?php 
if($_GET['id']){
    $id = $_GET['id'];
    $tmp_product = TmpProduct::model()->findByPk($id);
    
    $cat = Category::model()->findByPk($tmp_product->cat_id)->title;
    $subcat = Subcategory::model()->findByPk($tmp_product->subcat_id)->title;
      $cat_and_sub_path = strtolower($cat) .'/'.strtolower($subcat);
//    echo '<pre>';
//    print_r($tmp_product);die;
}
?>
  <?php if(!isset($tmp_product) or $tmp_product==null){ ?>
     <a href="javascript:void(0)" onclick="alert('please save product first')"  class="btn buy" ><i>buy now</i></a>
     <?php }else{ ?>
<a href="<?php echo Yii::app()->getBaseUrl(true)."/home/checkout/id/$tmp_product->id" ?>"   class="btn buy" ><i>buy now</i></a>
     <?php } ?>
     <?php  if(Yii::app()->user->isGuest){  ?>
     <button class="btn save" type="button" onclick="alert('please login first')"><i>save my jacket</i></button>	  
     <?php }else{ ?>
     <button class="btn save" type="button" id="save-product" ><i>save my jacket</i></button>	  
     <?php } ?>
     
     
<script type="text/javascript" src="<?=Yii::app()->request->baseUrl;?>/js/html2canvas/html2canvas.js"></script>
<script type="text/javascript" src="<?=Yii::app()->request->baseUrl;?>/js/html2canvas/html2canvas.min.js"></script>
<script type="text/javascript" src="<?=Yii::app()->request->baseUrl;?>/js/html2canvas/jquery.plugin.html2canvas.js"></script> 
<script>

function save_div(flag)
{
	html2canvas($('#jacket_div'), {
  onrendered: function(canvas) {

	//canvas.toDataURL("image/png")
    //alert(img);
	//window.open(img);
	 //document.body.appendChild(canvas);
	$.ajax({
                url: '<?=Yii::app()->request->baseUrl?>/classic/captureImage',
                type: 'POST',
                data: { file : canvas.toDataURL("image/png")},
                success: function(data, status){
					//$('body').append("<img src='"+data+"'>");
				//$('#mirror_btn').attr('href','mirror.php?img='+data+'&pro_id=<?=$pro_id?>');	
               // alert("Image Has Been created");
			   //$('#buy_').click();
			   	if(flag=='buy')
				{
			   		window.location='<?=Yii::app()->request->baseUrl?>/home/checkout';
				}
				else
				{
					$('#save_btn_id').click({
                                      //  console.log("hhh");
                                            });
				}
			   
            }
            });
	
	//window.location="mirror.php"

  }
});
}


//$(function(){
$("#save-product").click(function(){

$("#tmp_product").submit();
  }); 
  
$("#tmp_product").submit(function(e){
    e.preventDefault();
    var form_data = $(this).serialize();
    console.log(form_data);
    
        $.ajax({
                url: '<?php echo Yii::app()->createUrl('classic/saveProduct'); ?>',
                type: 'POST',
                //dataType: 'html',
                data: form_data,
                beforeSend: function() {
                },
                success: function(data) {
                    console.log(data);
                    window.location.href="<?php echo Yii::app()->getBaseUrl(true)."/classic/index/id/" ?>"+data;
                   
                },
                error: function(xhr, textStatus, errorThrown) {
                }
            });
});
//    

            
   
 
         
//});

</script>