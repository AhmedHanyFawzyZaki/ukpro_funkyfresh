
<?php  // set the page title
$this->pageTitle=Yii::app()->name . ' - Profile';
?>

<div class="wrapper">
<h3 class="main-title">My profile</h3>
<img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/title-shadow.png'/>

<div class="container">

<?php echo $this->renderPartial('profile_left',array()); ?>

<div class="content">
<div class="user-photo">
<?php if($user->image){ ?>
	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/media/members/'.$user->image,$user->username,array('style'=>'max-width:96% !important')); ?>
<?php }else{ ?>
	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/media/members/general_profile.jpg','anonymous profile',array('style'=>'max-width:96% !important')); ?>
<?php } ?>

</div><!--end user-photo-->

<div class="user-info">
<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/profile" class="user-name"><?= $user->username; ?></a>
<p class="title2"><label>Email :</label><?= $user->email; ?></p>
<p class="title2"><label>First name :</label><?= $user->fname; ?></p>
<p class="title2"><label>Last name :</label><?= $user->lname; ?></p>
</div><!--end user-info-->
</div><!--end content-->
</div><!--end container-->

</div><!--end wrapper-->
