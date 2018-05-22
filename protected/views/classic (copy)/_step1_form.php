<?php  // set the page title
$this->pageTitle=Yii::app()->name . ' - Build jacket';
?>

<div class="wrapper">
    <h3 class="main-title margin0px">Design Process</h3>
    <div class="container margin0px">
        <div class="rev-left" id="index">
            <h4>body type</h4>
            <h5 class="title8">choose your body type</h5>
            
            <div class="colors">
                <select>
                	<option>Cotton</option>
                	<option>Leather</option>
                </select>
            </div>
            
            <div class="row1">
            	<a href="javascript:void(0)" onclick="change_left('index','step1')" class="btn next" >next</a>
            </div>
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" id="step1" style="display:none;">
            <h4>body color</h4>
            <h5 class="title8">choose your body color</h5>
            
            <div class="colors">
				<?php
                foreach ($products  as $product)
                {
                    $color=$product->code;
                    $color_code=$product->color;
                    $path=Yii::app()->getBaseUrl(true).'/media/types/classic/classic1/'.$color .'/body.png';
					echo '<span class="btn round" style="background:'.$color_code.'" onclick=" document.getElementById(\'body\').src=\''.$path.'\'; document.getElementById(\'form_body\').value=\''.$path.'\';"></span>';
                }
                ?>
            </div>
            
            <div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step1','step2')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step1','index')" class="btn bk" >previous</a>
            </div>
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" style="display:none;" id="step2">
            <h4>Sleeves color</h4>
            <h5 class="title8">choose your Sleeves color</h5>
            
            <div class="colors">
                <?php
                foreach ($products  as $product)
                {
                    $color=$product->code;
                    $color_code=$product->color;
                    $path=Yii::app()->getBaseUrl(true).'/media/types/classic/classic1/'.$color .'/front-sleeves.png';
					echo '<span class="btn round" style="background:'.$color_code.'" onclick=" document.getElementById(\'sleeves\').src=\''.$path.'\'; document.getElementById(\'form_front_sleeves\').value=\''.$path.'\';"></span>';
                }
                ?>
            </div>
            
            <div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step2','step3')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step2','step1')" class="btn bk" >previous</a>
            </div>
            
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/>
        </div>
        <div class="rev-left" id="step3" style="display:none;">
            <h4>Buttons color</h4>
            <h5 class="title8">choose your buttons color</h5>
            
            <div class="colors">
                <?php
                foreach ($products  as $product)
                {
					$color=$product->code;
                    $color_code=$product->color;
                    $path=Yii::app()->getBaseUrl(true).'/media/types/classic/classic1/'.$color .'/buttons.png';
					echo '<span class="btn round" style="background:'.$color_code.'" onclick=" document.getElementById(\'buttons\').src=\''.$path.'\'; document.getElementById(\'form_buttons\').value=\''.$path.'\';"></span>';
				}
                ?>
            </div>
        
            <div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step3','step4')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step3','step2')" class="btn bk" >previous</a>
            </div>
            
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" id="step4" style="display:none;">
            <h4>Pockets color</h4>
            <h5 class="title8">choose your Pockets color</h5>
            
            <div class="colors">
                <?php
                foreach ($products  as $product)
                {
                    $color=$product->code;
                    $color_code=$product->color;
                    $path=Yii::app()->getBaseUrl(true).'/media/types/classic/classic1/'.$color .'/pockets.png';
					echo '<span class="btn round" style="background:'.$color_code.'" onclick=" document.getElementById(\'pockets\').src=\''.$path.'\'; document.getElementById(\'form_pockets\').value=\''.$path.'\';"></span>';
                }
                ?>
            </div>
            
            <div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step4','step5')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step4','step3')" class="btn bk" >previous</a>
            </div>
            
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" style="display:none;" id="step5">
            <h4>Knit Pattern</h4>
            <h5 class="title8">Inner Color :</h5>
            
            <div class="colors">
                <?
                foreach ($products  as $product)
                {
                   $color=$product->code;
                    $color_code=$product->color;
                    $path=Yii::app()->getBaseUrl(true).'/media/types/classic/classic1/'.$color .'/knit.png';
					echo '<span class="btn round" style="background:'.$color_code.'" onclick=" document.getElementById(\'knit\').src=\''.$path.'\'; document.getElementById(\'form_knit\').value=\''.$path.'\';document.getElementById(\'knit_stripe\').innerHTML=\'\';document.getElementById(\'form_knit_stripe\').value=\'\';document.getElementById(\'knit_stripe_border\').innerHTML=\'\';document.getElementById(\'form_knit_stripe_border\').value=\'\';document.getElementById(\'knit_border_selection\').style.display=\'none\';"></span>';
                }
                ?>
                <h5 class="title8">Single stripe:</h5>
                <?
                    echo Stripe::getStripes('1');
                ?>
                <h5 class="title8">Double Stripes:</h5>
                <?
                    echo Stripe::getStripes('2');
                ?>
                <div id="knit_border_selection" style="display:none;">
                    <h5 class="title8">Stripe Border:</h5>
                    <?
                        echo StripeBorder::getStripesBorder();
                    ?>
                </div>
            </div>
            
            <div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step5','step6')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step5','step4')" class="btn bk" >previous</a>
            </div>
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" style="display:none;" id="step6">
            <h4>Chest Design </h4>
            <h5 class="title8">choose right chest shape :</h5>
            
            <div class="shape-type">
				<?
                ob_start();
                $this->widget('ext.EAjaxUpload.EAjaxUpload',
					array(
					'id'=>'uploadFile',
					'config'=>array(
						'action'=>Yii::app()->createUrl('classic/upload'),
						'allowedExtensions'=>array("jpg","jpeg","png"),
						'sizeLimit'=>10*1024*1024,// maximum file size in bytes
						'minSizeLimit'=>2,// minimum file size in bytes
						'onComplete'=>"js:function(id, fileName, responseJSON){
							if(!responseJSON['error'])
							{
								document.getElementById('left-chest-id').innerHTML='<img src=\'".Yii::app()->getBaseUrl(true)."/upload/'+fileName+'?nocache='+Math.random()+'\'>';
								document.getElementById('form_left_chest_image').value='".Yii::app()->getBaseUrl(true)."/upload/'+fileName+'?nocache='+Math.random();											                                document.getElementById('left_text_id1').innerHTML='';
								document.getElementById('chest_left_txt_id1').value='';
								document.getElementById('form_left_chest_text1').value='';
								document.getElementById('form_left_chest_text_color1').value='';
								document.getElementById('form_left_chest_text_family1').value='';
								document.getElementById('left_text_id2').innerHTML='';
								document.getElementById('form_left_chest_text2').value='';
								document.getElementById('form_left_chest_text_color2').value='';
								document.getElementById('form_left_chest_text_family2').value='';
								document.getElementById('chest_left_txt_id2').value='';
							}
						}",
						)
					)
				);
                $image_widget = ob_get_contents();
                ob_end_clean();
                
                $this->widget('zii.widgets.jui.CJuiTabs',array(
                //'activeTab'=>'tab1',
                'tabs'=>array(
					'Letters'=>'
					<div class="control-group" style="height:195px;">
					<label class="control-label proc">Choose your letters (Line1):</label>
					<input type="text" maxlength="10" value="" onkeyup="change_txt(this.value,\'1\')" id="chest_left_txt_id1">
					<label class="control-label letters" for="inputEmail">Letter Style:</label>
					<select class="letter-select" onchange="change_txt_family(this.value,\'1\')">
					<option value=\'Georgia,Times New Roman,Times,serif\'>Times New Roman</option>
					<option value=\'vintage\'>Vintage</option>
					<option value=\'oldenglishnormal\'>Old English</option>
					<option value=\'pro-block\'>Pro Block</option>
					<option value=\'Athletic Block\'>Athletic Block</option>
					</select>
					<label class="control-label letters" for="inputEmail">Letter Color:</label>
					<div class="colors">
					'.Color::getColorsLinks("1").'
					</div>
					</div>
					
					<div class="control-group" style="height:195px;">
					<label class="control-label proc" for="inputEmail">Choose your letters (Line2):</label>
					<input type="text" maxlength="10" value="" onkeyup="change_txt(this.value,\'2\')" id="chest_left_txt_id2">
					<label class="control-label letters" for="inputEmail">Letter Style:</label>
					<select class="letter-select" onchange="change_txt_family(this.value,\'2\')">
					<option value=\'Georgia,Times New Roman,Times,serif\'>Times New Roman</option>
					<option value=\'vintage\'>Vintage</option>
					<option value=\'oldenglishnormal\'>Old English</option>
					<option value=\'pro-block\'>Pro Block</option>
					<option value=\'Athletic Block\'>Athletic Block</option>
					</select>
					<label class="control-label letters" for="inputEmail">Letter Color:</label>
					<div class="colors">
					'.Color::getColorsLinks("2").'
					</div>
					</div>
					',
					'Image'=>array('content'=>$image_widget),
                ),
                'options'=>array(
					'collapsible'=>true,
					'selected'=>'none',
                ),
                'htmlOptions'=>array(
                	//'style'=>'width:500px;'
                )
                ));
                ?>
            </div>
            
            <div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step6','step7')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step6','step5')" class="btn bk" >previous</a>
            </div>
            
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" id="step7" style="display:none;">
            <h4>Chest Design </h4>
            <h5 class="title8">choose left chest shape :</h5>
            
            <div class="shape-type">
				<?
                ob_start();
                $this->widget('ext.EAjaxUpload.EAjaxUpload',
                array(
					'id'=>'uploadFile1',
					'config'=>array(
						'action'=>Yii::app()->createUrl('classic/upload'),
						'allowedExtensions'=>array("jpg","jpeg","png","gif"),
						'sizeLimit'=>10*1024*1024,// maximum file size in bytes
						'minSizeLimit'=>2,// minimum file size in bytes
						'onComplete'=>"js:function(id, fileName, responseJSON){
							if(!responseJSON['error'])
							{
								document.getElementById('right-chest-id').innerHTML='<img src=\'".Yii::app()->getBaseUrl(true)."/upload/'+fileName+'?nocache='+Math.random()+'\'>';
								document.getElementById('form_right_chest_image').value='".Yii::app()->getBaseUrl(true)."/upload/'+fileName+'?nocache='+Math.random();
								document.getElementById('r-1').innerHTML='';
								document.getElementById('r-2').innerHTML='';
								document.getElementById('r-3').innerHTML='';
								document.getElementById('chest_right_txt_id').value='';
								document.getElementById('form_right_chest_text').value='';
								document.getElementById('form_right_chest_text_color').value='';
								document.getElementById('form_right_chest_text_family').value='';
							}
						}",
					)
                ));
                $image_widget1 = ob_get_contents();
                ob_end_clean();
                
                $this->widget('zii.widgets.jui.CJuiTabs',array(
                //'activeTab'=>'tab1',
                'tabs'=>array(
					'Letters'=>'
					<div class="control-group" style="height:195px;">
					<label class="control-label proc" for="inputEmail">Choose your letters:</label>
					<input type="text" maxlength="3" onkeyup="change_txt1(this.value)" id="chest_right_txt_id">
					<label class="control-label letters" for="inputEmail">Letter Style:</label>
					<select class="letter-select" onchange="change_txt_family1(this.value)">
					<option value=\'Georgia,Times New Roman,Times,serif\'>Times New Roman</option>
					<option value=\'vintage\'>Vintage</option>
					<option value=\'oldenglishnormal\'>Old English</option>
					<option value=\'pro-block\'>Pro Block</option>
					<option value=\'Athletic Block\'>Athletic Block</option>
					</select>
					<label class="control-label letters" for="inputEmail">Letter Color:</label>
					<div class="colors">
					'.Color::getColorsLinks1().'
					</div>
					</div>
					',
					'Image'=>array('content'=>$image_widget1),
                ),
                'options'=>array(
					'collapsible'=>true,
					'selected'=>'none',
                ),
                'htmlOptions'=>array(
                	//'style'=>'width:500px;'
                )
                ));
                ?>
            </div>
            
            <div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step7','step8')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step7','step6')" class="btn bk" >previous</a>
            </div>
            
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" id="step8" style="display:none;">
            <h4>Arm Pattern</h4>
            <h5 class="title8">choose Left Arm shape</h5>  
            <h6 class="title8">Line 1:</h6> 
            <div class="shape-type">
                <?
                ob_start();
                $this->widget('ext.EAjaxUpload.EAjaxUpload',
                array(
                    'id'=>'uploadFile2',
                    'config'=>array(
                    'action'=>Yii::app()->createUrl('classic/upload'),
                    'allowedExtensions'=>array("jpg","jpeg","png"),
                    'sizeLimit'=>10*1024*1024,// maximum file size in bytes
                    'minSizeLimit'=>2,// minimum file size in bytes
                    'onComplete'=>"js:function(id, fileName, responseJSON){
						if(!responseJSON['error'])
						{
							document.getElementById('left-arm-id1').innerHTML='<img src=\'".Yii::app()->getBaseUrl(true)."/upload/'+fileName+'?nocache='+Math.random()+'\'>';
							document.getElementById('form_left_arm_image1').value='".Yii::app()->getBaseUrl(true)."/upload/'+fileName+'?nocache='+Math.random();
							document.getElementById('leftarm_text_id1').innerHTML='';
							document.getElementById('arm_left_txt_id1').value='';
							document.getElementById('form_left_arm_text1').value='';
							document.getElementById('form_left_arm_text_color1').value='';
							document.getElementById('form_left_arm_text_family1').value='';
						}
                    }",
                )
                ));
                $image_widget2 = ob_get_contents();
                ob_end_clean();
                
                $this->widget('zii.widgets.jui.CJuiTabs',array(
                //'activeTab'=>'tab1',
                'tabs'=>array(
                    'Letters'=>'
                    <div class="control-group" style="height:195px;">
                        <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                        <input type="text" maxlength="2" onkeyup="change_txt_leftside(this.value,\'1\')" id="arm_left_txt_id1">
                        <label class="control-label letters" for="inputEmail">Letter Style:</label>
                        <select class="letter-select" onchange="change_txt_family_leftside(this.value,\'1\')">
                        <option value=\'Georgia,Times New Roman,Times,serif\'>Times New Roman</option>
                        <option value=\'vintage\'>Vintage</option>
                        <option value=\'oldenglishnormal\'>Old English</option>
                        <option value=\'pro-block\'>Pro Block</option>
                        <option value=\'Athletic Block\'>Athletic Block</option>
                        </select>
                        <label class="control-label letters" for="inputEmail">Letter Color:</label>
                        <div class="colors">
                        '.Color::getColorsLinksLeftSide("1").'
                        </div>
                    </div>
                    ',
                    'Image'=>array('content'=>$image_widget2),
                ),
                'options'=>array(
                    'collapsible'=>true,
                    'selected'=>'none',
                ),
                'htmlOptions'=>array(
                    //'style'=>'width:500px;'
                )
                ));
                ?>
            </div>
            <!---------------------------------------------------------------------------->
            <h6 class="title8">Line 2:</h6>
            <div class="shape-type">
                <?
                ob_start();
                $this->widget('ext.EAjaxUpload.EAjaxUpload',
                array(
                    'id'=>'uploadFile3',
                    'config'=>array(
                    'action'=>Yii::app()->createUrl('classic/upload'),
                    'allowedExtensions'=>array("jpg","jpeg","png"),
                    'sizeLimit'=>10*1024*1024,// maximum file size in bytes
                    'minSizeLimit'=>2,// minimum file size in bytes
                    'onComplete'=>"js:function(id, fileName, responseJSON){
						if(!responseJSON['error'])
						{
							document.getElementById('left-arm-id2').innerHTML='<img src=\'".Yii::app()->getBaseUrl(true)."/upload/'+fileName+'?nocache='+Math.random()+'\'>';
							document.getElementById('form_left_arm_image2').value='".Yii::app()->getBaseUrl(true)."/upload/'+fileName+'?nocache='+Math.random();
							document.getElementById('leftarm_text_id2').innerHTML='';
							document.getElementById('arm_left_txt_id2').value='';
							document.getElementById('form_left_arm_text2').value='';
							document.getElementById('form_left_arm_text_color2').value='';
							document.getElementById('form_left_arm_text_family2').value='';
						}
                    }",
                )
                ));
                $image_widget3 = ob_get_contents();
                ob_end_clean();
                
                $this->widget('zii.widgets.jui.CJuiTabs',array(
                //'activeTab'=>'tab1',
                'tabs'=>array(
                    'Letters'=>'
                    <div class="control-group" style="height:195px;">
                        <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                        <input type="text" maxlength="2" onkeyup="change_txt_leftside(this.value,\'2\')" id="arm_left_txt_id2">
                        <label class="control-label letters" for="inputEmail">Letter Style:</label>
                        <select class="letter-select" onchange="change_txt_family_leftside(this.value,\'2\')">
                        <option value=\'Georgia,Times New Roman,Times,serif\'>Times New Roman</option>
                        <option value=\'vintage\'>Vintage</option>
                        <option value=\'oldenglishnormal\'>Old English</option>
                        <option value=\'pro-block\'>Pro Block</option>
                        <option value=\'Athletic Block\'>Athletic Block</option>
                        </select>
                        <label class="control-label letters" for="inputEmail">Letter Color:</label>
                        <div class="colors">
                        '.Color::getColorsLinksLeftSide("2").'
                        </div>
                    </div>
                    ',
                    'Image'=>array('content'=>$image_widget3),
                ),
                'options'=>array(
                    'collapsible'=>true,
                    'selected'=>'none',
                ),
                'htmlOptions'=>array(
                    //'style'=>'width:500px;'
                )
                ));
                ?>
            </div>
            
            <div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step8','step9')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step8','step7')" class="btn bk" >previous</a>
            </div>
            
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/>
        </div>
        <div class="rev-left" id="step9" style="display:none;">
            <h4>Arm Pattern</h4>
            <h5 class="title8">choose Right Arm shape</h5>  
            <h6 class="title8">Line 1:</h6> 
            <div class="shape-type">
                <?
                ob_start();
                $this->widget('ext.EAjaxUpload.EAjaxUpload',
                array(
                    'id'=>'uploadFile4',
                    'config'=>array(
                    'action'=>Yii::app()->createUrl('classic/upload'),
                    'allowedExtensions'=>array("jpg","jpeg","png"),
                    'sizeLimit'=>10*1024*1024,// maximum file size in bytes
                    'minSizeLimit'=>2,// minimum file size in bytes
                    'onComplete'=>"js:function(id, fileName, responseJSON){
						if(!responseJSON['error'])
						{
							document.getElementById('right-arm-id1').innerHTML='<img src=\'".Yii::app()->getBaseUrl(true)."/upload/'+fileName+'?nocache='+Math.random()+'\'>';
							document.getElementById('form_right_arm_image1').value='".Yii::app()->getBaseUrl(true)."/upload/'+fileName+'?nocache='+Math.random();
							document.getElementById('rightarm_text_id1').innerHTML='';
							document.getElementById('arm_right_txt_id1').value='';
							document.getElementById('form_right_arm_text1').value='';
							document.getElementById('form_right_arm_text_color1').value='';
							document.getElementById('form_right_arm_text_family1').value='';
						}
                    }",
                )
                ));
                $image_widget4 = ob_get_contents();
                ob_end_clean();
                
                $this->widget('zii.widgets.jui.CJuiTabs',array(
                //'activeTab'=>'tab1',
                'tabs'=>array(
                    'Letters'=>'
                    <div class="control-group" style="height:195px;">
                        <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                        <input type="text" maxlength="2" onkeyup="change_txt_rightside(this.value,\'1\')" id="arm_right_txt_id1">
                        <label class="control-label letters" for="inputEmail">Letter Style:</label>
                        <select class="letter-select" onchange="change_txt_family_rightside(this.value,\'1\')">
                        <option value=\'Georgia,Times New Roman,Times,serif\'>Times New Roman</option>
                        <option value=\'vintage\'>Vintage</option>
                        <option value=\'oldenglishnormal\'>Old English</option>
                        <option value=\'pro-block\'>Pro Block</option>
                        <option value=\'Athletic Block\'>Athletic Block</option>
                        </select>
                        <label class="control-label letters" for="inputEmail">Letter Color:</label>
                        <div class="colors">
                        '.Color::getColorsLinksRightSide("1").'
                        </div>
                    </div>
                    ',
                    'Image'=>array('content'=>$image_widget4),
                ),
                'options'=>array(
                    'collapsible'=>true,
                    'selected'=>'none',
                ),
                'htmlOptions'=>array(
                    //'style'=>'width:500px;'
                )
                ));
                ?>
            </div>
            <!---------------------------------------------------------------------------->
            <h6 class="title8">Line 2:</h6>
            <div class="shape-type">
                <?
                ob_start();
                $this->widget('ext.EAjaxUpload.EAjaxUpload',
                array(
                    'id'=>'uploadFile5',
                    'config'=>array(
                    'action'=>Yii::app()->createUrl('classic/upload'),
                    'allowedExtensions'=>array("jpg","jpeg","png"),
                    'sizeLimit'=>10*1024*1024,// maximum file size in bytes
                    'minSizeLimit'=>2,// minimum file size in bytes
                    'onComplete'=>"js:function(id, fileName, responseJSON){
						if(!responseJSON['error'])
						{
							document.getElementById('right-arm-id2').innerHTML='<img src=\'".Yii::app()->getBaseUrl(true)."/upload/'+fileName+'?nocache='+Math.random()+'\'>';
							document.getElementById('form_right_arm_image2').value='".Yii::app()->getBaseUrl(true)."/upload/'+fileName+'?nocache='+Math.random();
							document.getElementById('rightarm_text_id2').innerHTML='';
							document.getElementById('arm_right_txt_id2').value='';
							document.getElementById('form_right_arm_text2').value='';
							document.getElementById('form_right_arm_text_color2').value='';
							document.getElementById('form_right_arm_text_family2').value='';
						}
                    }",
                )
                ));
                $image_widget5 = ob_get_contents();
                ob_end_clean();
                
                $this->widget('zii.widgets.jui.CJuiTabs',array(
                //'activeTab'=>'tab1',
                'tabs'=>array(
                    'Letters'=>'
                    <div class="control-group" style="height:195px;">
                        <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                        <input type="text" maxlength="2" onkeyup="change_txt_rightside(this.value,\'2\')" id="arm_right_txt_id2">
                        <label class="control-label letters" for="inputEmail">Letter Style:</label>
                        <select class="letter-select" onchange="change_txt_family_rightside(this.value,\'2\')">
                        <option value=\'Georgia,Times New Roman,Times,serif\'>Times New Roman</option>
                        <option value=\'vintage\'>Vintage</option>
                        <option value=\'oldenglishnormal\'>Old English</option>
                        <option value=\'pro-block\'>Pro Block</option>
                        <option value=\'Athletic Block\'>Athletic Block</option>
                        </select>
                        <label class="control-label letters" for="inputEmail">Letter Color:</label>
                        <div class="colors">
                        '.Color::getColorsLinksRightSide("2").'
                        </div>
                    </div>
                    ',
                    'Image'=>array('content'=>$image_widget5),
                ),
                'options'=>array(
                    'collapsible'=>true,
                    'selected'=>'none',
                ),
                'htmlOptions'=>array(
                    //'style'=>'width:500px;'
                )
                ));
                ?>
            </div>
            
            <div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step9','step10')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step9','step8')" class="btn bk" >previous</a>
            </div>
            
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/>
        </div>
        <div class="rev-left" id="step10" style="display:none;">
            <h4>Back Pattern</h4>
            <h5 class="title8">choose back :</h5>
            
            <div class="shape-type">
            <?
            ob_start();
            $this->widget('ext.EAjaxUpload.EAjaxUpload',
			array(
					'id'=>'uploadFile6',
					'config'=>array(
						   'action'=>Yii::app()->createUrl('classic/upload'),
						   'allowedExtensions'=>array("jpg","jpeg","png","gif"),
						   'sizeLimit'=>10*1024*1024,// maximum file size in bytes
						   'minSizeLimit'=>2,// minimum file size in bytes
						   'onComplete'=>"js:function(id, fileName, responseJSON){
							   document.getElementById('back_img_id').innerHTML='<img class=\'patchimg\' src=\'".Yii::app()->getBaseUrl(true)."/upload/'+fileName+'?nocache='+Math.random()+'\'>';
							   }",
						  )
			));
            $image_widget6 = ob_get_contents();
            ob_end_clean();
            
            $this->widget('zii.widgets.jui.CJuiTabs',array(
                //'activeTab'=>'tab1',
                'tabs'=>array(
                    'Letters'=>'
                    <div class="control-group" style="height:370px;">
                      <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                        <input type="text" maxlength="16" onkeyup="change_txt_back(this.value,\'letter\')" id="letters_id">
                      <label class="control-label letters" for="inputEmail">Letter Style:</label>
                        <select class="letter-select" onchange="change_txt_family_back(this.value)">
                          <option value=\'Times New Roman,Times,serif\'>Times New Roman</option>
                          <option value=\'vintage\'>Vintage</option>
                          <option value=\'oldenglishnormal\'>Old English</option>
                          <option value=\'pro-block\'>Pro Block</option>
                          <option value=\'Athletic Block\'>Athletic Block</option>
                        </select>
                      <label class="control-label letters" for="inputEmail">Inner Color:</label>
                      <div class="colors">
                         '.Color::getColorsLinksBack().'
                      </div>
                      <label class="control-label letters" for="inputEmail">Outer Color:</label>

                      <div class="colors">
                         '.Color::getColorsLinksBack1().'
                      </div>
                    </div>
                    ',
                    'Patch'=>array('content'=>$image_widget6),
                    /*'Letters and patch'=>'',*/
                    'Tail'=>'<div class="control-group" style="height:500px;">
                      <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                        <input type="text" maxlength="16" onkeyup="change_txt_back(this.value,\'tail\')" id="tail_id">
                      <!--<label class="control-label letters" for="inputEmail">Letter Style:</label>
                        <select class="letter-select" onchange="change_txt_shadow(this.value)">
                          <option value=\'one\'>One color</option>
                          <option value=\'two\'>Two colors</option>
                        </select>-->
                      <label class="control-label letters" for="inputEmail">Inner Color:</label>
                      <div class="colors">
                         '.Color::getColorsLinksBack().'
                      </div>
                      <label class="control-label letters" for="inputEmail">Outer Color:</label>
                      <div class="colors">
                         '.Color::getColorsLinksBack1().'
                      </div>
                    </div>',
                ),
                 'options'=>array(
                    'collapsible'=>true,
                    'selected'=>'none',
                ),
                'htmlOptions'=>array(
                    //'style'=>'width:500px;'
                )
            ));
            ?>
            </div>
            
            <div class="row1">
                <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/checkout" class="btn bk"  >buy now</a>
                <a href="javascript:void(0)" onclick="change_left('step10','step9')" class="btn bk" >previous</a>
            </div>
            
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        
        <div id="front_jacket">
        	<?php echo $this->renderPartial('_jacket',array()); ?>
        </div>
        <div id="left_jacket" style="display:none;">
        	<?php echo $this->renderPartial('_jacketsideleft',array()); ?>
        </div>
        <div id="right_jacket" style="display:none;">
        	<?php echo $this->renderPartial('_jacketsideright',array()); ?>
        </div>
        <div id="back_jacket" style="display:none;">
        	<?php echo $this->renderPartial('_jacketback',array()); ?>
        </div>
        
        <div class="rev-button">
        	<?php echo $this->renderPartial('_Buybuttons',array()); ?>
        </div>
    
    </div>
    <!--end container--> 
