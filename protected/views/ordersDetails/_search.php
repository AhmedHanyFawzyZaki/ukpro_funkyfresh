<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'orders_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'qty',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pro_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'price',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'cat_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'subcat_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'body',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'collar',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'cuff_left',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'cuff_right',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'pocket_bottom_left',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'pocket_bottom_right',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'knit',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'sleeve_left',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'sleeve_right',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'buttons',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
