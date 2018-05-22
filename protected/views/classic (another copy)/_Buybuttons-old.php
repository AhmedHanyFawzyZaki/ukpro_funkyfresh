<form>
	<input type="hidden" name="form_size" id="form_size" value="">
    <input type="hidden" name="form_body" id="form_body" value="default">
    
    <input type="hidden" name="form_sleeves" id="form_sleeves" value="default">
        <input type="hidden" name="form_top_zip" id="form_top_zip" value="default">
    
    <input type="hidden" name="form_buttons" id="form_buttons" value="default">
    
    <input type="hidden" name="form_pockets" id="form_pockets" value="default">
    
    <input type="hidden" name="form_knit" id="form_knit" value="default">
    <input type="hidden" name="form_knit_stripe" id="form_knit_stripe" value="">
    <input type="hidden" name="form_knit_stripe_border" id="form_knit_stripe_border" value="">
    
    <input type="hidden" name="form_left_chest_image" id="form_left_chest_image" value="">
    <input type="hidden" name="form_left_chest_text1" id="form_left_chest_text1" value="">
    <input type="hidden" name="form_left_chest_text_color1" id="form_left_chest_text_color1" value="#FFF">
    <input type="hidden" name="form_left_chest_text_family1" id="form_left_chest_text_family1" value="pro-block">
    <input type="hidden" name="form_left_chest_text_shadow1" id="form_left_chest_text_shadow1">
    
    <input type="hidden" name="form_left_chest_text2" id="form_left_chest_text2" value="">
    <input type="hidden" name="form_left_chest_text_color2" id="form_left_chest_text_color2" value="#FFF">
    <input type="hidden" name="form_left_chest_text_family2" id="form_left_chest_text_family2" value="pro-block">
    <input type="hidden" name="form_left_chest_text_shadow2" id="form_left_chest_text_shadow2">
    
    
    <input type="hidden" name="form_right_chest_image" id="form_right_chest_image" value="">
    <input type="hidden" name="form_right_chest_text" id="form_right_chest_text" value="">
    <input type="hidden" name="form_right_chest_text_color" id="form_right_chest_text_color" value="#FFF">
    <input type="hidden" name="form_right_chest_text_family" id="form_right_chest_text_family" value="pro-block">
    <input type="hidden" name="form_right_chest_text_shadow" id="form_left_chest_text_shadow">
    
    <input type="hidden" name="form_left_arm_image1" id="form_left_arm_image1">
    <input type="hidden" name="form_left_arm_text1" id="form_left_arm_text1" value="">
    <input type="hidden" name="form_left_arm_text_color1" id="form_left_arm_text_color1" value="#FFF">
    <input type="hidden" name="form_left_arm_text_family1" id="form_left_arm_text_family1" value="pro-block">
    <input type="hidden" name="form_left_arm_text_shadow1" id="form_left_arm_text_shadow1">
    
    <input type="hidden" name="form_left_arm_image2" id="form_left_arm_image2">
    <input type="hidden" name="form_left_arm_text2" id="form_left_arm_text2" value="">
    <input type="hidden" name="form_left_arm_text_color2" id="form_left_arm_text_color2" value="#FFF">
    <input type="hidden" name="form_left_arm_text_family2" id="form_left_arm_text_family2" value="Times New Roman">
    <input type="hidden" name="form_left_arm_text_shadow2" id="form_left_arm_text_shadow2">
    
    <input type="hidden" name="form_right_arm_image1" id="form_right_arm_image1">
    <input type="hidden" name="form_right_arm_text1" id="form_right_arm_text1" value="">
    <input type="hidden" name="form_right_arm_text_color1" id="form_right_arm_text_color1" value="#FFF">
    <input type="hidden" name="form_right_arm_text_family1" id="form_right_arm_text_family1" value="Times New Roman">
    <input type="hidden" name="form_right_arm_text_shadow1" id="form_right_arm_text_shadow1">
    <input type="hidden" name="form_right_arm_image2" id="form_right_arm_image2">
    <input type="hidden" name="form_right_arm_text2" id="form_right_arm_text2" value="">
    <input type="hidden" name="form_right_arm_text_color2" id="form_right_arm_text_color2" value="#FFF">
    <input type="hidden" name="form_right_arm_text_family2" id="form_right_arm_text_family2" value="Times New Roman">
    <input type="hidden" name="form_right_arm_text_shadow2" id="form_right_arm_text_shadow2">
    
    <input type="hidden" name="form_back_img" id="form_back_img">
    <input type="hidden" name="form_back_text" id="form_back_text">
    <input type="hidden" name="form_back_text_family" id="form_back_text_family">
    <input type="hidden" name="form_back_text_type" id="form_back_text_type">
    <input type="hidden" name="form_back_text_color" id="form_back_text_color">
    <input type="hidden" name="form_back_text_shadow" id="form_back_text_shadow">
    
    <input type="hidden" name="form_sub_tail_color" id="form_sub_tail_color">
    <input type="hidden" name="form_sub_tail" id="form_sub_tail">
    
    <input type="hidden" name="form_back_text1" id="form_back_text1">
    <input type="hidden" name="form_back_text_family1" id="form_back_text_family1">
    <input type="hidden" name="form_back_text_color1" id="form_back_text_color1">
    <input type="hidden" name="form_back_text_shadow1" id="form_back_text_shadow1">
    
    <input type="hidden" name="form_back_text2" id="form_back_text2">
    <input type="hidden" name="form_back_text_family2" id="form_back_text_family2">
    <input type="hidden" name="form_back_text_color2" id="form_back_text_color2">
    <input type="hidden" name="form_back_text_shadow2" id="form_back_text_shadow2">
</form>

  
     <a href="javascript:void(0)" onclick="save_div('buy')"  class="btn buy" ><i>buy now</i></a>
     
     <?php 
	  if(Yii::app()->user->isGuest){ 
	  ?>
<!--	   <a href="<?php echo Yii::app()->getBaseUrl(true); ?>#loginModal" role="button" data-toggle="modal" class="btn save" >
       <i>save my jacket</i>
       </a>-->
 	    <button class="btn save" type="button" onclick="alert('please login first')"><i>save my jacket</i></button>	  

	  <?
	  }else{
		  echo '<button class="btn save" type="button" onclick="save_div(\'save\')"><i>save my jacket</i></button>';
	
	echo CHtml::ajaxLink(
  "save my jacket",
  Yii::app()->createUrl( 'classic/savejacket' ),
  array( // ajaxOptions
    'type' =>'POST',
    'beforeSend' => "function( request )
                     {
                       // Set up any pre-sending stuff like initializing progress indicators
                     }",
    'success' => "function( data )
                  {
                    // handle return data
			       // document.getElementById('body').src='$path';
			      	alert('saved');
                  }",
     'data' => array( 'type' => 'classic','cat_id'=>'1','subcat_id'=>'1', )
  ),
  array( //htmlOptions
    'href' => Yii::app()->createUrl( 'classic/savejacket' ),
    'class' =>'btn save',
	'style'=>'display:none;',
	'id'=>'save_btn_id',
	
  )
);
	
		  }
	 ?>
	 
     
     
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

</script>