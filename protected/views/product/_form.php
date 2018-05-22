<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'product-form',
    'enableAjaxValidation' => false,
    'type' => 'horizontal',
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
$img_url = Yii::app()->baseUrl . '/media/types/' . strtolower(Category::model()->findByPk($model->cat_id)->title) . '/' . strtolower(Subcategory::model()->findByPk($model->subcat_id)->title) . '/' . strtolower($model->code);
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php //echo $form->dropDownListRow($model,'cat_id',Category::model()->getCategories(),array('class'=>'span5','empty'=>'(Select Category)'));  ?>

<?php echo $form->textFieldRow($model, 'title', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'color_title', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php //echo $form->textAreaRow($model,'desc',array('class'=>'span5','maxlength'=>255));  ?>

<?php //echo $form->fileFieldRow($model,'main_image',array('class'=>'span5','maxlength'=>255));  ?>

<?php //echo $form->textFieldRow($model,'price',array('class'=>'span2','append'=>'$'));  ?>	

<?php
//echo $form->textFieldRow($model,'color',array('class'=>'span5','maxlength'=>255));
echo'<div class="control-group ">';
echo $form->label($model, 'Color', array('class' => 'control-label'));
echo '<div class="controls">';


$this->widget('application.extensions.SMiniColors.SActiveColorPicker', array(
    'model' => $model,
    'attribute' => 'color',
    'hidden' => false, // defaults to false - can be set to hide the textarea with the hex
    'options' => array(), // jQuery plugin options
    'htmlOptions' => array('class' => 'span5'), // html attributes
));
echo '</div></div>';
?>

<?php
echo $form->fileFieldRow($model, 'body', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->body != '') {
    echo "<p>" . Chtml::image($img_url . '/' . $model->body, 'body', array('width' => 200)) . "</p>";
}
?>

<?php
echo $form->fileFieldRow($model, 'front_sleeves', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->front_sleeves != '') {
    echo "<p>" . Chtml::image($img_url . '/' . $model->front_sleeves, 'front_sleeves', array('width' => 200)) . "</p>";
}
?>

<?php
echo $form->fileFieldRow($model, 'pockets', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->pockets != '') {
    echo "<p>" . Chtml::image($img_url . '/' . $model->pockets, 'pockets', array('width' => 200)) . "</p>";
}
?>

<?php
echo $form->fileFieldRow($model, 'knit', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->knit != '') {
    echo "<p>" . Chtml::image($img_url . '/' . $model->knit, 'knit', array('width' => 200)) . "</p>";
}
?>

<?php
echo $form->fileFieldRow($model, 'button', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->button != '') {
    echo "<p>" . Chtml::image($img_url . '/' . $model->button, 'button', array('width' => 200)) . "</p>";
}
?>

<?php
echo $form->fileFieldRow($model, 'top_zip', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->top_zip != '') {
    echo "<p>" . Chtml::image($img_url . '/' . $model->top_zip, 'top_zip', array('width' => 200)) . "</p>";
}
?>
<!---------------------------------------------------------------------------------------------------->
<br><br><br><br>
<p style="color:red;font-size:21px;font-weight:bold;width:100%;text-align:center">Left Preview</p>
<?php
echo $form->fileFieldRow($model, 'left_body', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->left_body != '') {
    echo "<p>" . Chtml::image($img_url . '/left/' . $model->left_body, 'left_body', array('width' => 200)) . "</p>";
}
?>

<?php
echo $form->fileFieldRow($model, 'left_sleeve', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->left_sleeve != '') {
    echo "<p>" . Chtml::image($img_url . '/left/' . $model->left_sleeve, 'left_sleeve', array('width' => 200)) . "</p>";
}
?>

<?php
echo $form->fileFieldRow($model, 'bottom_left_pocket', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->bottom_left_pocket != '') {
    echo "<p>" . Chtml::image($img_url . '/left/' . $model->bottom_left_pocket, 'bottom_left_pocket', array('width' => 200)) . "</p>";
}
?>

<?php
echo $form->fileFieldRow($model, 'left_knit', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->left_knit != '') {
    echo "<p>" . Chtml::image($img_url . '/left/' . $model->left_knit, 'left_knit', array('width' => 200)) . "</p>";
}
?>

<?php
echo $form->fileFieldRow($model, 'left_button', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->left_button != '') {
    echo "<p>" . Chtml::image($img_url . '/left/' . $model->left_button, 'left_button', array('width' => 200)) . "</p>";
}
?>
<!---------------------------------------------------------------------------------------------------->    
<br><br><br><br>
<p style="color:red;font-size:21px;font-weight:bold;width:100%;text-align:center">Right Preview</p>
<?php
echo $form->fileFieldRow($model, 'right_body', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->right_body != '') {
    echo "<p>" . Chtml::image($img_url . '/right/' . $model->right_body, 'right_body', array('width' => 200)) . "</p>";
}
?>
<?php
echo $form->fileFieldRow($model, 'right_sleeve', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->right_sleeve != '') {
    echo "<p>" . Chtml::image($img_url . '/right/' . $model->right_sleeve, 'right_sleeve', array('width' => 200)) . "</p>";
}
?>

<?php
echo $form->fileFieldRow($model, 'bottom_right_pocket', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->bottom_right_pocket != '') {
    echo "<p>" . Chtml::image($img_url . '/right/' . $model->bottom_right_pocket, 'bottom_right_pocket', array('width' => 200)) . "</p>";
}
?>

<?php
echo $form->fileFieldRow($model, 'right_knit', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->right_knit != '') {
    echo "<p>" . Chtml::image($img_url . '/right/' . $model->right_knit, 'right_knit', array('width' => 200)) . "</p>";
}
?>

<?php
echo $form->fileFieldRow($model, 'right_button', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->right_button != '') {
    echo "<p>" . Chtml::image($img_url . '/right/' . $model->right_button, 'right_button', array('width' => 200)) . "</p>";
}
?>
<!---------------------------------------------------------------------------------------------------->    
<br><br><br><br>
<p style="color:red;font-size:21px;font-weight:bold;width:100%;text-align:center">Back Preview</p>
<?php
echo $form->fileFieldRow($model, 'back', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->back != '') {
    echo "<p>" . Chtml::image($img_url . '/back/' . $model->back, 'back', array('width' => 200)) . "</p>";
}
?>
<?php
echo $form->fileFieldRow($model, 'back_sleeves', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->back_sleeves != '') {
    echo "<p>" . Chtml::image($img_url . '/back/' . $model->back_sleeves, 'back_sleeves', array('width' => 200)) . "</p>";
}
?>

<?php
echo $form->fileFieldRow($model, 'back_knit', array('class' => 'span5', 'maxlength' => 255));
if ($model->isNewRecord != '1' and $model->back_knit != '') {
    echo "<p>" . Chtml::image($img_url . '/back/' . $model->back_knit, 'back_knit', array('width' => 200)) . "</p>";
}
?>
<!---------------------------------------------------------------------------------------------------->  

<?php
/* echo $form->fileFieldRow($model,'cuff_left',array('class'=>'span5','maxlength'=>255)); //left cuff
  if($model->isNewRecord != '1' and $model->cuff_left!='')
  {
  echo "<p>". Chtml::image($img_url.'/'.$model->cuff_left ,'cuff_left',array('width'=>200)) ."</p>";

  } */
?>

<?php
/* echo $form->fileFieldRow($model,'cuff_right',array('class'=>'span5','maxlength'=>255)); //left cuff
  if($model->isNewRecord != '1' and $model->cuff_right!='')
  {
  echo "<p>". Chtml::image($img_url.'/'.$model->cuff_right ,'cuff_right',array('width'=>200)) ."</p>";

  } */
?>

<?php
/* echo $form->fileFieldRow($model,'top_right_pocket',array('class'=>'span5','maxlength'=>255)); 
  if($model->isNewRecord != '1' and $model->top_right_pocket!='')
  {
  echo "<p>". Chtml::image($img_url.'/'.$model->top_right_pocket ,'top_right_pocket',array('width'=>200)) ."</p>";

  } */
?>

<?php
/* echo $form->fileFieldRow($model,'top_left_pocket',array('class'=>'span5','maxlength'=>255)); 
  if($model->isNewRecord != '1' and $model->top_left_pocket!='')
  {
  echo "<p>". Chtml::image($img_url.'/'.$model->top_left_pocket ,'top_left_pocket',array('width'=>200)) ."</p>";

  } */
?>

<?php
/* echo $form->fileFieldRow($model,'collar',array('class'=>'span5','maxlength'=>255)); 
  if($model->isNewRecord != '1' and $model->collar!='')
  {
  echo "<p>". Chtml::image($img_url.'/'.$model->collar ,'collar',array('width'=>200)) ."</p>";

  } */
?>

<?php
/* echo $form->fileFieldRow($model,'top_right_patch',array('class'=>'span5','maxlength'=>255)); 
  if($model->isNewRecord != '1' and $model->top_right_patch!='')
  {
  echo "<p>". Chtml::image($img_url.'/'.$model->top_right_patch ,'top_right_patch',array('width'=>200)) ."</p>";

  } */
?>

<?php
/* echo $form->fileFieldRow($model,'top_left_patch',array('class'=>'span5','maxlength'=>255)); 
  if($model->isNewRecord != '1' and $model->top_left_patch!='')
  {
  echo "<p>". Chtml::image($img_url.'/'.$model->top_left_patch ,'top_left_patch',array('width'=>200)) ."</p>";

  } */
?>

<?php
/* echo $form->fileFieldRow($model,'bottom_right_patch',array('class'=>'span5','maxlength'=>255)); 
  if($model->isNewRecord != '1' and $model->bottom_right_patch!='')
  {
  echo "<p>". Chtml::image($img_url.'/'.$model->bottom_right_patch ,'bottom_right_patch',array('width'=>200)) ."</p>";

  } */
?>

<?php
/* echo $form->fileFieldRow($model,'bottom_left_patch',array('class'=>'span5','maxlength'=>255)); 
  if($model->isNewRecord != '1' and $model->bottom_left_patch!='')
  {
  echo "<p>". Chtml::image($img_url.'/'.$model->bottom_left_patch ,'bottom_left_patch',array('width'=>200)) ."</p>";

  } */
?>

<?php
/* echo $form->fileFieldRow($model,'hoode',array('class'=>'span5','maxlength'=>255)); 
  if($model->isNewRecord != '1' and $model->hoode!='')
  {
  echo "<p>". Chtml::image($img_url.'/'.$model->hoode ,'hoode',array('width'=>200)) ."</p>";

  }
  ?>

  <?php
  /*echo $form->fileFieldRow($model,'upper_body',array('class'=>'span5','maxlength'=>255));
  if($model->isNewRecord != '1' and $model->upper_body!='')
  {
  echo "<p>". Chtml::image($img_url.'/'.$model->upper_body ,'upper_body',array('width'=>200)) ."</p>";

  } */
?>

<?php
/* echo $form->fileFieldRow($model,'bottom_body',array('class'=>'span5','maxlength'=>255)); 
  if($model->isNewRecord != '1' and $model->bottom_body!='')
  {
  echo "<p>". Chtml::image($img_url.'/'.$model->bottom_body ,'bottom_body',array('width'=>200)) ."</p>";

  } */
?>


<?php
/* echo $form->fileFieldRow($model,'inner_lining',array('class'=>'span5','maxlength'=>255)); 
  if($model->isNewRecord != '1' and $model->inner_lining!='')
  {
  echo "<p>". Chtml::image($img_url.'/'.$model->inner_lining ,'inner_lining',array('width'=>200)) ."</p>";

  } */
?>



<?php //echo $form->checkboxRow($model,'default'); ?>

<div class="form-actions">
<?php
$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'submit',
    'type' => 'primary',
    'label' => $model->isNewRecord ? 'Create' : 'Save',
));
?>
</div>


<?php $this->endWidget(); ?>
<?php echo CHtml::activeHiddenField($model, 'gallery_id'); ?>


<!--<label class="care" for="control-label">Product Gallery</label>
<div class="container">
    <div class="row">
        <div class="span<?php //echo(isset($_GET['w']) ? $_GET['w'] : '12')?>" style="width:700px;margin: 0px 0px 10px 201px;">
<?php
/* $this->widget('GalleryManager', array(
  'gallery' => $gallery,
  )); */
?>

        </div>
</div>
</div>-->