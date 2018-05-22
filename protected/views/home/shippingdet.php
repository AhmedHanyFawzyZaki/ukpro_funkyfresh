
<?php  // set the page title
$this->pageTitle=Yii::app()->name . ' - settings';
?>

<div class="wrapper">
<h3 class="main-title">My profile</h3>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/title-shadow.png'/>

<div class="container">

<?php echo $this->renderPartial('profile_left',array()); ?><!--end left-menu-->

<div class="content">
<div class="settings">

<div class="user-info">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'settings-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('class'=>"bs-docs-example form-horizontal",'enctype' => 'multipart/form-data'),
	
)); ?>

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
               
                <button class="btn" type="submit">save changes</button>
              </div>
            </div>
          <?php $this->endWidget(); ?>

</div><!--end user-info-->
</div><!--end settings-->
</div><!--end content-->
</div><!--end container-->

</div><!--end wrapper-->
