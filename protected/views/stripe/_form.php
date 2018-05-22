<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'stripe-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>
    
    <?php echo $form->dropDownListRow($model,'sub_category',CHtml::listData(Subcategory::model()->findAll(),'id','title'),array('class'=>'span5')); ?>
    
    <?php echo $form->radioButtonListRow($model,'type',array('1'=>'Single','2'=>'Double')); ?>
    
    <?php echo $form->textFieldRow($model,'color_title',array('class'=>'span5','maxlength'=>255)); ?>
    
    <?php //echo $form->textFieldRow($model,'color',array('class'=>'span5','maxlength'=>255));
	echo'<br><div class="control-group ">';
	echo '<div class="controls">';
	echo CHtml::activeLabel($model,'icon');
	
			$this->widget('application.extensions.SMiniColors.SActiveColorPicker', array(
			    'model' => $model,
			    'attribute' => 'icon',
			    'hidden'=>false, // defaults to false - can be set to hide the textarea with the hex
			    'options' => array(), // jQuery plugin options
			    'htmlOptions' => array('class'=>'span5'), // html attributes
		));
			echo '</div></div>';
	?>

	<?php echo $form->fileFieldRow($model,'image',array('class'=>'span5','maxlength'=>255));

	if($model->isNewRecord != '1' and $model->image!='')
	{
		echo "<p>". Chtml::image(Yii::app()->baseUrl.'/media/stripes/'.$model->image ,'image',array('width'=>200)) ."</p>";

	}
	 ?>
     <?php echo $form->fileFieldRow($model,'left_image',array('class'=>'span5','maxlength'=>255));

	if($model->isNewRecord != '1' and $model->left_image!='')
	{
		echo "<p>". Chtml::image(Yii::app()->baseUrl.'/media/stripes/left/'.$model->left_image ,'left_image',array('width'=>200)) ."</p>";

	}
	 ?>
     <?php echo $form->fileFieldRow($model,'right_image',array('class'=>'span5','maxlength'=>255));

	if($model->isNewRecord != '1' and $model->right_image!='')
	{
		echo "<p>". Chtml::image(Yii::app()->baseUrl.'/media/stripes/right/'.$model->right_image ,'right_image',array('width'=>200)) ."</p>";

	}
	 ?>
     <?php echo $form->fileFieldRow($model,'back_image',array('class'=>'span5','maxlength'=>255));

	if($model->isNewRecord != '1' and $model->back_image!='')
	{
		echo "<p>". Chtml::image(Yii::app()->baseUrl.'/media/stripes/back/'.$model->back_image ,'back_image',array('width'=>200)) ."</p>";

	}
	 ?>
     

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
