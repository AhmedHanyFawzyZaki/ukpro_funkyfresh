
<?php  // set the page title
$this->pageTitle=Yii::app()->name . ' - settings';
?>

<div class="wrapper">
<h3 class="main-title">My profile</h3>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/title-shadow.png'/>

<div class="container">

<?php echo $this->renderPartial('profile_left',array()); ?><!--end left-menu-->

<div class="content">
<div class="settings">
<div class="user-photo">
<?php if($user->image){ ?>
	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/media/members/'.$user->image,$user->username); ?>
<?php }else{ ?>
	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/media/members/general_profile.jpg','anonymous profile'); ?>
<?php } ?>

</div><!--end user-photo-->

<div class="user-info">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'settings-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('class'=>"bs-docs-example form-horizontal",'enctype' => 'multipart/form-data'),
	
)); ?>

            <div class="control-group">
              <label for="User_username" class="control-label">username:</label>
              <div class="controls">
                
				<?php echo $form->textField($user,'username'); ?>
              </div>
            </div>
            
            <div class="control-group">
              <label for="User_fname" class="control-label">first name:</label>
              <div class="controls">
                
				<?php echo $form->textField($user,'fname'); ?>
              </div>
            </div>
            <div class="control-group">
              <label for="User_lname" class="control-label">last name:</label>
              <div class="controls">
                
				<?php echo $form->textField($user,'lname'); ?>
              </div>
            </div>
            
            <div class="control-group">
              <label for="User_email" class="control-label">email:</label>
              <div class="controls">
                <?php echo $form->textField($user,'email'); ?>
              </div>
            </div>
            <div class="control-group">
              <label for="User_password" class="control-label">password:</label>
              <div class="controls">
                <?php echo $form->passwordField($user,'password'); ?>
              </div>
            </div>
            <div class="control-group">
              <label for="User_password_repeat" class="control-label">repeat password:</label>
              <div class="controls">
                <?php echo $form->passwordField($user,'password_repeat'); ?>
              </div>
            </div>
            <div class="control-group">
              <label for="User_image" class="control-label">image:</label>
              <div class="controls">
                <?php echo $form->fileField($user, 'image'); ?>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
               
                <button class="btn" type="submit">save changes</button>
              </div>
            </div>
          <?php $this->endWidget(); ?>

</div><!--end user-info-->
</div><!--end settings-->
</div><!--end content-->
</div><!--end container-->

</div><!--end wrapper-->
