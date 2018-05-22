<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'orders-details-form',
	'enableAjaxValidation'=>false,
)); 

$img_url=Yii::app()->baseUrl.'/media/types/'.strtolower(Category::model()->findByPk($model->cat_id)->title).'/'.strtolower(Subcategory::model()->findByPk($model->subcat_id)->title);
?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldRow($model,'orders_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'qty',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'pro_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'price',array('class'=>'span5','maxlength'=>11,'append'=>'$')); ?>

	<?php echo $form->dropDownListRow($model,'cat_id', Category::model()->getCategories(),array('class'=>'span5','empty'=>'Type')); ?>
    
    <?php echo $form->dropDownListRow($model,'subcat_id', Subcategory::model()->getSubCategories(),array('class'=>'span5','empty'=>'SubType')); ?>

	<?php //echo $form->textFieldRow($model,'subcat_id',array('class'=>'span5')); ?>

	<?php 
		echo $form->fileFieldRow($model,'body',array('class'=>'span5','maxlength'=>255)); 
		if($model->isNewRecord != '1' and $model->body!='')
		{
			echo "<p>". Chtml::image($img_url.'/'.$model->body.'/body.png' ,'body',array('width'=>200)) ."</p>";
	
		}
	?>

	<?php 
		echo $form->fileFieldRow($model,'collar',array('class'=>'span5','maxlength'=>255)); 
		if($model->isNewRecord != '1' and $model->collar!='')
		{
			echo "<p>". Chtml::image($img_url.'/'.$model->collar.'/collar.png' ,'collar',array('width'=>200)) ."</p>";
	
		}
	?>

	<?php 
		echo $form->fileFieldRow($model,'cuff_left',array('class'=>'span5','maxlength'=>255)); 
		if($model->isNewRecord != '1' and $model->cuff_left!='')
		{
			echo "<p>". Chtml::image($img_url.'/'.$model->cuff_left.'/cuff-left.png' ,'cuff_left',array('width'=>200)) ."</p>";
	
		}
	?>

	<?php 
		echo $form->fileFieldRow($model,'cuff_right',array('class'=>'span5','maxlength'=>255)); 
		if($model->isNewRecord != '1' and $model->cuff_right!='')
		{
			echo "<p>". Chtml::image($img_url.'/'.$model->cuff_right.'/cuff-right.png' ,'cuff_right',array('width'=>200)) ."</p>";
	
		}
	?>

	<?php 
		echo $form->fileFieldRow($model,'pocket_bottom_left',array('class'=>'span5','maxlength'=>255)); 
		if($model->isNewRecord != '1' and $model->pocket_bottom_left!='')
		{
			echo "<p>". Chtml::image($img_url.'/'.$model->pocket_bottom_left.'/pocket-left.png' ,'pocket_bottom_left',array('width'=>200)) ."</p>";
	
		}
	?>

	<?php 
		echo $form->fileFieldRow($model,'pocket_bottom_right',array('class'=>'span5','maxlength'=>255)); 
		if($model->isNewRecord != '1' and $model->pocket_bottom_right!='')
		{
			echo "<p>". Chtml::image($img_url.'/'.$model->pocket_bottom_right.'/pocket-right.png' ,'pocket_bottom_right',array('width'=>200)) ."</p>";
	
		}
	?>

	<?php 
		echo $form->fileFieldRow($model,'knit',array('class'=>'span5','maxlength'=>255)); 
		if($model->isNewRecord != '1' and $model->knit!='')
		{
			echo "<p>". Chtml::image($img_url.'/'.$model->knit.'/knit.png' ,'knit',array('width'=>200)) ."</p>";
	
		}
	?>

	<?php 
		echo $form->fileFieldRow($model,'sleeve_left',array('class'=>'span5','maxlength'=>255)); 
		if($model->isNewRecord != '1' and $model->sleeve_left!='')
		{
			echo "<p>". Chtml::image($img_url.'/'.$model->sleeve_left.'/sleeve-left.png' ,'sleeve_left',array('width'=>200)) ."</p>";
	
		}
	?>

	<?php 
		echo $form->fileFieldRow($model,'sleeve_right',array('class'=>'span5','maxlength'=>255)); 
		if($model->isNewRecord != '1' and $model->sleeve_right!='')
		{
			echo "<p>". Chtml::image($img_url.'/'.$model->sleeve_right.'/sleeve-right.png' ,'sleeve_right',array('width'=>200)) ."</p>";
	
		}
	?>

	<?php echo $form->fileFieldRow($model,'buttons',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
