
<div class="content">
<div class="emak-academy">

<h2>Register</h2>


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-register-form',
	'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>


	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'email',array('class'=>'span5')); ?>
    
    <?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5')); ?>

    <?php echo $form->passwordFieldRow($model,'password_repeat',array('class'=>'span5')); ?>

    <?php if(CCaptcha::checkRequirements()): ?>
	
    	<?php echo $form->textFieldRow($model,'verifyCode',array('class'=>'span5')); ?>
        <?php $this->widget('CCaptcha'); ?>
        <?php echo $form->error($model,'verifyCode' ,array('class'=>'log-error')); ?>
        <div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
    
	<?php endif; ?>

    <?php echo CHtml::submitButton('Submit' ,array('class'=>'btn btn-large btn-danger')); ?>


<?php $this->endWidget(); ?>



<div class="clear"></div>

</div>
</div>