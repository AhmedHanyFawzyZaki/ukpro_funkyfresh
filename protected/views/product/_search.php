<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'desc',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'main_image',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'gallery_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'price',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cat_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'color_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'button',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'cuff',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'top_right_pocket',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'top_left_pocket',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'bottom_right_pocket',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'bottom_left_pocket',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'collar',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'top_right_patch',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'top_left_patch',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'bottom_right_patch',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'bottom_left_patch',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'hoode',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'upper_body',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'bottom_body',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'right_body',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'left_body',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'knit',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'inner_lining',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'right_sleeve',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'left_sleeve',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