</div>
<!--end wrapper--> 
<script>
function change_left(from,to)
{
	document.getElementById(from).style.display='none';
	document.getElementById(to).style.display='block';
	if(from=='step7' && to=='step8')
	{
		//alert("from7to8");
		document.getElementById('front_jacket').style.display='none';
		document.getElementById('left_jacket').style.display='block';
	}
	if(from=='step8' && to=='step7')
	{
		document.getElementById('front_jacket').style.display='block';
		document.getElementById('left_jacket').style.display='none';
	}
	if(from=='step8' && to=='step9')
	{
		//alert("from7to8");
		document.getElementById('left_jacket').style.display='none';
		document.getElementById('right_jacket').style.display='block';
	}
	if(from=='step9' && to=='step8')
	{
		document.getElementById('left_jacket').style.display='block';
		document.getElementById('right_jacket').style.display='none';
	}
	if(from=='step9' && to=='step10')
	{
		//alert("from7to8");
		document.getElementById('right_jacket').style.display='none';
		document.getElementById('back_jacket').style.display='block';
	}
	if(from=='step10' && to=='step9')
	{
		document.getElementById('right_jacket').style.display='block';
		document.getElementById('back_jacket').style.display='none';
	}
	
}
</script>
<script>
function change_stripe(value,type)
{
	
	document.getElementById('knit_stripe').innerHTML='<img src="<?=Yii::app()->getBaseUrl(true)?>/media/stripes/'+value+'">';
	document.getElementById('form_knit_stripe').value='<?=Yii::app()->getBaseUrl(true)?>/media/stripes/'+value;
	
	if(type=='1')
	{
		change_stripe_border('');
		document.getElementById('knit_border_selection').style.display="none";
	}
	else
	{
		document.getElementById('knit_border_selection').style.display="block";
	}
}
</script>
<script>
function change_stripe_border(value)
{
	document.getElementById('knit_stripe_border').innerHTML='<img src="<?=Yii::app()->getBaseUrl(true)?>/media/stripeborder/'+value+'">';
	if(value!='')
	{
		document.getElementById('form_knit_stripe_border').value='<?=Yii::app()->getBaseUrl(true)?>/media/stripes/'+value;
	}
	else
	{
		document.getElementById('form_knit_stripe_border').value='';
	}
}
</script>

