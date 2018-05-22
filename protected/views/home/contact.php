<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<div class="wrapper">
<div class="emak-academy">


<h2 class="title3">Contact Us</h2>

<div class="main">
<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'contact-form',
'enableAjaxValidation'=>true,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	
)); ?>

<?php echo $form->errorSummary($model); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>120)); ?>

		 <?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>120)); ?>        


		 <?php echo $form->textFieldRow($model,'subject',array('class'=>'span5','maxlength'=>128)); ?>         

	<?php echo $form->textAreaRow($model,'body',array('rows'=>6, 'cols'=>50,'class'=>'span5')); ?>        

	<?php if(CCaptcha::checkRequirements()): ?>

		<?php $this->widget('CCaptcha'); ?>
         <?php echo $form->textFieldRow($model,'verifyCode',array('maxlength'=>100,'class'=>'span5')); ?>        
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
	<?php endif; ?>
    
    
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>


<?php $this->endWidget(); ?>

<?php endif; ?>


<div class="clear"></div>


</div><!--end main-->
</div>
</div><!--end wrapper-->