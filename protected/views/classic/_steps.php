<!--<table class="table x">
                    <thead>
                        <tr>
                        <th width="18%"></th>
                        <th width="82%"></th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr  class="active" id="index_">
                         <td class="first_td"><div class="status_item"></div></td>
                         <td class="first_td stepname">Body type</td> 
                        </tr>
                        
                        <tr id="step1_">
                        <td><div class="status_item"></div></td>
                        <td class="stepname">Body Color</td> 
                        </tr>
                        
                        <tr id="step2_">
                        <td><div class="status_item"></div></td>
                        <td class="stepname">Sleeves Color</td>
                        </tr>
                        
                        <tr id="step3_">
                        <td><div class="status_item"></div></td>
                        <td  class="stepname">Buttons Color</td> 
                        </tr>
                        
                        <tr id="step4_">
                        <td><div class="status_item"></div></td>
                        <td class="stepname">Pockets Color</td>
                        </tr>
                        
                        <tr id="step5_">
                         <td><div class="status_item"></div></td>
                         <td class="stepname">Knit Pattern</td>
                        </tr>
                        
                        <tr id="step6_">
                        <td><div class="status_item"></div></td>
                        <td class="stepname">Right Chest Design </td> 
                        </tr>
                        
                        <tr id="step7_">
                        <td><div class="status_item"></div></td>
                        <td class="stepname">Left Chest Design </td>
                        </tr>
                        
                        <tr id="step8_">
                         <td><div class="status_item"></div></td>
                         <td class="stepname">Right Arm Pattern</td>
                        </tr>
                        
                        <tr id="step9_">
                        <td><div class="status_item"></div></td>
                        <td class="stepname">Left Arm Pattern</td>   
                        </tr>
                        
                        <tr id="step10_">
                        <td><div class="status_item"></div></td>
                        <td class="stepname">Back Pattern</td> 
                        </tr>
                        
                    </tbody>
                </table>-->


<ul class="steps">
    <li class="currentstep" id="step1_"><a href="javascript:void(0);" onclick="pick_step('step1', 'front_jacket')">Jacket Type<img src="<?= Yii::app()->request->baseUrl ?>/img/done.png"/></a></li>
    <li id="step2_"><a href="javascript:void(0);" onclick="pick_step('step2', 'front_jacket')">Measurements<img src="<?= Yii::app()->request->baseUrl ?>/img/done.png"/></a></li>

    <li id="step3_"><a href="javascript:void(0);"  onclick="pick_step('step3', 'front_jacket')">Body Color <img src="<?= Yii::app()->request->baseUrl ?>/img/done.png"/></a></li>
    <?php if(Yii::app()->user->getState('subcat')=="retro"){
        ?>
        <li id="step4_"><a href="javascript:void(0);" onclick="pick_step('step4', 'front_jacket')">Shoulder insert <img src="<?= Yii::app()->request->baseUrl ?>/img/done.png"/></a></li>

    <?php
    }else{
        ?>
            <li id="step4_"><a href="javascript:void(0);" onclick="pick_step('step4', 'front_jacket')">Sleeves Color <img src="<?= Yii::app()->request->baseUrl ?>/img/done.png"/></a></li>

        <?php
    } ?>
    <li id="step5_"><a href="javascript:void(0);"  onclick="pick_step('step5', 'front_jacket')">Snap Type <img src="<?= Yii::app()->request->baseUrl ?>/img/done.png"/></a></li>
    <li id="step6_"><a href="javascript:void(0);" onclick="pick_step('step6', 'front_jacket')">Pockets Color <img src="<?= Yii::app()->request->baseUrl ?>/img/done.png"/></a></li>
    <li id="step7_"><a href="javascript:void(0);" onclick="pick_step('step7', 'front_jacket')">Knit Pattern <img src="<?= Yii::app()->request->baseUrl ?>/img/done.png"/></a></li>
    <li class="plain" id="cover"></li>
    <li id="step8_"><a href="javascript:void(0);" class="disable-btn" onclick="pick_step('step8', 'front_jacket')">Right Chest Design <img src="<?= Yii::app()->request->baseUrl ?>/img/done.png"/></a></li>
    <li id="step9_"><a href="javascript:void(0);" class="disable-btn" onclick="pick_step('step9', 'front_jacket')">Left Chest Design <img src="<?= Yii::app()->request->baseUrl ?>/img/done.png"/></a></li>
    <li id="step10_"><a href="javascript:void(0);" class="disable-btn" onclick="pick_step('step10', 'left_jacket')">Right Arm Pattern <img src="<?= Yii::app()->request->baseUrl ?>/img/done.png"/></a></li>
    <li id="step11_"><a href="javascript:void(0);" class="disable-btn" onclick="pick_step('step11', 'right_jacket')">Left Arm Pattern <img src="<?= Yii::app()->request->baseUrl ?>/img/done.png"/></a></li>
    <li id="step12_"><a href="javascript:void(0);" class="disable-btn"  onclick="pick_step('step12', 'back_jacket')">Back Pattern <img src="<?= Yii::app()->request->baseUrl ?>/img/done.png"/></a></li>

<!--<li id="step11_"><a href="javascript:void(0);"  onclick="pick_step('step11','back_jacket')">Hood Type <img src="<?= Yii::app()->request->baseUrl ?>/img/done.png"/></a></li>-->
</ul>