<!---------- step 6 left chest----------->

<script>
function change_txt(value,flag)
{
	document.getElementById('left_text_id'+flag).innerHTML=value;
	document.getElementById('form_left_chest_text'+flag).value=value;
	document.getElementById('left-chest-id').innerHTML=' ';
}
</script>
<script>
function change_txt_family(family,flag)
{
	document.getElementById('left_text_id'+flag).style.fontFamily=family;
	document.getElementById('form_left_chest_text_family'+flag).value=family;
	if(family=='vintage')
	{
		document.getElementById('left_text_id'+flag).style.fontSize="26px";
	}
	else
	{
		document.getElementById('left_text_id'+flag).style.fontSize="14px";
	}
}
</script>
<script>
function change_txt_color(value,flag)
{
	document.getElementById('left_text_id'+flag).style.color=value;
	document.getElementById('form_left_chest_text_color'+flag).value=value;
}
</script>
<!----------------end step 6 left chest--------------->

<!----------------step 7 right chest--------------->
<script>
function change_txt1(value)
{
	document.getElementById('right-chest-id').innerHTML=' ';
	document.getElementById('form_right_chest_image').value='';
	if(value[0])
	{
		document.getElementById('r-1').innerHTML=value[0];
		document.getElementById('r-1').style.fontSize="100px";
	}
	else
	{
		document.getElementById('r-1').innerHTML='';
	}
	if(value[1])
	{
		document.getElementById('r-2').innerHTML=value[1];
		document.getElementById('r-1').style.fontSize="60px";
		document.getElementById('r-2').style.fontSize="60px";
	}
	else
	{
		document.getElementById('r-2').innerHTML='';
	}
	if(value[2])
	{
		document.getElementById('r-3').innerHTML=value[2];
		document.getElementById('r-1').style.fontSize="40px";
		document.getElementById('r-2').style.fontSize="40px";
		document.getElementById('r-3').style.fontSize="40px";
	}
	else
	{
		document.getElementById('r-3').innerHTML='';
	}
	document.getElementById('form_right_chest_text').value=value;
	
}
</script>
<script>
function change_txt_family1(value)
{
	document.getElementById('right_text_id').style.fontFamily=value;
	document.getElementById('form_right_chest_text_family').value=value;
}
</script>
<script>
function change_txt_color1(value)
{
	document.getElementById('right_text_id').style.color=value;
	document.getElementById('form_right_chest_text_color').value=value;
}
</script>
<!----------------end step 7 right chest--------------->

