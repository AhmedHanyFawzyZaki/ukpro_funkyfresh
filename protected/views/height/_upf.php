<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'height-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('style'=>'width: 82% !important;'),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>
    
    <?php if($details){ ?>
    <?php foreach($details as $dt){ ?>
    <div class='clone'>
    <div style="float:left;">
    <label>weight</label>
    <input type="text" name="weight[]" maxlength="260" class="span2" value="<?php echo $dt->weight; ?>" />
    </div>
    <div style="float:left;">
    <label>size</label>
    <input type="text" name="size[]" maxlength="260" class="span2" value="<?php echo $dt->size; ?>" />
    </div>
    <div style="float:left;">
    <label>shoulder</label>
    <input type="text" name="shoulder[]" maxlength="260" class="span2" value="<?php echo $dt->shoulder; ?>" />
    </div>
    <div style="float:left;">
    <label>sleeve</label>
    <input type="text" name="sleeve[]" maxlength="260" class="span2" value="<?php echo $dt->sleeve; ?>" />
    </div>
    <div style="float:left;">
    <label>waist</label>
    <input type="text" name="waist[]" maxlength="260" class="span2" value="<?php echo $dt->waist; ?>" />
    </div>
    <div style="clear:both;">
    </div>
    </div>
    <?php } ?>
    <?php } ?>

	<?php 
								  $this->widget('ext.reCopy.ReCopyWidget', array(
									 'targetClass'=>'clone',
									 'addButtonLabel'=>'+ add another height details',
									 'addButtonCssClass'=>'btn btn-link',
									 'removeButtonLabel'=>'- remove ',
									 'removeButtonCssClass'=>'btn btn-link remove_btn',
									 
								  )); 
								?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
