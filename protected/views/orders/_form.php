<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'orders-form',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>
<?php echo $form->dropDownListRow($model, 'user_id', User::model()->getUsers(), array('class' => 'span5')); ?>


<?php echo $form->dropDownListRow($model, 'status', OrderStatus::model()->getOrderStatus(), array('class' => 'span5', 'empty' => 'Order Status')); ?>

<?php echo $form->textFieldRow($model, 'price', array('class' => 'span5', 'maxlength' => 255, 'append' => 'GBP')); ?>

<?php echo $form->dropDownListRow($model, 'country_id', AllCountries::model()->getCountries(), array('class' => 'span5', 'empty' => 'Country')); ?>

<?php echo $form->textFieldRow($model, 'city', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'zipcode', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'address', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'phone_no', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->dropDownListRow($model, 'b_country_id', AllCountries::model()->getCountries(), array('class' => 'span5', 'empty' => 'Country')); ?>

<?php echo $form->textFieldRow($model, 'b_city', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'b_zipcode', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'b_address', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'b_phone_no', array('class' => 'span5', 'maxlength' => 255)); ?>


<?php // echo $form->textFieldRow($model, 'token', array('class' => 'span5', 'maxlength' => 255, 'readonly' => 'readonly')); ?>

    <?php //echo $form->textFieldRow($model,'payer_id',array('class'=>'span5'));  ?>

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