<!----------------step 8 left ARM--------------->

<script>
function change_txt_leftside(value,flag)
{
	document.getElementById('left-arm-id'+flag).innerHTML=' ';
	document.getElementById('leftarm_text_id'+flag).innerHTML=value;
	document.getElementById('form_left_arm_text'+flag).value=value;
	document.getElementById('form_left_arm_image'+flag).value='';
}
</script>
<script>
function change_txt_family_leftside(value,flag)
{
	document.getElementById('leftarm_text_id'+flag).style.fontFamily=value;
	document.getElementById('form_left_arm_text_family'+flag).value=value;
}
</script>
<script>
function change_txt_color_leftside(value,flag)
{
	document.getElementById('leftarm_text_id'+flag).style.color=value;
	document.getElementById('form_left_arm_text_color'+flag).value=value;
}
</script>
<!----------------end step 8 left ARM--------------->
<!----------------step 9 right ARM--------------->
<script>
function change_txt_rightside(value,flag)
{
	document.getElementById('right-arm-id'+flag).innerHTML=' ';
	document.getElementById('rightarm_text_id'+flag).innerHTML=value;
	document.getElementById('form_right_arm_text'+flag).value=value;
	document.getElementById('form_right_arm_image'+flag).value='';
}
</script>
<script>
function change_txt_family_rightside(value,flag)
{
	document.getElementById('rightarm_text_id'+flag).style.fontFamily=value;
	document.getElementById('form_right_arm_text_family'+flag).value=value;
}
</script>
<script>
function change_txt_color_rightside(value,flag)
{
	document.getElementById('rightarm_text_id'+flag).style.color=value;
	document.getElementById('form_right_arm_text_color'+flag).value=value;
}
</script>
<!----------------end step 9 right ARM--------------->

