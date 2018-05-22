<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'category-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); 


$img_url=Yii::app()->baseUrl.'/media/types/'.strtolower($model->title);
?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php 
	
		if($model->isNewRecord == '1')
		{
			echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255));
	
		}
		else
		{
			echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255,'readonly'=>'readonly'));
		} 
	?>
    
    <?php echo $form->textFieldRow($model,'price',array('class'=>'span5','maxlength'=>255,'append'=>'$')); ?>

	<?php 
	
		echo $form->label($model,'desc');
	
		$this->widget('application.extensions.eckeditor.ECKEditor', array(
                'model'=>$model,
                'attribute'=>'desc',
                ));

	?>
    
    <?php echo $form->fileFieldRow($model,'image',array('class'=>'span5','maxlength'=>255));

	if($model->isNewRecord != '1' and $model->image!='')
	{
		echo "<p>". Chtml::image($img_url.'/'.$model->image ,'image',array('width'=>200)) ."</p>";

	}
	 ?>
     
      <?php echo $form->fileFieldRow($model,'image1',array('class'=>'span5','maxlength'=>255));

	if($model->isNewRecord != '1' and $model->image1!='')
	{
		echo "<p>". Chtml::image($img_url.'/'.$model->image1 ,'image1',array('width'=>200)) ."</p>";

	}
	 ?>
     
     <?php echo $form->fileFieldRow($model,'image2',array('class'=>'span5','maxlength'=>255));

	if($model->isNewRecord != '1' and $model->image2!='')
	{
		echo "<p>". Chtml::image($img_url.'/'.$model->image2 ,'image2',array('width'=>200)) ."</p>";

	}
	 ?>
     
     <?php echo $form->fileFieldRow($model,'image3',array('class'=>'span5','maxlength'=>255));

	if($model->isNewRecord != '1' and $model->image3!='')
	{
		echo "<p>". Chtml::image($img_url.'/'.$model->image3 ,'image3',array('width'=>200)) ."</p>";

	}
	 ?>

	<?php //echo $form->textFieldRow($model,'sort',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'image',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldRow($model,'temp1',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'temp2',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
