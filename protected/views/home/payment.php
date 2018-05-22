<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<div class="wrapper">
    <?php if(Yii::app()->user->hasFlash('payment-success')):
            echo Yii::app()->user->getFlash('payment-success');
        endif;
        if(Yii::app()->user->hasFlash('payment-cancel')):
            echo Yii::app()->user->getFlash('payment-cancel');
        endif;
        ?>
</div>