<!----------------step 10 BACK--------------->
<script>
function change_txt_back(value,type)
{
	if(type!='tail')
	{
		document.getElementById('back_text_id').innerHTML=value;
		change_txt_family_back("Times New Roman,Times,serif");
		$.ajax({
					url: '<?=Yii::app()->request->baseUrl?>/classic/setSession',
					type: 'POST',
					data: { ses_name : 'back_txt_tail',
							var_value	: ''
						},
					success: function(data, status){
				}
			});
	}
	else
	{
		<?
			if(Yii::app()->user->getState('back_txt_tail'))
			{
				$tail=Yii::app()->user->getState('back_txt_tail');
			}
			else
			{
				$tail=0;
			}
		?>
		if(value!='' && value!=' ')
		{
			document.getElementById('back_text_id').innerHTML=value+<?=$tail?>;
		}
		else
		{
			document.getElementById('back_text_id').innerHTML=value;
		}
		document.getElementById('back_text_id').style.fontSize="24px";
		change_txt_family_back("tail");
		$.ajax({
					url: '<?=Yii::app()->request->baseUrl?>/classic/setSession',
					type: 'POST',
					data: { ses_name : 'back_txt_tail',
							var_value	: 0
						},
					success: function(data, status){
				}
			});
	}
	$.ajax({
				url: '<?=Yii::app()->request->baseUrl?>/classic/setSession',
				type: 'POST',
				data: { ses_name : 'back_text',
						var_value	: value
					},
				success: function(data, status){
			}
		});
	$.ajax({
				url: '<?=Yii::app()->request->baseUrl?>/classic/setSession',
				type: 'POST',
				data: { ses_name : 'back_type',
						var_value	: type
					},
				success: function(data, status){
			}
		});
	
}
</script>
<script>
function change_txt_family_back(value)
{
	if(value=="vintage")
	{
		document.getElementById('back_text_id').style.fontSize="40px";
	}
	else
	{
		document.getElementById('back_text_id').style.fontSize="20px";
	}
	document.getElementById('back_text_id').style.fontFamily=value;
	$.ajax({
					url: '<?=Yii::app()->request->baseUrl?>/classic/setSession',
					type: 'POST',
					data: { ses_name : 'back_txt_type',
							var_value	: value
						},
					success: function(data, status){
				}
			});
	
}
</script>
<script>
function change_txt_color_back(value)
{
	document.getElementById('back_text_id').style.color=value;
	$.ajax({
					url: '<?=Yii::app()->request->baseUrl?>/classic/setSession',
					type: 'POST',
					data: { ses_name : 'back_txt_color',
							var_value	: value
						},
					success: function(data, status){
				}
			});
	
}
</script>
<script>
function change_txt_color_back1(value)
{
	document.getElementById('back_text_id').style.textShadow='-1px -1px 0 '+value+', 1px -1px 0 '+value+', -1px 1px 0 '+value+', 1px 1px 0 '+value+'';
	var shadow='-1px -1px 0 '+value+', 1px -1px 0 '+value+', -1px 1px 0 '+value+', 1px 1px 0 '+value+'';
	$.ajax({
					url: '<?=Yii::app()->request->baseUrl?>/classic/setSession',
					type: 'POST',
					data: { ses_name : 'back_txt_shadow',
							var_value	: shadow
						},
					success: function(data, status){
				}
			});
}
</script>
<script>
function change_tail(value)
{
	var tail_txt=document.getElementById('tail_id').value;
	if(tail_txt)
	{
		change_txt_back(tail_txt,"tail");
		document.getElementById('back_text_id').style.fontFamily='tail';
		document.getElementById('back_text_id').innerHTML=tail_txt+value;
		for(var i=1;i<=9;i++)
		{
			document.getElementById('tail_img_'+i).style.border="1px solid #000";
		}
		document.getElementById('tail_img_'+value).style.border="1px solid red";
		$.ajax({
						url: '<?=Yii::app()->request->baseUrl?>/classic/setSession',
						type: 'POST',
						data: { ses_name : 'back_txt_tail',
								var_value	: value
							},
						success: function(data, status){
					}
				});
	}
}
</script>
<!----------------step 10 BACK--------------->
