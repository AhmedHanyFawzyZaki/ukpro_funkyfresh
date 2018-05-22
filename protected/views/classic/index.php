<?php
// set the page title
$this->pageTitle = Yii::app()->name . ' - Build jacket';
?>

<div class="loader" style="display:none;"></div>
<div class="wrapper">
    <h3 class="main-title margin0px">Design Process</h3>
    <div class="container margin0px" style="position:relative;">
        <div class="rev-left" id="step1">
            <h4>Jacket Type</h4>
            <h5 class="title8">choose your jacket type</h5>
            <div class="jacket-options">
                <div class="color-row">
                    <label class="radio" onclick="changeSteps('1,2,3,4,5,6,7', 'plain')">
                        <input type="radio" checked="" name="j-type" >
                        Plain

                    </label>
                    <p class="type-access"><span>accessible Stages:</span>(Body , sleeve, snap, pocket and knit pattern)</p>
                </div>
                
                <div class="color-row">
                    <label class="radio" onclick="changeSteps('1,2,3,4,5,6,7,8,9', 'semi')">
                        <input type="radio" name="j-type" di >
                        Semi
                    </label>
                </div>

                <div class="color-row">
                    <label class="radio" onclick="changeSteps('1,2,3,4,5,6,7,8,9,10,11,12', '')">
                        <input type="radio" name="j-type" >
                        Fully
                    </label>
                </div>

            </div>
            <!--<div class="row1">
                <a href="javascript:void(0)" onclick="change_left('index', 'step1')" class="btn next" >next</a>
            </div>-->
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" id="step2" style="display:none;">
            <h4>Select Size</h4>
            <h5 class="title8">choose your Size</h5>

            <div class="colors">
                <?php
                echo CHtml::dropDownList('', '', CHtml::listData(Size::model()->findAll(), 'id', 'title'), array('prompt' => 'Select Size', 'onchange' => '$("#form_size").val(this.value)'));
                ?>
            </div>

            <div class="colors">
                <select>
                    <option>Regular</option>
                    <option>Short</option>
                    <option>Bolero</option>
                </select>
            </div>

            <div class="body-sizes">

                <div class="control-group">
                    <label class="control-label" for="chest">Chest Size:</label>
                    <div class="controls">

                        <input type="text"  maxlength="50">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="chest">Waist Size:</label>
                    <div class="controls">

                        <input type="text"  maxlength="50">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="chest">shoulder length:</label>
                    <div class="controls">

                        <input type="text"  maxlength="50">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="chest">body length:</label>
                    <div class="controls">

                        <input type="text"  maxlength="50">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="chest">sleeve lenght:</label>
                    <div class="controls">

                        <input type="text"  maxlength="50">
                    </div>
                </div>

            </div>

            <!--<div class="row1">
                <a href="javascript:void(0)" onclick="change_left('index', 'step1')" class="btn next" >next</a>
            </div>-->
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" id="step3" style="display:none;">
            <h4>body color</h4>
            <h5 class="title8">choose your body color</h5>


            <div class="color-pick">
                <div class="color-row">
                    <p>Select color</p>
                    <a class="pick-link picker-click" id="body-color-picker">
                        <img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/picker-icon.png">
                    </a>
                    <div class="toggle-picker">
                        <div class="body-picker">
                            <?php
                            $cat_and_sub_path = Yii::app()->user->getState('cat') . '/' . Yii::app()->user->getState('subcat');
                            foreach ($products as $product) {
                                $color = $product->code;
                                $color_code = $product->color;
                                $path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/body.png';
                                $back_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/back/back.png';
                                $right_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/right/body-right.png';
                                $left_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/left/body-left.png';
                                echo '<span class="btn round" title="' . $product->color_title . '" style="background:' . $color_code . '" onclick=" document.getElementById(\'form_body\').value=\'' . $color . '\';document.getElementById(\'body\').src=\'' . $path . '\';document.getElementById(\'back-body\').src=\'' . $back_path . '\';document.getElementById(\'body-right\').src=\'' . $right_path . '\';document.getElementById(\'body-left\').src=\'' . $left_path . '\';document.getElementById(\'body-color-picker\').style.background=\'' . $color_code . '\'"></span>';
                            }
                            ?>
                        </div>
                    </div><!--end toggle-picker-->
                </div>
            </div>

            <!--<div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step1', 'step2')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step1', 'index')" class="btn bk" >previous</a>
            </div>-->
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" style="display:none;" id="step4">
            <h4>Sleeves color</h4>
            <h5 class="title8">choose your Sleeves color</h5>

            <div class="color-pick">
                <div class="color-row">
                    <p>Select color</p>
                    <a class="pick-link picker-click" id="sleeves-color-picker">
                        <img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/picker-icon.png">
                    </a>
                    <div class="toggle-picker">
                        <div class="body-picker">
                            <?php
                            foreach ($products as $product) {
                                $color = $product->code;
                                $color_code = $product->color;
                                $path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/front-sleeves.png';
                                $back_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/back/back-sleeves.png';
                                $right_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/right/sleeve-right.png';
                                $left_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/left/sleeve-left.png';

                                echo '<span class="btn round" title="' . $product->color_title . '" style="background:' . $color_code . '" onclick=" document.getElementById(\'form_sleeves\').value=\'' . $color . '\';document.getElementById(\'sleeves\').src=\'' . $path . '\'; document.getElementById(\'back-sleeves\').src=\'' . $back_path . '\';document.getElementById(\'sleeve-right\').src=\'' . $right_path . '\';document.getElementById(\'sleeve-left\').src=\'' . $left_path . '\';document.getElementById(\'sleeves-color-picker\').style.background=\'' . $color_code . '\'"></span>';
                            }
                            ?>
                        </div>
                    </div><!--end toggle-picker-->
                </div>
            </div>



            <!--<div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step2', 'step3')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step2', 'step1')" class="btn bk" >previous</a>
            </div>-->

            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/>
        </div>
        <div class="rev-left" id="step5" style="display:none;">
            <h4>Snap Type</h4>
            <h5 class="title8">choose your snap type</h5>

            <div class="colors">
                <?php
                echo CHtml::dropDownList('', '', array('0' => 'Snap', '1' => 'Zip'), array('onchange' => 'ChangeSnapType(this.value)'));
                ?>
            </div>
            <div class="zip-hidden" id="hidden_zip_pic" style="display:none;">
                <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path ?>/default/zip-hidden.png'/>
            </div>

            <div class="color-pick">
                <div class="color-row">
                    <p>Select color</p>
                    <a class="pick-link picker-click" id="snap-color-picker">
                        <img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/picker-icon.png">
                    </a>
                    <div class="toggle-picker">

                        <div class="body-picker" id="snap_types">

                            <?php
                            $snaps = Snap::model()->findAll(array('condition' => 'type=0 and sub_category=1'));
                            foreach ($snaps as $snap) {
                                echo '<span class="btn round" title="' . $snap->title . '" style="background:' . $snap->color . '" onclick=" document.getElementById(\'form_buttons\').value=\'' . $snap->id . '\';document.getElementById(\'buttons\').src=\'' . Yii::app()->request->baseUrl . '/media/snap/' . $snap->image . '\'; document.getElementById(\'buttons-right\').src=\'' . Yii::app()->request->baseUrl . '/media/snap/' . $snap->right_image . '\';document.getElementById(\'buttons-left\').src=\'' . Yii::app()->request->baseUrl . '/media/snap/' . $snap->left_image . '\';document.getElementById(\'snap-color-picker\').style.background=\'' . $snap->color . '\'"></span>';
                            }
                            /* foreach ($products  as $product)
                              {
                              $color=$product->code;
                              $color_code=$product->color;
                              $path=Yii::app()->getBaseUrl(true).'/media/types/'.$cat_and_sub_path.'/'.$color .'/buttons.png';
                              $right_path=Yii::app()->getBaseUrl(true).'/media/types/'.$cat_and_sub_path.'/'.$color .'/right/button-right.png';
                              $left_path=Yii::app()->getBaseUrl(true).'/media/types/'.$cat_and_sub_path.'/'.$color .'/left/button-left.png';

                              echo '<span class="btn round" title="'.$product->color_title.'" style="background:'.$color_code.'" onclick=" document.getElementById(\'form_buttons\').value=\''.$color.'\';document.getElementById(\'buttons\').src=\''.$path.'\'; document.getElementById(\'buttons-right\').src=\''.$right_path.'\';document.getElementById(\'buttons-left\').src=\''.$left_path.'\';"></span>';
                              } */
                            ?>
                        </div>

                    </div><!--end toggle-picker-->
                </div>
            </div>



            <!--<div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step3', 'step4')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step3', 'step2')" class="btn bk" >previous</a>
            </div>-->

            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" id="step6" style="display:none;">
            <h4>Pockets color</h4>
            <h5 class="title8">choose your Pockets color</h5>

            <div class="color-pick">
                <div class="color-row">
                    <p>Select color</p>
                    <a class="pick-link picker-click" id="pocket-color-picker">
                        <img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/picker-icon.png">
                    </a>
                    <div class="toggle-picker">

                        <div class="body-picker">
                            <?php
                            foreach ($products as $product) {
                                $color = $product->code;
                                $color_code = $product->color;
                                $path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/pockets.png';
                                $right_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/right/pocket-right.png';
                                $left_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/left/pocket-left.png';

                                echo '<span class="btn round" title="' . $product->color_title . '" style="background:' . $color_code . '" onclick=" document.getElementById(\'form_pockets\').value=\'' . $color . '\';document.getElementById(\'pockets\').src=\'' . $path . '\'; document.getElementById(\'pocket-right\').src=\'' . $right_path . '\';document.getElementById(\'pocket-left\').src=\'' . $left_path . '\';document.getElementById(\'pocket-color-picker\').style.background=\'' . $color_code . '\';"></span>';
                            }
                            ?>
                        </div>

                    </div><!--end toggle-picker-->
                </div>
            </div>



            <!--<div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step4', 'step5')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step4', 'step3')" class="btn bk" >previous</a>
            </div>-->

            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" style="display:none;" id="step7">
            <h5 class="title8">Knit Pattern :</h5>
            <p>Select your Knit Pattern</p>

            <div class="color-pick">
                <div class="pattern-options">
                    <div class="color-row">

                        <img class="pattern-img" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/solid.png">
                        <label class="radio pattern-type" onclick="change_knit_type(1)">
                            <input type="radio" checked="" name="option" >
                            Solid Color
                        </label>
                    </div>

                    <div class="color-row">
                        <img class="pattern-img" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/single.png">

                        <label class="radio pattern-type"  onclick="change_knit_type(2)">
                            <input type="radio" name="option">
                            Single stripe
                        </label>
                    </div>

                    <div class="color-row">
                        <img class="pattern-img" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/two.png">
                        <label class="radio pattern-type" onclick="change_knit_type(3)">
                            <input type="radio" name="option" >
                            Two stripes
                        </label>
                    </div>

                    <div class="color-row">
                        <img class="pattern-img" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/feathering.png">
                        <label class="radio pattern-type" onclick="change_knit_type(4)">
                            <input type="radio" name="option" >
                            Two stripes with feathering
                        </label>

                    </div>
                </div><!--end pattern-options-->

            </div>




            <div class="colors">

                <h5 class="title8">Knit Color :</h5>


                <div class="color-pick knit-picker">
                    <div class="color-row">
                        <p>Select Base color</p>
                        <a class="pick-link picker-click" id="base-color-picker">
                            <img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/picker-icon.png">
                        </a>
                        <div class="toggle-picker">

                            <div class="body-picker">
                                <?php
                                foreach ($products as $product) {
                                    $color = $product->code;
                                    $color_code = $product->color;
                                    $path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/knit.png';
                                    $back_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/back/knit-back.png';
                                    $right_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/right/knit-right.png';
                                    $left_path = Yii::app()->getBaseUrl(true) . '/media/types/' . $cat_and_sub_path . '/' . $color . '/left/knit-left.png';

                                    echo '<span class="btn round" title="' . $product->color_title . '" style="background:' . $color_code . '" onclick=" document.getElementById(\'form_knit\').value=\'' . $color . '\';document.getElementById(\'knit\').src=\'' . $path . '\'; document.getElementById(\'back-knit\').src=\'' . $back_path . '\';document.getElementById(\'knit-right\').src=\'' . $right_path . '\'; document.getElementById(\'knit-left\').src=\'' . $left_path . '\';document.getElementById(\'base-color-picker\').style.background=\'' . $color_code . '\';"></span>';
                                }
                                ?>
                            </div>

                        </div><!--end toggle-picker-->
                    </div>
                </div>




                <div id="single_stripe_div" style="display:none;">
                    <div class="color-pick knit-picker">
                        <div class="color-row">
                            <p>Select Stripe color</p>
                            <a class="pick-link picker-click" id="single-color-picker">
                                <img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/picker-icon.png">
                            </a>
                            <div class="toggle-picker">

                                <div class="body-picker">

                                    <?php
                                    echo Stripe::getStripes('1');
                                    ?>

                                </div>

                            </div><!--end toggle-picker-->
                        </div>
                    </div>

                </div>


                <div id="double_stripe_div" style="display:none;"> 
                    <div class="color-pick knit-picker">
                        <div class="color-row">
                            <p>Select Stripe color</p>
                            <a class="pick-link picker-click" id="double-color-picker">
                                <img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/picker-icon.png">
                            </a>
                            <div class="toggle-picker">

                                <div class="body-picker">
                                    <?php
                                    echo Stripe::getStripes('2');
                                    ?>

                                </div>

                            </div><!--end toggle-picker-->
                        </div>
                    </div>

                </div>


                <div id="knit_border_selection" style="display:none;">

                    <div class="color-pick knit-picker">
                        <div class="color-row">
                            <p>Select Feathering Color</p>
                            <a class="pick-link picker-click" id="feathering-color-picker">
                                <img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/picker-icon.png">
                            </a>
                            <div class="toggle-picker">

                                <div class="body-picker">
                                    <?php
                                    echo StripeBorder::getStripesBorder();
                                    ?>


                                </div>

                            </div><!--end toggle-picker-->
                        </div>
                    </div>



                </div>
            </div>

            <!--<div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step5', 'step6')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step5', 'step4')" class="btn bk" >previous</a>
            </div>-->
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" style="display:none;" id="step8">
            <h4>Right Chest Design </h4>
            <h5 class="title8">choose right chest shape :</h5>

            <div class="shape-type">
                <?php
                ob_start();
                $this->widget('ext.EAjaxUpload.EAjaxUpload', array(
                    'id' => 'uploadFile',
                    'config' => array(
                        'action' => Yii::app()->createUrl('classic/upload'),
                        'allowedExtensions' => array("jpg", "jpeg", "png"),
                        'sizeLimit' => 10 * 1024 * 1024, // maximum file size in bytes
                        'minSizeLimit' => 2, // minimum file size in bytes
                        'onComplete' => "js:function(id, fileName, responseJSON){
                if(!responseJSON['error'])
                {
                document.getElementById('left-chest-id').innerHTML='<img src=\'" . Yii::app()->getBaseUrl(true) . "/upload/'+fileName+'?nocache='+Math.random()+'\'>';
                document.getElementById('form_left_chest_image').value='" . Yii::app()->getBaseUrl(true) . "/upload/'+fileName+'?nocache='+Math.random();											                                document.getElementById('left_text_id1').innerHTML='';
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

                $this->widget('CTabView', array(
                    //'activeTab'=>'tab1',
                    'tabs' => array(
                        'Letters' => array('title' => 'embroidery', 'content' => '
                <div class="control-group" style="display:table;">
                <label class="control-label proc">Choose your letters (Line1):</label>
                <input type="text" maxlength="13" value="" onkeyup="change_txt(this.value,\'1\')" id="chest_left_txt_id1">
                <label class="control-label proc" for="inputEmail">Letter Font:</label>
                <select class="letter-select" onchange="change_txt_family(this.value,\'1\')">
                <option value=\'pro-block\'>Pro Block</option>
                <option value=\'Athletic Block\'>Athletic Block</option>
                <option value=\'vintage\'>Vintage</option>
                <option value=\'oldenglishnormal\'>Old English</option>
                <option value=\'tail\'>Script</option>
                </select>
                    <label class="control-label proc" for="inputEmail">Letter Color(s):</label>
                    <select class="letter-select" onchange="navigate_pickers(this.value, \'right_chest1\')">
                    <option value = "1">One Color</option>
                    <!--<option value = "2">Two Colors</option>-->
                </select>
				
				
                <div class="color-pick" style="display:block;" id = "right_one_color1">
                    <div class="color-row">
                        <p>Letter color</p>
                        <a class="pick-link picker-click" id="letter_color_picker1">
                            <img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/>
                        </a>
                        <div class="toggle-picker">
                            <div class="color-picker">
                           ' . Color::getColorsLinks("1") . '
                            </div>
                        </div>
                    </div>
                </div>
				
                <div class="color-pick" style="display:none;" id = "right_two_colors1">
                    <div class="color-row">
                        <p>Top felt colour</p>
                        <a class="pick-link picker-click" id="outlet_color_picker1">
                            <img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/>
                        </a>
                        <div class="toggle-picker">
                            <div class="color-picker">
                           ' . Color::getColorsLinksBack1('left_text_id1', 'form_left_chest_text_shadow1') . '
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
                <hr>
                <div class="control-group" style="display:table;">
                <label class="control-label proc" for="inputEmail">Choose your letters (Line2):</label>
                <input type="text" maxlength="13" value="" onkeyup="change_txt(this.value,\'2\')" id="chest_left_txt_id2">
                <label class="control-label proc" for="inputEmail">Letter Font:</label>
                <select class="letter-select" onchange="change_txt_family(this.value,\'2\')">
                <option value=\'pro-block\'>Pro Block</option>
                <option value=\'Athletic Block\'>Athletic Block</option>
                <option value=\'vintage\'>Vintage</option>
                <option value=\'oldenglishnormal\'>Old English</option>
                <option value=\'tail\'>Script</option>
                </select>
                	<label class="control-label proc" for="inputEmail">Letter Color(s):</label>

                <select class="letter-select" onchange="navigate_pickers(this.value, \'right_chest2\')">
                <option value="1">One Color</option>
                <!--<option value="2">Two Colors</option>-->
                </select>
				
				
                <div class="color-pick" style="display:block;" id="right_one_color2">
                    <div class="color-row">
                        <p>Letter color</p>
                        <a class="pick-link picker-click" id="letter_color_picker2">
                            <img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/>
                        </a>
                        <div class="toggle-picker">
                            <div class="color-picker">
                           ' . Color::getColorsLinks("2") . '
                            </div>
                        </div>

                    </div>
                </div>
				
                <div class="color-pick" style="display:none;" id = "right_two_colors2">
                    <div class="color-row">
                        <p>Top felt colour</p>
                        <a class="pick-link picker-click" id="outlet_color_picker2">
                            <img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/>
                        </a>
                        <div class="toggle-picker">
                            <div class="color-picker">
                            ' . Color::getColorsLinksBack1('left_text_id2', 'form_left_chest_text_shadow2') . '
                            </div>
                        </div>
                    </div>
                </div>
               
               
                </div>
                '),
                        'Image' => array('title' => 'Image', 'content' => $image_widget),
                    ),
                    /* 'options'=>array(
                      'collapsible'=>true,
                      'selected'=>'none',
                      ), */
                    'htmlOptions' => array(
                    //'style'=>'width:500px;'
                    )
                ));
                ?>
            </div>

            <!--<div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step6', 'step7')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step6', 'step5')" class="btn bk" >previous</a>
            </div>-->

            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" id="step9" style="display:none;">
            <h4>Left Chest Design </h4>
            <h5 class="title8">choose left chest shape :</h5>

            <div class="shape-type">
                <?php
                ob_start();
                $this->widget('ext.EAjaxUpload.EAjaxUpload', array(
                    'id' => 'uploadFile1',
                    'config' => array(
                        'action' => Yii::app()->createUrl('classic/upload'),
                        'allowedExtensions' => array("jpg", "jpeg", "png", "gif"),
                        'sizeLimit' => 10 * 1024 * 1024, // maximum file size in bytes
                        'minSizeLimit' => 2, // minimum file size in bytes
                        'onComplete' => "js:function(id, fileName, responseJSON){
                if(!responseJSON['error'])
                {
                document.getElementById('right-chest-id').innerHTML='<img src=\'" . Yii::app()->getBaseUrl(true) . "/upload/'+fileName+'?nocache='+Math.random()+'\'>';
                document.getElementById('form_right_chest_image').value='" . Yii::app()->getBaseUrl(true) . "/upload/'+fileName+'?nocache='+Math.random();
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

                $this->widget('CTabView', array(
                    //'activeTab'=>'tab1',
                    'tabs' => array(
                        'Letters1' => array('title' => 'Patch', 'content' => '
                <div class="control-group"  style="display:table;">
                <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                <input type="text" maxlength="3" style="text-transform: uppercase;" onkeyup="change_txt1(this.value)" id="chest_right_txt_id">
                <label class="control-label proc" for="inputEmail">Letter Font:</label>
                <select class="letter-select" onchange="change_txt_family1(this.value)">

                <option value=\'pro-block\'>Pro Block</option>
                <option value=\'Athletic Block\'>Athletic Block</option>
                <option value=\'tail\'>script</option>
                <option value=\'vintage\'>Vintage</option>
                <option value=\'oldenglishnormal\'>Old English</option>
                </select>
                <label class="control-label proc" for="inputEmail">Letter Color(s):</label>

                <select class="letter-select" onchange="navigate_pickers(this.value, \'left_chest1\')">
                <option value="1">One Color</option>
                <option value="2">Two Colors</option>

                </select>

                <div class="color-pick" >
                <div class="color-row" id = "left_one_color1">
                <p>Letter color</p>
                <a class="pick-link picker-click" id="right_letter_color_picker1"><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
                ' . Color::getColorsLinks1() . '
                </div>
                </div>


                </div>


                <div class="color-row" style="display:none;" id = "left_two_colors1">
                <p>Top felt colour</p>
                <a class="pick-link picker-click" id="right_letter_color_picker2"><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
                 ' . Color::getColorsLinksBack1('right_text_id', 'form_right_chest_text_shadow') . '
                </div>
                </div>


                </div>

                </div>

                </div>
                '),
                        'Image1' => array('title' => 'Image', 'content' => $image_widget1),
                    ),
                    /* 'options'=>array(
                      'collapsible'=>true,
                      'selected'=>'none',
                      ), */
                    'htmlOptions' => array(
                    //'style'=>'width:500px;'
                    )
                ));
                ?>
            </div>

            <!--<div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step7', 'step8')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step7', 'step6')" class="btn bk" >previous</a>
            </div>-->

            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" id="step10" style="display:none;">
            <h4>Right Arm Pattern</h4>
            <h5 class="title8">choose Right Arm shape</h5>
            <div class="shape-type">
                <?php
                ob_start();
                $this->widget('ext.EAjaxUpload.EAjaxUpload', array(
                    'id' => 'uploadFile2',
                    'config' => array(
                        'action' => Yii::app()->createUrl('classic/upload'),
                        'allowedExtensions' => array("jpg", "jpeg", "png"),
                        'sizeLimit' => 10 * 1024 * 1024, // maximum file size in bytes
                        'minSizeLimit' => 2, // minimum file size in bytes
                        'onComplete' => "js:function(id, fileName, responseJSON){
                if(!responseJSON['error'])
                {
                document.getElementById('leftarm_text_id1').innerHTML='<img src=\'" . Yii::app()->getBaseUrl(true) . "/upload/'+fileName+'?nocache='+Math.random()+'\'>';
                document.getElementById('form_left_arm_image1').value='" . Yii::app()->getBaseUrl(true) . "/upload/'+fileName+'?nocache='+Math.random();
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

                ob_start();
                $this->widget('ext.EAjaxUpload.EAjaxUpload', array(
                    'id' => 'uploadFile3',
                    'config' => array(
                        'action' => Yii::app()->createUrl('classic/upload'),
                        'allowedExtensions' => array("jpg", "jpeg", "png"),
                        'sizeLimit' => 10 * 1024 * 1024, // maximum file size in bytes
                        'minSizeLimit' => 2, // minimum file size in bytes
                        'onComplete' => "js:function(id, fileName, responseJSON){
                if(!responseJSON['error'])
                {
                document.getElementById('leftarm_text_id2').innerHTML='<img src=\'" . Yii::app()->getBaseUrl(true) . "/upload/'+fileName+'?nocache='+Math.random()+'\'>';
                document.getElementById('form_left_arm_image2').value='" . Yii::app()->getBaseUrl(true) . "/upload/'+fileName+'?nocache='+Math.random();
                document.getElementById('arm_left_txt_id2').value='';
                }
                }",
                    )
                ));
                $image_widget3 = ob_get_contents();
                ob_end_clean();

                ob_start();
                $this->widget('zii.widgets.jui.CJuiAccordion', array(
                    //'activeTab'=>'tab1',
                    'panels' => array(
                        'Letters' => '
                <div class="control-group" style="display:table;">
                <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                <input type="text" maxlength="5" onkeyup="change_txt_leftside(this.value,\'1\')" id="arm_left_txt_id1">
                <label class="control-label proc" for="inputEmail">Letter Font:</label>
                <select class="letter-select" onchange="change_txt_family_leftside(this.value,\'1\')">
                <option value=\'pro-block\'>Pro Block</option>
                <option value=\'Athletic Block\'>Athletic Block</option>
                <option value=\'vintage\'>Vintage</option>
                </select>
				
				<label class="control-label proc" for="inputEmail">Letter Color(s):</label>

                <select class="letter-select" onchange="navigate_pickers(this.value, \'right_arm1\')">
                <option value="1">One Color</option>
                <option value="2">Two Colors</option>
                <!--<option>Three Colors</option>-->

                </select>
				
				
				<div class="color-pick letters-pick">
                <div class="color-row" id="right_arm_picker_line_1">
                <p>Letter color</p>
                <a class="pick-link picker-click" id="leftarm-color-picker1"><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
               ' . Color::getColorsLinksLeftSide("1") . '
                </div>
                </div>

                </div>
				</div>
				
				<div class="color-pick letters-pick">
                <div class="color-row" id="right_arm_picker_line_2" style="display:none;">
                <p>Top felt colour</p>
                <a class="pick-link picker-click" id="leftarm-color-picker2"><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
               ' . Color::getColorsLinksBack1('leftarm_text_id1', 'form_left_arm_text_shadow1') . '
                </div>
                </div>

                </div>
				</div>
 
                </div>',
                        'Patch' => $image_widget2
                    ),
                ));
                $r_line1 = ob_get_contents();
                ob_end_clean();

                ob_start();
                $this->widget('zii.widgets.jui.CJuiAccordion', array(
                    //'activeTab'=>'tab1',
                    'panels' => array(
                        'Letters' => '
                <div class="control-group" style="display:table;">
                <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                <input type="text" maxlength="5" onkeyup="change_txt_leftside(this.value,\'2\')" id="arm_left_txt_id2">
                <label class="control-label proc" for="inputEmail">Letter Font:</label>
                <select class="letter-select" onchange="change_txt_family_leftside(this.value,\'2\')">
                <option value=\'pro-block\'>Pro Block</option>
                <option value=\'Athletic Block\'>Athletic Block</option>
                <option value=\'vintage\'>Vintage</option>
                </select>
				
				
				
				<label class="control-label proc" for="inputEmail">Letter Color(s):</label>

                <select class="letter-select">
                <option>One Color</option>
                <option>Two Colors</option>
                <option>Three Colors</option>

                </select>
				
				
				<div class="color-pick letters-pick">
                <div class="color-row">
                <p>Letter color</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
               ' . Color::getColorsLinksLeftSide("2") . '
                </div>
                </div>

                </div>
				</div>
				
				
				<div class="color-pick letters-pick">
                <div class="color-row">
                <p>Top felt colour</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
                ' . Color::getColorsLinksBack1('leftarm_text_id2', 'form_left_arm_text_shadow2') . '
                </div>
                </div>

                </div>
				</div>
				
	 
                </div>',
                        'Patch' => $image_widget3
                    ),
                ));
                $r_line2 = ob_get_contents();
                ob_end_clean();

                $this->widget('CTabView', array(
                    //'activeTab'=>'tab1',
                    'tabs' => array(
                        'Letters2' => array('title' => 'Line 1', 'content' => $r_line1),
                        'Letters3' => array('title' => 'Line 2', 'content' => $r_line2),
                    ),
                    /* 'options'=>array(
                      'collapsible'=>true,
                      'selected'=>'none',
                      ), */
                    'htmlOptions' => array(
                    //'style'=>'width:500px;'
                    )
                ));
                ?>
            </div>

            <!---------------------------------------------------------------------------->

            <!--<div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step8', 'step9')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step8', 'step7')" class="btn bk" >previous</a>
            </div>-->

            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/>
        </div>
        <div class="rev-left" id="step11" style="display:none;">
            <h4>Left Arm Pattern</h4>
            <h5 class="title8">choose Left Arm shape</h5>  
            <div class="shape-type">
                <?php
                ob_start();
                $this->widget('ext.EAjaxUpload.EAjaxUpload', array(
                    'id' => 'uploadFile4',
                    'config' => array(
                        'action' => Yii::app()->createUrl('classic/upload'),
                        'allowedExtensions' => array("jpg", "jpeg", "png"),
                        'sizeLimit' => 10 * 1024 * 1024, // maximum file size in bytes
                        'minSizeLimit' => 2, // minimum file size in bytes
                        'onComplete' => "js:function(id, fileName, responseJSON){
                if(!responseJSON['error'])
                {
                document.getElementById('rightarm_text_id1').innerHTML='<img src=\'" . Yii::app()->getBaseUrl(true) . "/upload/'+fileName+'?nocache='+Math.random()+'\'>';
                document.getElementById('form_right_arm_image1').value='" . Yii::app()->getBaseUrl(true) . "/upload/'+fileName+'?nocache='+Math.random();
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

                ob_start();
                $this->widget('ext.EAjaxUpload.EAjaxUpload', array(
                    'id' => 'uploadFile5',
                    'config' => array(
                        'action' => Yii::app()->createUrl('classic/upload'),
                        'allowedExtensions' => array("jpg", "jpeg", "png"),
                        'sizeLimit' => 10 * 1024 * 1024, // maximum file size in bytes
                        'minSizeLimit' => 2, // minimum file size in bytes
                        'onComplete' => "js:function(id, fileName, responseJSON){
                if(!responseJSON['error'])
                {
                document.getElementById('rightarm_text_id2').innerHTML='<img src=\'" . Yii::app()->getBaseUrl(true) . "/upload/'+fileName+'?nocache='+Math.random()+'\'>';
                document.getElementById('form_right_arm_image2').value='" . Yii::app()->getBaseUrl(true) . "/upload/'+fileName+'?nocache='+Math.random();
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

                ob_start();
                $this->widget('zii.widgets.jui.CJuiAccordion', array(
                    //'activeTab'=>'tab1',
                    'panels' => array(
                        'Letters' => '
                <div class="control-group"  style="display:table;">
                <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                <input type="text" maxlength="5" onkeyup="change_txt_rightside(this.value,\'1\')" id="arm_right_txt_id1">
                <label class="control-label proc" for="inputEmail">Letter Font:</label>
                <select class="letter-select" onchange="change_txt_family_rightside(this.value,\'1\')">
                <option value=\'pro-block\'>Pro Block</option>
                <option value=\'Athletic Block\'>Athletic Block</option>
                <option value=\'vintage\'>Vintage</option>
                </select>
                <label class="control-label proc" for="inputEmail">Letter Color(s):</label>

                <select class="letter-select">
                <option>One Color</option>
                <option>Two Colors</option>
                <option>Three Colors</option>

                </select>
				
				
				<div class="color-pick letters-pick">
                <div class="color-row">
                <p>Letter color</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
               ' . Color::getColorsLinksRightSide("1") . '
                </div>
                </div>

                </div>
				</div>
				
				<div class="color-pick letters-pick">
                <div class="color-row">
                <p>Top felt colour</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
                ' . Color::getColorsLinksBack1('rightarm_text_id1', 'form_right_arm_text_shadow1') . '
                </div>
                </div>

                </div>
				</div>
				
                
               
                </div>',
                        'Patch' => $image_widget4
                    ),
                ));
                $line1 = ob_get_contents();
                ob_end_clean();

                ob_start();
                $this->widget('zii.widgets.jui.CJuiAccordion', array(
                    //'activeTab'=>'tab1',
                    'panels' => array(
                        'Letters' => '
                <div class="control-group"  style="display:table;">
                <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                <input type="text" maxlength="5" onkeyup="change_txt_rightside(this.value,\'2\')" id="arm_right_txt_id2">
                <label class="control-label proc" for="inputEmail">Letter Font:</label>
                <select class="letter-select" onchange="change_txt_family_rightside(this.value,\'2\')">
                <option value=\'pro-block\'>Pro Block</option>
                <option value=\'Athletic Block\'>Athletic Block</option>
                <option value=\'vintage\'>Vintage</option>
                </select>
                
				
				<label class="control-label proc" for="inputEmail">Letter Color(s):</label>

                <select class="letter-select">
                <option>One Color</option>
                <option>Two Colors</option>
                <option>Three Colors</option>

                </select>
				
				
				<div class="color-pick letters-pick">
                <div class="color-row">
                <p>Letter color</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
                ' . Color::getColorsLinksRightSide("2") . '
                </div>
                </div>

                </div>
				</div>
				
				
				
				<div class="color-pick letters-pick">
                <div class="color-row">
                <p>Top felt colour</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
                ' . Color::getColorsLinksBack1('rightarm_text_id2', 'form_right_arm_text_shadow2') . '
                </div>
                </div>

                </div>
				</div>
				
                
                
                
                </div>',
                        'Patch' => $image_widget5
                    ),
                ));
                $line2 = ob_get_contents();
                ob_end_clean();

                $this->widget('CTabView', array(
                    //'activeTab'=>'tab1',
                    'tabs' => array(
                        'Letters4' => array('title' => 'Line 1', 'content' => $line1),
                        'Line2' => array('title' => 'Line 2', 'content' => $line2),
                    ),
                    /* 'options'=>array(
                      'collapsible'=>true,
                      'selected'=>'none',
                      ), */
                    'htmlOptions' => array(
                    //'style'=>'width:500px;'
                    )
                ));
                ?>
            </div>

            <!---------------------------------------------------------------------------->

            <!--<div class="row1">
                <a href="javascript:void(0)" onclick="change_left('step9', 'step10')" class="btn next" >next</a>
                <a href="javascript:void(0)" onclick="change_left('step9', 'step8')" class="btn bk" >previous</a>
            </div>-->

            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/>
        </div>
        <div class="rev-left" id="step12" style="display:none;">
            <h4>Back Pattern</h4>
            <h5 class="title8">choose back :</h5>

            <div class="shape-type">
                <?php
                ob_start();
                $this->widget('ext.EAjaxUpload.EAjaxUpload', array(
                    'id' => 'uploadFile6',
                    'config' => array(
                        'action' => Yii::app()->createUrl('classic/upload'),
                        'allowedExtensions' => array("jpg", "jpeg", "png", "gif"),
                        'sizeLimit' => 10 * 1024 * 1024, // maximum file size in bytes
                        'minSizeLimit' => 2, // minimum file size in bytes
                        'onComplete' => "js:function(id, fileName, responseJSON){
                if(!responseJSON['error'])
                {
                document.getElementById('back_img_id').innerHTML='<img class=\'patchimg\' src=\'" . Yii::app()->getBaseUrl(true) . "/upload/'+fileName+'?nocache='+Math.random()+'\'>';
                document.getElementById('form_back_img').value='" . Yii::app()->getBaseUrl(true) . "/upload/'+fileName;
                if(document.getElementById('form_back_text_type').value=='tail')
                {
                document.getElementById('form_back_text').value='';
                document.getElementById('form_back_text_family').value='';
                document.getElementById('tail_id').value='';
                document.getElementById('back_text_id').innerHTML='';
                document.getElementById('form_back_text_color').value='';
                document.getElementById('form_back_text_shadow').value='';
                document.getElementById('form_back_text_type').value='';
                document.getElementById('subtail_id').value='';
                document.getElementById('sub_tail').innerHTML='';
                document.getElementById('form_sub_tail').value='';
                document.getElementById('form_sub_tail_color').value='';
                document.getElementById('letter_id').value='';

                document.getElementById('form_back_text1').value='';
                document.getElementById('form_back_text_family1').value='';
                document.getElementById('letter_id1').value='';
                document.getElementById('back_text_id1').innerHTML='';
                document.getElementById('form_back_text_color1').value='';
                document.getElementById('form_back_text_shadow1').value='';

                document.getElementById('form_back_text2').value='';
                document.getElementById('form_back_text_family2').value='';
                document.getElementById('letter_id2').value='';
                document.getElementById('back_text_id2').innerHTML='';
                document.getElementById('form_back_text_color2').value='';
                document.getElementById('form_back_text_shadow2').value='';
                }
                }
                }",
                    )
                ));
                $image_widget6 = ob_get_contents();
                ob_end_clean();

                ob_start();
                $this->widget('zii.widgets.jui.CJuiAccordion', array(
                    //'activeTab'=>'tab1',
                    'panels' => array(
                        'Top Line' => '
                <div class="control-group"  style="display:table;">
                <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                <input type="text" maxlength="20" onkeyup="change_txt_back(this.value,\'letter\',\'\')" id="letters_id">
                <label class="control-label proc" for="inputEmail">Letter Font:</label>
                <select class="letter-select" onchange="change_txt_family_back(this.value,\'\')">
                <option value=\'pro-block\'>Pro Block</option>
                <option value=\'Athletic Block\'>Athletic Block</option>
                <option value=\'vintage\'>Vintage</option>
                <option value=\'oldenglishnormal\'>Old English</option>
                </select>
				
				
				<label class="control-label proc" for="inputEmail">Letter Color(s):</label>

                <select class="letter-select">
                <option>One Color</option>
                <option>Two Colors</option>
                

                </select>
				
				
				<div class="color-pick letters-pick">
                <div class="color-row">
                <p>Letter color</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
              ' . Color::getColorsLinksBack("back_text_id", "form_back_text_color") . '
                </div>
                </div>

                </div>
				</div>
				
				
				
				<div class="color-pick letters-pick">
                <div class="color-row">
                <p>Top felt colour</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
               ' . Color::getColorsLinksBack1('back_text_id', 'form_back_text_shadow') . '
                </div>
                </div>

                </div>
				</div>
				
   
                </div>
                ',
                        'Middle Line' => '
                <div class="control-group"  style="display:table;">
                <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                <input type="text" maxlength="20" onkeyup="change_txt_back(this.value,\'letter\',\'1\')" id="letters_id1">
                <label class="control-label proc" for="inputEmail">Letter Font:</label>
                <select class="letter-select" onchange="change_txt_family_back(this.value,\'1\')">
                <option value=\'pro-block\'>Pro Block</option>
                <option value=\'Athletic Block\'>Athletic Block</option>
                <option value=\'vintage\'>Vintage</option>
                <option value=\'oldenglishnormal\'>Old English</option>
                </select>
				
				<label class="control-label proc" for="inputEmail">Letter Color(s):</label>

                <select class="letter-select">
                <option>One Color</option>
                <option>Two Colors</option>
                

                </select>
				
				
				<div class="color-pick letters-pick">
                <div class="color-row">
                <p>Letter color</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
               ' . Color::getColorsLinksBack("back_text_id1", "form_back_text_color1") . '
                </div>
                </div>

                </div>
				</div>
				
				
				<div class="color-pick letters-pick">
                <div class="color-row">
                <p>Top felt colour</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
               ' . Color::getColorsLinksBack1('back_text_id1', 'form_back_text_shadow1') . '
                </div>
                </div>

                </div>
				</div>
 
                
                </div>
                ',
                        'Bottom Line' => '
                <div class="control-group"  style="display:table;">
                <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                <input type="text" maxlength="20" onkeyup="change_txt_back(this.value,\'letter\',\'2\')" id="letters_id2">
                <label class="control-label proc" for="inputEmail">Letter Font:</label>
                <select class="letter-select" onchange="change_txt_family_back(this.value,\'2\')">
                <option value=\'pro-block\'>Pro Block</option>
                <option value=\'Athletic Block\'>Athletic Block</option>
                <option value=\'vintage\'>Vintage</option>
                <option value=\'oldenglishnormal\'>Old English</option>
                </select>
				
				
				<label class="control-label proc" for="inputEmail">Letter Color(s):</label>

                <select class="letter-select">
                <option>One Color</option>
                <option>Two Colors</option>
                

                </select>
				
				
				<div class="color-pick letters-pick">
                <div class="color-row">
                <p>Letter color</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
               ' . Color::getColorsLinksBack("back_text_id2", "form_back_text_color2") . '
                </div>
                </div>

                </div>
				</div>
				
				
				
				<div class="color-pick letters-pick">
                <div class="color-row">
                <p>Top felt colour</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
                ' . Color::getColorsLinksBack1('back_text_id2', 'form_back_text_shadow2') . '
                </div>
                </div>

                </div>
				</div>
				
                
                </div>
                '
                    ),
                ));
                $inner_letters = ob_get_contents();
                ob_end_clean();

                $this->widget('CTabView', array(
                    'tabs' => array(
                        'Letters9' => array('title' => 'Letters', 'content' => $inner_letters),
                        'Patch1' => array('title' => 'Patch', 'content' => $image_widget6),
                        /* 'Letters and patch'=>'', */
                        'Tail1' => array('title' => 'Tail', 'content' => '<div class="control-group"  style="display:table;">
                <label class="control-label proc" for="inputEmail">Choose your letters:</label>
                <input type="text" maxlength="20" style="text-transform:lowercase;" onkeyup="change_txt_back(this.value,\'tail\',\'\')" id="tail_id">
                <!--<label class="control-label proc" for="inputEmail">Letter Font:</label>
                <select class="letter-select" onchange="change_txt_shadow(this.value)">
                <option value=\'one\'>One color</option>
                <option value=\'two\'>Two colors</option>
                </select>-->
				
				
				
				<label class="control-label proc" for="inputEmail">Letter Color(s):</label>

                <select class="letter-select">
                <option>One Color</option>
                <option>Two Colors</option>
                

                </select>
				
				
				<div class="color-pick">
                <div class="color-row">
                <p>Letter color</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
               ' . Color::getColorsLinksBack('back_text_id', 'form_back_text_color') . '
                </div>
                </div>

                </div>
				</div>
				
				
				
				<div class="color-pick">
                <div class="color-row">
                <p>Top felt colour</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
              ' . Color::getColorsLinksBack1('back_text_id', 'form_back_text_shadow') . '
                </div>
                </div>

                </div>
				</div>
				
				
                
                
                <label class="control-label proc tail-letter" for="inputEmail">Tail inner text:</label>
                <input type="text" maxlength="15" onkeyup="change_sub_tail(this.value)" id="subtail_id">
				
				
				<div class="color-pick">
                <div class="color-row">
                <p>Tail inner text color</p>
                <a class="pick-link picker-click" id=""><img src="' . Yii::app()->getBaseUrl(true) . '/img/picker-icon.png"/></a>

                <div class="toggle-picker">
                <div class="color-picker">
              ' . Color::getColorsLinksBack('sub_tail', 'form_sub_tail_color') . '
                </div>
                </div>

                </div>
				</div>
				
				
                
                </div>'),
                    ),
                    /* 'options'=>array(
                      'collapsible'=>true,
                      'selected'=>'none',
                      ), */
                    'htmlOptions' => array(
                    //'style'=>'width:500px;'
                    )
                ));
                ?>
            </div>

            <!--<div class="row1">

                <a href="javascript:void(0)" onclick="change_left('step10', 'step11')" class="btn next" >next</a>
                <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/checkout" class="btn bk"  >buy now</a>
                <a href="javascript:void(0)" onclick="change_left('step10', 'step9')" class="btn bk" >previous</a>
            </div>-->

            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>
        <div class="rev-left" id="step13" style="display:none;">
            <h4>Hood Type</h4>
            <h5 class="title8">choose your hood type</h5>

            <div class="colors">
                <div class="control-group">
                    <label class="radio">
                        <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                        Zippered Hood
                        <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path ?>/default/zip_hood.png'/> 
                    </label>

                </div>

                <div class="control-group">
                    <label class="radio">
                        <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                        Sailor
                        <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/media/types/<?= $cat_and_sub_path ?>/default/sailor.png'/> 
                    </label>


                </div>
            </div>

            <div class="row1">
                <a href="javascript:void(0)" class="btn bk"  >buy now</a>
                <a href="javascript:void(0)" onclick="change_left('step11', 'step10')" class="btn bk" >previous</a>
            </div>
            <img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/rev-shadow.png' class="rev-shadow"/> 
        </div>

        <div id="front_jacket">
            <?php echo $this->renderPartial('_jacket', array()); ?>
        </div>
        <div id="left_jacket" style="display:none;">
            <?php echo $this->renderPartial('_jacketsideleft', array()); ?>
        </div>
        <div id="right_jacket" style="display:none;">
            <?php echo $this->renderPartial('_jacketsideright', array()); ?>
        </div>
        <div id="back_jacket" style="display:none;">
            <?php echo $this->renderPartial('_jacketback', array()); ?>
        </div>

        <div class="rev-button">
            <?php echo $this->renderPartial('_Buybuttons', array()); ?>
        </div>

        <div>
            <?php echo $this->renderPartial('_steps', array()); ?>
        </div>

    </div>
    <!--end container--> 
</div>
<!--end wrapper--> 
</div>
<script>
    function change_left(from, to)
    {
        $(".loader").fadeIn(800);
        $(".loader").fadeOut("slow");
        document.getElementById(from + '_').className = "done";
        document.getElementById(to + '_').className = "currentstep";
        document.getElementById(from).style.display = 'none';
        document.getElementById(to).style.display = 'block';
        if (from == 'step7' && to == 'step8')
        {
            //alert("from7to8");
            document.getElementById('front_jacket').style.display = 'none';
            document.getElementById('right_jacket').style.display = 'none';
            document.getElementById('back_jacket').style.display = 'none';
            document.getElementById('left_jacket').style.display = 'block';
        }
        if (from == 'step8' && to == 'step7')
        {
            document.getElementById('front_jacket').style.display = 'block';
            document.getElementById('right_jacket').style.display = 'none';
            document.getElementById('back_jacket').style.display = 'none';
            document.getElementById('left_jacket').style.display = 'none';
        }
        if (from == 'step8' && to == 'step9')
        {
            document.getElementById('front_jacket').style.display = 'none';
            document.getElementById('right_jacket').style.display = 'block';
            document.getElementById('back_jacket').style.display = 'none';
            document.getElementById('left_jacket').style.display = 'none';
        }
        if (from == 'step9' && to == 'step8')
        {
            document.getElementById('front_jacket').style.display = 'none';
            document.getElementById('right_jacket').style.display = 'none';
            document.getElementById('back_jacket').style.display = 'none';
            document.getElementById('left_jacket').style.display = 'block';
        }
        if (from == 'step9' && to == 'step10')
        {
            document.getElementById('front_jacket').style.display = 'none';
            document.getElementById('right_jacket').style.display = 'none';
            document.getElementById('back_jacket').style.display = 'block';
            document.getElementById('left_jacket').style.display = 'none';
        }
        if (from == 'step10' && to == 'step9')
        {
            document.getElementById('front_jacket').style.display = 'none';
            document.getElementById('right_jacket').style.display = 'block';
            document.getElementById('back_jacket').style.display = 'none';
            document.getElementById('left_jacket').style.display = 'none';
        }

    }
    function pick_step(to, render)
    {
        $(".loader").fadeIn(800);
        $(".loader").fadeOut("slow");
        /*if (document.getElementById('index_').className == 'currentstep' || document.getElementById('index_').className == ' currentstep')
         {
         document.getElementById('index_').className = '';
         }
         else if (document.getElementById('index_').className == 'done currentstep')
         {
         document.getElementById('index_').className = 'done';
         }*/
        for (var i = 1; i <= 12; i++)
        {
            document.getElementById('step' + i).style.display = 'none';
            if (document.getElementById('step' + i + '_').className == 'currentstep' || document.getElementById('step' + i + '_').className == ' currentstep')
            {
                document.getElementById('step' + i + '_').className = '';
            }
            else if (document.getElementById('step' + i + '_').className == 'done currentstep')
            {
                document.getElementById('step' + i + '_').className = 'done';
            }
        }
        if (document.getElementById(to + '_').className == '' || document.getElementById(to + '_').className == ' ')
        {
            document.getElementById(to + '_').className = 'currentstep';
        }
        else if (document.getElementById(to + '_').className == 'done')
        {
            document.getElementById(to + '_').className = 'done currentstep';
        }
        else if (document.getElementById(to + '_').className == 'done currentstep')
        {
            document.getElementById(to + '_').className = 'done currentstep';
        }
        document.getElementById(to).style.display = 'block';

        document.getElementById('front_jacket').style.display = 'none';
        document.getElementById('right_jacket').style.display = 'none';
        document.getElementById('back_jacket').style.display = 'none';
        document.getElementById('left_jacket').style.display = 'none';

        document.getElementById(render).style.display = 'block';
    }
</script>

<!-----step3 buttons (snap)------->
<script>
    function ChangeSnapType(val)
    {
        $.ajax({
            url: "<?= Yii::app()->request->baseUrl ?>/classic/changeSnapType?val=" + val,
            success: function(data) {
                $('#snap_types').html(data);
            }
        });
        $('#hidden_zip_pic').css('display', 'none');
        if (val == 2)
        {
            $('#hidden_zip_pic').css('display', 'block');
            setTimeout(function() {
                $('#hidden_zip_pic').css('display', 'none');
            }, '3000');
        }
    }
</script>
<!-----end of step3 buttons (snap)------->
<script>
    function change_knit_type(value)
    {
        if (value == 1)
        {
            document.getElementById('single_stripe_div').style.display = "none";
            document.getElementById('double_stripe_div').style.display = "none";
            document.getElementById('knit_border_selection').style.display = "none";
            //front knit stripes, stripes border and forms knit stripes
            document.getElementById('knit_stripe').innerHTML = '';
            document.getElementById('form_knit_stripe').value = '';
            document.getElementById('knit_stripe_border').innerHTML = '';
            document.getElementById('form_knit_stripe_border').value = '';
            //left knit stripes and borders
            document.getElementById('left-knit_stripe_border').innerHTML = '';
            document.getElementById('left-knit_stripe').innerHTML = '';
            //right knit stripes and borders
            document.getElementById('right-knit_stripe_border').innerHTML = '';
            document.getElementById('right-knit_stripe').innerHTML = '';
            //back knit stripes and borders
            document.getElementById('back-knit_stripe_border').innerHTML = '';
            document.getElementById('back-knit_stripe').innerHTML = '';
        }
        else if (value == 2)
        {
            document.getElementById('single_stripe_div').style.display = "block";
            document.getElementById('double_stripe_div').style.display = "none";
            document.getElementById('knit_border_selection').style.display = "none";
            //front knit stripes, stripes border and forms knit stripes
            document.getElementById('knit_stripe').innerHTML = '';
            document.getElementById('form_knit_stripe').value = '';
            document.getElementById('knit_stripe_border').innerHTML = '';
            document.getElementById('form_knit_stripe_border').value = '';
            //left knit stripes and borders
            document.getElementById('left-knit_stripe_border').innerHTML = '';
            document.getElementById('left-knit_stripe').innerHTML = '';
            //right knit stripes and borders
            document.getElementById('right-knit_stripe_border').innerHTML = '';
            document.getElementById('right-knit_stripe').innerHTML = '';
            //back knit stripes and borders
            document.getElementById('back-knit_stripe_border').innerHTML = '';
            document.getElementById('back-knit_stripe').innerHTML = '';
        }
        else if (value == 3)
        {
            document.getElementById('single_stripe_div').style.display = "none";
            document.getElementById('double_stripe_div').style.display = "block";
            document.getElementById('knit_border_selection').style.display = "none";
            //front knit stripes, stripes border and forms knit stripes
            document.getElementById('knit_stripe').innerHTML = '';
            document.getElementById('form_knit_stripe').value = '';
            document.getElementById('knit_stripe_border').innerHTML = '';
            document.getElementById('form_knit_stripe_border').value = '';
            //left knit stripes and borders
            document.getElementById('left-knit_stripe_border').innerHTML = '';
            document.getElementById('left-knit_stripe').innerHTML = '';
            //right knit stripes and borders
            document.getElementById('right-knit_stripe_border').innerHTML = '';
            document.getElementById('right-knit_stripe').innerHTML = '';
            //back knit stripes and borders
            document.getElementById('back-knit_stripe_border').innerHTML = '';
            document.getElementById('back-knit_stripe').innerHTML = '';
        }
        else if (value == 4)
        {
            document.getElementById('single_stripe_div').style.display = "none";
            document.getElementById('double_stripe_div').style.display = "block";
            document.getElementById('knit_border_selection').style.display = "block";
        }
    }
</script>
<script>
    function change_stripe(value, type)
    {

        document.getElementById('knit_stripe').innerHTML = '<img src="<?= Yii::app()->getBaseUrl(true) ?>/media/stripes/' + value + '">';
        document.getElementById('back-knit_stripe').innerHTML = '<img src="<?= Yii::app()->getBaseUrl(true) ?>/media/stripes/back/' + value + '">';
        document.getElementById('right-knit_stripe').innerHTML = '<img src="<?= Yii::app()->getBaseUrl(true) ?>/media/stripes/right/' + value + '">';
        document.getElementById('left-knit_stripe').innerHTML = '<img src="<?= Yii::app()->getBaseUrl(true) ?>/media/stripes/left/' + value + '">';
        document.getElementById('form_knit_stripe').value = value;

        /*if(type=='1')
         {
         change_stripe_border('');
         document.getElementById('knit_border_selection').style.display="none";
         }
         else
         {
         document.getElementById('knit_border_selection').style.display="block";
         }*/
    }
</script>
<script>
    function change_stripe_border(value)
    {
        document.getElementById('knit_stripe_border').innerHTML = '<img src="<?= Yii::app()->getBaseUrl(true) ?>/media/stripeborder/' + value + '">';
        document.getElementById('back-knit_stripe_border').innerHTML = '<img src="<?= Yii::app()->getBaseUrl(true) ?>/media/stripeborder/back/' + value + '">';
        document.getElementById('right-knit_stripe_border').innerHTML = '<img src="<?= Yii::app()->getBaseUrl(true) ?>/media/stripeborder/right/' + value + '">';
        document.getElementById('left-knit_stripe_border').innerHTML = '<img src="<?= Yii::app()->getBaseUrl(true) ?>/media/stripeborder/left/' + value + '">';
        if (value != '')
        {
            document.getElementById('form_knit_stripe_border').value = value;
        }
        else
        {
            document.getElementById('form_knit_stripe_border').value = '';
        }
    }
</script>

<!---------- step 6 left chest----------->

<script>
    function change_txt(value, flag)
    {
        document.getElementById('left_text_id' + flag).innerHTML = value;
        document.getElementById('form_left_chest_text' + flag).value = value;
        document.getElementById('left-chest-id').innerHTML = ' ';
    }
</script>
<script>
    function change_txt_family(family, flag)
    {
        document.getElementById('left_text_id' + flag).style.fontFamily = family;
        document.getElementById('form_left_chest_text_family' + flag).value = family;
        if (family == 'vintage')
        {
            document.getElementById('left_text_id' + flag).style.fontSize = "15px";
        }
        else if (family == 'Athletic Block')
        {
            document.getElementById('left_text_id' + flag).style.fontSize = "11px";
        }
        else if (family == 'oldenglishnormal')
        {
            document.getElementById('left_text_id' + flag).style.fontSize = "10px";
        }
        else if (family == 'tail')
        {
            document.getElementById('left_text_id' + flag).style.fontSize = "10px";
        }
        else
        {
            document.getElementById('left_text_id' + flag).style.fontSize = "12px";
        }
    }
</script>
<script>
    function change_txt_color(value, flag)
    {
        document.getElementById('left_text_id' + flag).style.color = value;
        document.getElementById('form_left_chest_text_color' + flag).value = value;
        if (flag == 1) {
            document.getElementById('letter_color_picker1').style.background = value;
        } else if (flag == 2) {
            document.getElementById('letter_color_picker2').style.background = value;
        }
    }
</script>
<!----------------end step 6 left chest--------------->

<!----------------step 7 right chest--------------->
<script>
    function change_txt1(value)
    {
        document.getElementById('right-chest-id').innerHTML = ' ';
        document.getElementById('form_right_chest_image').value = '';
        if (value[0])
        {
            document.getElementById('r-1').innerHTML = value[0];
            document.getElementById('r-1').style.fontSize = "70px";
            document.getElementById('right_text_id').style.position = "relative";
            document.getElementById('right_text_id').style.top = "15px";
        }
        else
        {
            document.getElementById('r-1').innerHTML = '';
        }
        if (value[1])
        {
            document.getElementById('right_text_id').style.top = "5px";
            document.getElementById('r-2').innerHTML = value[1];
            document.getElementById('r-1').style.fontSize = "50px";
            document.getElementById('r-2').style.fontSize = "50px";
            document.getElementById('r-2').style.position = "relative";
            document.getElementById('r-2').style.top = "35px";
            var ff = document.getElementById('right_text_id').style.fontFamily;
            document.getElementById('right_text_id').style.letterSpacing = '-14px';
            if (value[0] == 'i' || value[0] == 'I' || value[1] == 'i' || value[1] == 'I')
            {
                document.getElementById('right_text_id').style.letterSpacing = '-6px';
            }

            /*		document.getElementById('r-2').style.cssFloat="left";
             document.getElementById('r-2').style.marginTop="20px";*/

        }
        else
        {
            document.getElementById('r-2').innerHTML = '';
        }
        if (value[2])
        {
            document.getElementById('right_text_id').style.top = "0px";
            document.getElementById('r-3').innerHTML = value[2];
            document.getElementById('r-1').style.fontSize = "35px";
            document.getElementById('r-2').style.fontSize = "35px";
            document.getElementById('r-2').style.position = "relative";
            document.getElementById('r-2').style.top = "22px";
            document.getElementById('r-3').style.fontSize = "35px";
            document.getElementById('r-3').style.position = "relative";
            document.getElementById('r-3').style.top = "45px";
            document.getElementById('right_text_id').style.letterSpacing = '-7px';
            if (value[0] == 'i' || value[0] == 'I' || value[1] == 'i' || value[1] == 'I' || value[2] == 'i' || value[2] == 'I')
            {
                document.getElementById('right_text_id').style.letterSpacing = '-3px';
            }
            /*		document.getElementById('r-2').style.cssFloat="none";
             document.getElementById('r-2').style.marginTop="0px";*/
        }
        else
        {
            document.getElementById('r-3').innerHTML = '';
        }

    }
</script>
<script>
    function change_txt_family1(value)
    {
        document.getElementById('right_text_id').style.fontFamily = value;
    }
</script>
<script>
    function change_txt_color1(value)
    {
        document.getElementById('right_text_id').style.color = value;
        document.getElementById('right_letter_color_picker1').style.background = value;
    }
</script>

<script>
    function navigate_pickers(option, type) {
        if (type == 'right_chest1') {
            if (option == 1) {
                $('#right_one_color1').css('display', 'block');
                $('#right_two_colors1').css('display', 'none');
            }
            else if (option == 2) {
                $('#right_two_colors1').css('display', 'block');
            }
        }
        else if (type == 'right_chest2') {

            if (option == 1) {
                $('#right_one_color2').css('display', 'block');
                $('#right_two_colors2').css('display', 'none');
            }
            else if (option == 2) {
                $('#right_two_colors2').css('display', 'block');
            }
        }
        else if (type == 'left_chest1') {

            if (option == 1) {
                $('#left_one_color1').css('display', 'block');
                $('#left_two_colors1').css('display', 'none');
            }
            else if (option == 2) {
                $('#left_two_colors1').css('display', 'block');
            }
        }
        else if (type == 'right_arm1') {

            if (option == 1) {
                $('#right_arm_picker_line_1').css('display', 'block');
                $('#right_arm_picker_line_2').css('display', 'none');
            }
            else if (option == 2) {
                $('#right_arm_picker_line_2').css('display', 'block');
            }
        }
    }
</script>
<!----------------end step 7 right chest--------------->

<!----------------step 8 left ARM--------------->

<script>
    function change_txt_leftside(value, flag)
    {
        document.getElementById('leftarm_text_id' + flag).innerHTML = value;
        document.getElementById('form_left_arm_text' + flag).value = value;
        document.getElementById('form_left_arm_image' + flag).value = '';

        var line2 = document.getElementById('form_left_arm_text1').value;

        if (value[0])
        {
            document.getElementById('leftarm_text_id' + flag).style.fontSize = '60px';
            if (line2[0])
            {
                document.getElementById('leftarm_text_id1').style.height = '52px';
            }
            if (line2[1])
            {
                document.getElementById('leftarm_text_id1').style.height = '45px';
            }
            if (line2[2])
            {
                document.getElementById('leftarm_text_id1').style.height = '41px';
            }
            if (line2[3])
            {
                document.getElementById('leftarm_text_id1').style.height = '40px';
            }
            if (line2[4])
            {
                document.getElementById('leftarm_text_id1').style.height = '37px';
            }
        }
        if (value[1])
        {
            document.getElementById('leftarm_text_id' + flag).style.fontSize = '50px';
            if (line2[0])
            {
                document.getElementById('leftarm_text_id1').style.height = '50px';
            }
            if (line2[1])
            {
                document.getElementById('leftarm_text_id1').style.height = '45px';
            }
            if (line2[2])
            {
                document.getElementById('leftarm_text_id1').style.height = '38px';
            }
            if (line2[3])
            {
                document.getElementById('leftarm_text_id1').style.height = '35px';
            }
            if (line2[4])
            {
                document.getElementById('leftarm_text_id1').style.height = '33px';
            }
        }
        if (value[2])
        {
            document.getElementById('leftarm_text_id' + flag).style.fontSize = '35px';
            if (line2[0])
            {
                document.getElementById('leftarm_text_id1').style.height = '45px';
            }
            if (line2[1])
            {
                document.getElementById('leftarm_text_id1').style.height = '40px';
            }
            if (line2[2])
            {
                document.getElementById('leftarm_text_id1').style.height = '38px';
            }
            if (line2[3])
            {
                document.getElementById('leftarm_text_id1').style.height = '35px';
            }
            if (line2[4])
            {
                document.getElementById('leftarm_text_id1').style.height = '33px';
            }
        }
        if (value[3])
        {
            document.getElementById('leftarm_text_id' + flag).style.fontSize = '28px';
        }
        if (value[4])
        {
            document.getElementById('leftarm_text_id' + flag).style.fontSize = '22px';
        }
    }
</script>
<script>
    function change_txt_family_leftside(value, flag)
    {
        document.getElementById('leftarm_text_id' + flag).style.fontFamily = value;
        document.getElementById('form_left_arm_text_family' + flag).value = value;
    }
</script>
<script>
    function change_txt_color_leftside(value, flag)
    {
        document.getElementById('leftarm_text_id' + flag).style.color = value;
        document.getElementById('leftarm-color-picker' + flag).style.background = value;
    }
</script>
<!----------------end step 8 left ARM--------------->
<!----------------step 9 right ARM--------------->
<script>
    function change_txt_rightside(value, flag)
    {
        document.getElementById('rightarm_text_id' + flag).innerHTML = value;
        document.getElementById('form_right_arm_text' + flag).value = value;
        document.getElementById('form_right_arm_image' + flag).value = '';

        var line2 = document.getElementById('form_right_arm_text1').value;

        if (value[0])
        {
            document.getElementById('rightarm_text_id' + flag).style.fontSize = '60px';
            if (line2[0])
            {
                document.getElementById('rightarm_text_id1').style.height = '52px';
            }
            if (line2[1])
            {
                document.getElementById('rightarm_text_id1').style.height = '45px';
            }
            if (line2[2])
            {
                document.getElementById('rightarm_text_id1').style.height = '41px';
            }
            if (line2[3])
            {
                document.getElementById('rightarm_text_id1').style.height = '40px';
            }
            if (line2[4])
            {
                document.getElementById('rightarm_text_id1').style.height = '37px';
            }
        }
        if (value[1])
        {
            document.getElementById('rightarm_text_id' + flag).style.fontSize = '50px';
            if (line2[0])
            {
                document.getElementById('rightarm_text_id1').style.height = '50px';
            }
            if (line2[1])
            {
                document.getElementById('rightarm_text_id1').style.height = '45px';
            }
            if (line2[2])
            {
                document.getElementById('rightarm_text_id1').style.height = '38px';
            }
            if (line2[3])
            {
                document.getElementById('rightarm_text_id1').style.height = '35px';
            }
            if (line2[4])
            {
                document.getElementById('rightarm_text_id1').style.height = '33px';
            }
        }
        if (value[2])
        {
            document.getElementById('rightarm_text_id' + flag).style.fontSize = '35px';
            if (line2[0])
            {
                document.getElementById('rightarm_text_id1').style.height = '45px';
            }
            if (line2[1])
            {
                document.getElementById('rightarm_text_id1').style.height = '40px';
            }
            if (line2[2])
            {
                document.getElementById('rightarm_text_id1').style.height = '38px';
            }
            if (line2[3])
            {
                document.getElementById('rightarm_text_id1').style.height = '35px';
            }
            if (line2[4])
            {
                document.getElementById('rightarm_text_id1').style.height = '33px';
            }
        }
        if (value[3])
        {
            document.getElementById('rightarm_text_id' + flag).style.fontSize = '28px';
        }
        if (value[4])
        {
            document.getElementById('rightarm_text_id' + flag).style.fontSize = '22px';
        }
    }
</script>
<script>
    function change_txt_family_rightside(value, flag)
    {
        document.getElementById('rightarm_text_id' + flag).style.fontFamily = value;
        document.getElementById('form_right_arm_text_family' + flag).value = value;
    }
</script>
<script>
    function change_txt_color_rightside(value, flag)
    {
        document.getElementById('rightarm_text_id' + flag).style.color = value;
        document.getElementById('form_right_arm_text_color' + flag).value = value;
    }
</script>
<!----------------end step 9 right ARM--------------->

<!----------------step 10 BACK--------------->
<script>
    function change_txt_back(value, type, flag)
    {
        if (type != 'tail')
        {
            value = value.toUpperCase();
            document.getElementById('back_text_id' + flag).innerHTML = value;

            if (document.getElementById('form_back_text_type').value != "letters")
            {
                document.getElementById('form_back_text_type').value = "letters";
                change_txt_family_back("'pro-block", flag);
            }
            if (value[0])
            {
                document.getElementById('back_text_id' + flag).style.fontSize = "60px";
                if (document.getElementById('back_text_id' + flag).style.fontFamily == 'oldenglishnormal')
                {
                    document.getElementById('back_text_id' + flag).style.fontSize = "54px";
                }
            }
            if (value[4])
            {
                document.getElementById('back_text_id' + flag).style.fontSize = "48px";
                if (document.getElementById('back_text_id' + flag).style.fontFamily == 'oldenglishnormal')
                {
                    document.getElementById('back_text_id' + flag).style.fontSize = "38px";
                }
            }
            if (value[6])
            {
                document.getElementById('back_text_id' + flag).style.fontSize = "36px";
                if (document.getElementById('back_text_id' + flag).style.fontFamily == 'oldenglishnormal')
                {
                    document.getElementById('back_text_id' + flag).style.fontSize = "33px";
                }
            }
            if (value[7])
            {
                document.getElementById('back_text_id' + flag).style.fontSize = "36px";
                if (document.getElementById('back_text_id' + flag).style.fontFamily == 'oldenglishnormal')
                {
                    document.getElementById('back_text_id' + flag).style.fontSize = "30px";
                }
            }
            if (value[8])
            {
                document.getElementById('back_text_id' + flag).style.fontSize = "36px";
                if (document.getElementById('back_text_id' + flag).style.fontFamily == 'oldenglishnormal')
                {
                    document.getElementById('back_text_id' + flag).style.fontSize = "26px";
                }
            }
            if (value[9])
            {
                document.getElementById('back_text_id' + flag).style.fontSize = "24px";
                if (document.getElementById('back_text_id' + flag).style.fontFamily == 'oldenglishnormal')
                {
                    document.getElementById('back_text_id' + flag).style.fontSize = "22px";
                }
            }
            if (value[11])
            {
                document.getElementById('back_text_id' + flag).style.fontSize = "24px";
                if (document.getElementById('back_text_id' + flag).style.fontFamily == 'oldenglishnormal')
                {
                    document.getElementById('back_text_id' + flag).style.fontSize = "20px";
                }
            }
            if (value[12])
            {
                document.getElementById('back_text_id' + flag).style.fontSize = "24px";
                if (document.getElementById('back_text_id' + flag).style.fontFamily == 'oldenglishnormal')
                {
                    document.getElementById('back_text_id' + flag).style.fontSize = "17px";
                }
            }
            if (value[14])
            {
                document.getElementById('back_text_id' + flag).style.fontSize = "19px";
                if (document.getElementById('back_text_id' + flag).style.fontFamily == 'oldenglishnormal')
                {
                    document.getElementById('back_text_id' + flag).style.fontSize = "16px";
                }
            }
            if (value[15])
            {
                document.getElementById('back_text_id' + flag).style.fontSize = "18px";
                if (document.getElementById('back_text_id' + flag).style.fontFamily == 'oldenglishnormal')
                {
                    document.getElementById('back_text_id' + flag).style.fontSize = "13px";
                }
            }
            if (value[18])
            {
                document.getElementById('back_text_id' + flag).style.fontSize = "17px";
                if (document.getElementById('back_text_id' + flag).style.fontFamily == 'oldenglishnormal')
                {
                    document.getElementById('back_text_id' + flag).style.fontSize = "12px";
                }
            }
            document.getElementById('form_back_text' + flag).value = value;
        }
        else//tail
        {
            value = value.toLowerCase();
            document.getElementById('form_back_text1').value = '';
            document.getElementById('form_back_text_family1').value = '';
            document.getElementById('back_text_id1').innerHTML = '';
            document.getElementById('form_back_text_color1').value = '';
            document.getElementById('form_back_text_shadow1').value = '';

            document.getElementById('form_back_text2').value = '';
            document.getElementById('form_back_text_family2').value = '';
            document.getElementById('back_text_id2').innerHTML = '';
            document.getElementById('form_back_text_color2').value = '';
            document.getElementById('form_back_text_shadow2').value = '';

            document.getElementById('back_text_id').innerHTML = value;
            document.getElementById('form_back_img').value = "";
            document.getElementById('back_img_id').innerHTML = "";
            document.getElementById('form_back_text_type').value = "tail";
            document.getElementById('letters_id').value = "";
            document.getElementById('letters_id1').value = "";
            document.getElementById('letters_id2').value = "";

            var len = value.length;
            if (value[len - 1] == ' ')
            {
                value--;
            }

            if (value[2])
            {
                change_txt_family_back("tail", '');
                document.getElementById('back_text_id').style.fontSize = '66px';

                document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; bottom:2px;'>" + 1 + "</span>";
                document.getElementById('back_text_id').style.marginLeft = '5px';
                document.getElementById('sub_tail').style.fontSize = '10px';
                document.getElementById('sub_tail').style.bottom = '53px';
                document.getElementById('sub_tail').style.right = '25px';

                if (value[3])
                {
                    document.getElementById('back_text_id').style.marginLeft = '0px';
                    document.getElementById('back_text_id').style.fontSize = '49px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:3px;'>" + 1 + "</span>";
                    document.getElementById('sub_tail').style.fontSize = '10px';
                    document.getElementById('sub_tail').style.bottom = '46px';
                    document.getElementById('sub_tail').style.right = '33px';
                }
                if (value[4])
                {
                    document.getElementById('back_text_id').style.fontSize = '43px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:4px;'>" + 1 + "</span>";
                    document.getElementById('sub_tail').style.bottom = '46px';
                    document.getElementById('sub_tail').style.right = '25px';
                }
                if (value[5])
                {
                    document.getElementById('back_text_id').style.fontSize = '40px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:5px;'>" + 1 + "</span>";
                    document.getElementById('sub_tail').style.bottom = '44px';
                    document.getElementById('sub_tail').style.right = '23px';
                }
                if (value[6])
                {
                    document.getElementById('back_text_id').style.fontSize = '34px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:7px;'>" + 1 + "</span>";
                    document.getElementById('sub_tail').style.bottom = '41px';
                    document.getElementById('sub_tail').style.right = '25px';
                }
                if (value[7])
                {
                    document.getElementById('back_text_id').style.fontSize = '30px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:7px;'>" + 1 + "</span>";
                    document.getElementById('sub_tail').style.right = '30px';
                }
                if (value[8])
                {
                    document.getElementById('back_text_id').style.fontSize = '26px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:8px;'>" + 1 + "</span>";
                }
                if (value[9])
                {
                    document.getElementById('back_text_id').style.fontSize = '24px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:8px;'>" + 1 + "</span>";
                }
                if (value[10])
                {
                    document.getElementById('back_text_id').style.fontSize = '21px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:8px;'>" + 1 + "</span>";
                }
                if (value[11])
                {
                    document.getElementById('back_text_id').style.fontSize = '20px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:8px;'>" + 1 + "</span>";
                }
                if (value[12])
                {
                    document.getElementById('back_text_id').style.fontSize = '18px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:8px;'>" + 1 + "</span>";
                }
                if (value[13])
                {
                    document.getElementById('back_text_id').style.fontSize = '17px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:8px;'>" + 1 + "</span>";
                }
                if (value[14])
                {
                    document.getElementById('back_text_id').style.fontSize = '16px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:9px;'>" + 1 + "</span>";
                }
                if (value[15])
                {
                    document.getElementById('back_text_id').style.fontSize = '16px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:9px;'>" + 1 + "</span>";
                }
                if (value[16])
                {
                    document.getElementById('back_text_id').style.fontSize = '14px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:9px;'>" + 1 + "</span>";
                }
                if (value[17])
                {
                    document.getElementById('back_text_id').style.fontSize = '13px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:9px;'>" + 1 + "</span>";
                }//done until hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
                if (value[18])
                {
                    document.getElementById('back_text_id').style.fontSize = '13px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:9px;'>" + 1 + "</span>";
                }
                if (value[19])
                {
                    document.getElementById('back_text_id').style.fontSize = '12px';
                    document.getElementById('back_text_id').innerHTML = value + "<span style='font-size:62px; position:relative; top:9px;'>" + 1 + "</span>";
                }



            }
            else
            {
                document.getElementById('back_text_id').innerHTML = '';
                value = '';
            }
            document.getElementById('form_back_text').value = value;//tail
        }
        change_sub_tail(document.getElementById('subtail_id').value);
    }
</script>
<script>
    function change_txt_family_back(value, flag)
    {
        /*if(value=="vintage")
         {
         document.getElementById('back_text_id'+flag).style.fontSize="23px";
         }
         else if(value=="tail")
         {
         document.getElementById('back_text_id'+flag).style.fontSize="22px";
         }
         else
         {
         document.getElementById('back_text_id'+flag).style.fontSize="18px";
         }*/
        document.getElementById('back_text_id' + flag).style.fontFamily = value;
        document.getElementById('form_back_text_family' + flag).value = value;
        change_txt_back(document.getElementById('letters_id' + flag).value, document.getElementById('form_back_text_type').value, flag);
    }
</script>
<script>
    function change_txt_color_back(value, id, form_id)
    {

        document.getElementById(id).style.color = value;
        document.getElementById(form_id).value = value;

    }
</script>
<script>
    function change_txt_color_back1(value, text_id, form_id)
    {
        document.getElementById(text_id).style.textShadow = '-1px -1px 0 ' + value + ', 1px -1px 0 ' + value + ', -1px 1px 0 ' + value + ', 1px 1px 0 ' + value + '';
        if (text_id == 'right_text_id') {
            document.getElementById('right_letter_color_picker2').style.background = value;
        } else if (text_id == 'leftarm_text_id1') {
            document.getElementById('leftarm-color-picker2').style.background = value;
        }
        //document.getElementById('outlet_color_picker1').style.background = value;
    }
</script>
<script>
    function change_sub_tail(value)
    {
        if (document.getElementById('form_back_text_type').value != "letters" && document.getElementById('form_back_text').value != '')
        {
            document.getElementById('sub_tail').innerHTML = value;
            document.getElementById('form_sub_tail').value = value;
        }
        else
        {
            document.getElementById('sub_tail').innerHTML = '';
            document.getElementById('form_sub_tail').value = '';
        }
    }
</script>
<!----------------step 10 BACK--------------->
<script type="text/javascript">

    $('.picker-click').click(function() {
        $(this).next().toggle();

    });

    $('.round').click(function() {
        $(this).parent().parent().toggle();

    });

</script>


<!-----change steps------->
<script>
    function changeSteps(ids, li_class) {
        var steps = ids.split(',');
        for (var i = 1; i <= 12; i++) {
            var found = jQuery.inArray(i.toString(), steps);
            if (found >= 0) {
                $('#step' + i + '_').find('a').attr('class', '');
            } else {
                $('#step' + i + '_').find('a').attr('class', 'disable-btn');
            }
        }
        $('#cover').attr('class', li_class);
    }
</script>