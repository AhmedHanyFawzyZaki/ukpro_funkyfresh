<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'color-form',
	'enableAjaxValidation'=>false,
	
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldRow($model,'color',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldRow($model,'color',array('class'=>'span5','maxlength'=>255));
	echo'<br><div class="control-group ">';
	echo '<div class="controls">';
	echo CHtml::activeLabel($model,'Color');
	
			$this->widget('application.extensions.SMiniColors.SActiveColorPicker', array(
			    'model' => $model,
			    'attribute' => 'color',
			    'hidden'=>false, // defaults to false - can be set to hide the textarea with the hex
			    'options' => array(), // jQuery plugin options
			    'htmlOptions' => array('class'=>'span5'), // html attributes
		));
			echo '</div></div>';
	?>
    <div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>
    
    <?php echo CHtml::activeHiddenField($model,'gallery_id');?>

	<!--<div class="control-group ">
    	<label>Tails</label>
        <div class="controls">
            <div class="container">
                <div class="row">
                    <div class="span<?php echo(isset($_GET['w']) ? $_GET['w'] : '12')?>" >
                        <?php
                        $this->widget('GalleryManager', array(
                            'gallery' => $gallery,
                        ));
                        ?>
        
                    </div>
                </div>
            </div>
        </div>
    </div>-->

	

<?php $this->endWidget(); ?>
