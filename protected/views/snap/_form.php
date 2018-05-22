<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'snap-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>
        
        <?php echo $form->dropDownListRow($model,'sub_category',CHtml::listData(Subcategory::model()->findAll(),'id','title'),array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'color',array('class'=>'span5','maxlength'=>255));
	echo'<div class="control-group ">';
	echo $form->LabelEx($model,'color', array('class'=>'control-label'));
	echo '<div class="controls">';
	
			$this->widget('application.extensions.SMiniColors.SActiveColorPicker', array(
			    'model' => $model,
			    'attribute' => 'color',
			    'hidden'=>false, // defaults to false - can be set to hide the textarea with the hex
			    'options' => array(), // jQuery plugin options
			    'htmlOptions' => array('class'=>'span5'), // html attributes
		));
			echo '</div></div>';
	?>
    
	<?php echo $form->dropDownListRow($model,'type',array("0"=>'Snap','1'=>'Zip','2'=>'Hidden Zip'),array('class'=>'span5', 'onchange'=>'ToggleExtraImage(this.value)')); ?>
    
    <?php 
	$style="style='display:none;'";
	if($model->isNewRecord != '1' && $model->type=='2')
	{
		$style="style='display:block;'";
	}
	?>
    
    <div id="extra" <?=$style;?>>
		<?php
        echo $form->fileFieldRow($model,'extra_image',array('class'=>'span5','maxlength'=>255));
    
        if($model->isNewRecord != '1' and $model->extra_image!='')
        {
            echo "<p>". Chtml::image(Yii::app()->baseUrl.'/media/snap/'.$model->extra_image ,'image',array('width'=>200)) ."</p>";
    
        }
         ?>
    </div>

	<?php echo $form->fileFieldRow($model,'image',array('class'=>'span5','maxlength'=>255));

	if($model->isNewRecord != '1' and $model->image!='')
	{
		echo "<p>". Chtml::image(Yii::app()->baseUrl.'/media/snap/'.$model->image ,'image',array('width'=>200)) ."</p>";

	}
	?>
     
    <?php echo $form->fileFieldRow($model,'left_image',array('class'=>'span5','maxlength'=>255));

	if($model->isNewRecord != '1' and $model->left_image!='')
	{
		echo "<p>". Chtml::image(Yii::app()->baseUrl.'/media/snap/'.$model->left_image ,'left_image',array('width'=>200)) ."</p>";

	}
	?>
    
    <?php echo $form->fileFieldRow($model,'right_image',array('class'=>'span5','maxlength'=>255));

	if($model->isNewRecord != '1' and $model->right_image!='')
	{
		echo "<p>". Chtml::image(Yii::app()->baseUrl.'/media/snap/'.$model->right_image ,'right_image',array('width'=>200)) ."</p>";

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

<script>
	function ToggleExtraImage(val)
	{
		$('#extra').css('display','none');
		if(val=='2')
		{
			$('#extra').css('display','block');
		}
	}
</script>