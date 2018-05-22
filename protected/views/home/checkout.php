<?php  // set the page title
$this->pageTitle=Yii::app()->name . ' - Checkout';
?>

<div class="wrapper">
<h3 class="main-title">billing address</h3>

<div class="checkout">
			
            <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'settings-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('class'=>"bs-docs-example form-horizontal",'enctype' => 'multipart/form-data'),
	
)); ?>
            <?php if(Yii::app()->user->isGuest){ ?>
            	<div class="control-group">
              <label class="control-label">first name:</label>
              <div class="controls">
                <?php echo $form->textField($userd,'first_name'); ?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">last name:</label>
              <div class="controls">
                <?php echo $form->textField($userd,'last_name'); ?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">email:</label>
              <div class="controls">
                <?php echo $form->textField($userd,'email'); ?>
              </div>
            </div>
            <?php } ?>
            <div class="control-group">
              <label class="control-label">country:</label>
              <div class="controls">
                
				<?php echo $form->dropDownList($userd,'b_country_id',CHtml::listData(AllCountries::model()->findAll(),'country_id','country_name')); ?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">city:</label>
              <div class="controls">
                <?php echo $form->textField($userd,'b_city'); ?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">address:</label>
              <div class="controls">
                <?php echo $form->textField($userd,'b_address'); ?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">zip:</label>
              <div class="controls">
                <?php echo $form->textField($userd,'b_zipcode'); ?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">phone number:</label>
              <div class="controls">
                <?php echo $form->textField($userd,'b_phone_no'); ?>
              </div>
            </div>
           
   
            
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/content-shadow.png' class="check-shadow"/>
</div><!--end checkout-->


<h3 class="main-title">shipping address</h3>

<div class="checkout">
<div class="bs-docs-example form-horizontal">
<div class="control-group">
              <label class="control-label">country:</label>
              <div class="controls">
                
				<?php echo $form->dropDownList($userd,'country_id',CHtml::listData(AllCountries::model()->findAll(),'country_id','country_name')); ?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">city:</label>
              <div class="controls">
                <?php echo $form->textField($userd,'city'); ?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">address:</label>
              <div class="controls">
                <?php echo $form->textField($userd,'address'); ?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">zip:</label>
              <div class="controls">
                <?php echo $form->textField($userd,'zipcode'); ?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">phone number:</label>
              <div class="controls">
                <?php echo $form->textField($userd,'phone_no'); ?>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
              
                <button type="submit" class="btn next">Bay now</button>
                 <button type="submit" class="btn bk">back</button>
              </div>
            </div>
           <?php $this->endWidget(); ?>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/content-shadow.png' class="check-shadow"/>
</div><!--end checkout-->
</div><!--end checkout-->


</div><!--end wrapper-->
