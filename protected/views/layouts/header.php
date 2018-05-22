<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
    <head >
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo CHtml::encode($this->pageTitle); ?> </title>
        <?php Yii::app()->bootstrap->register(); ?>
        <link href="<?php echo Yii::app()->getBaseUrl(true); ?>/css/style.css" rel="stylesheet">
            <link href="<?php echo Yii::app()->getBaseUrl(true); ?>/css/design.css" rel="stylesheet">

                <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/jquery.elevatezoom.js"></script>


                </head>
                <body>

                    <?php
                    $this->widget('application.extensions.fancybox.EFancyBox', array(
                        'target' => '.loginForm',
                        'config' => array(
                            maxWidth => 800,
                            maxHeight => 900,
                            fitToView => false,
                            width => '50%',
                            height => '70%',
                            autoSize => false,
                            closeClick => false,
                            openEffect => 'none',
                            closeEffect => 'none',
                            type => 'iframe'
                        ),
                    ));
                    ?>

                    <div class="header">

                        <div class="logo">
                            <a href="<?php echo Yii::app()->baseUrl; ?>/home"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/logo.png"></a>
                        </div><!--end logo-->

                        <!--menu-->
                        <div class="menu">
                            <div class="wrapper">
                                <div class="navbar">
                                    <?php $current_url=Yii::app()->request->requestUri;?>
                                    <div class="navbar-inner">
                                        <ul class="nav">
                                            <li class="<?php if(($current_url==Yii::app()->request->baseUrl.'/home')||($current_url==Yii::app()->request->baseUrl.'/')){echo 'active';}else{echo '';}?>"><a href="<?php echo Yii::app()->baseUrl; ?>/home">Home</a></li>
                                            <li class="divider-vertical"></li>
                                            <li class="<?php if(($current_url==Yii::app()->request->baseUrl.'/'.Helper::DrawPageLink2(1))){echo 'active';}else{echo '';}?>"><a href="<?= Yii::app()->request->baseUrl; ?>/<?= Helper::DrawPageLink2(1); ?>">About Us</a></li>
                                            <li class="divider-vertical"></li>
                                            <li class="<?php if(($current_url==Yii::app()->request->baseUrl.'/home/mysize')){echo 'active';}else{echo '';}?>"><a href="<?php echo Yii::app()->baseUrl; ?>/home/mysize">Whats my size</a></li>
                                            <li class="divider-vertical"></li>
                                            <li class="<?php if(($current_url==Yii::app()->request->baseUrl.'/home/gallery')){echo 'active';}else{echo '';}?>"><a href="<?php echo Yii::app()->baseUrl; ?>/home/gallery">Gallery</a></li>
                                            <li class="divider-vertical"></li>
                                            <li class="<?php if(($current_url==Yii::app()->request->baseUrl.'/home/designjacket')){echo 'active';}else{echo '';}?>"><a href="<?php echo Yii::app()->baseUrl; ?>/home/designjacket">Design my jacket</a></li>
                                            <li class="divider-vertical"></li>
                                            <li class="<?php if(($current_url==Yii::app()->request->baseUrl.'/home/profile')){echo 'active';}else{echo '';}?>">
                                                <?php if (!Yii::app()->user->isGuest) { ?>
                                                    <a href="<?php echo Yii::app()->baseUrl; ?>/home/profile">My Account</a>
                                                    <?php }else{
                                                    ?>

                                                    <a href="<?php echo Yii::app()->baseUrl; ?>#loginModal" data-toggle="modal" >My Account</a>

                                                    <?php
                                                    }?>

                                                </li>
                                                <li class="divider-vertical"></li>
                                                <li class="<?php if(($current_url==Yii::app()->request->baseUrl.'/home/faq')){echo 'active';}else{echo '';}?>"><a href="<?php echo Yii::app()->baseUrl; ?>/home/faq">FAQ</a></li>
                                                <li class="shopping-list"><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/cart"><span><?= count(Yii::app()->user->getState('tmp_product_id')) ?> items</span><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/shopping-icon.png'/></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!--end wrapper-->
                            </div><!--end menu-->

                            <div class="login">

                                <div class="wrapper">

                                    <ul class="login-menu">

                                        <?php if (Yii::app()->user->isGuest) { ?>

                                            <li>
                                                <a href="<?php echo Yii::app()->getBaseUrl(true); ?>#loginModal" role="button" data-toggle="modal" data-target="#loginModal">
                                                    </span> Log IN</a></li>


                                            <div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="log">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/" class="log-logo"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/log-logo.png"></a>
                                                        <h3>log in</h3>
                                                    </div>


                                                    <?php
                                                    $form = $this->beginWidget('CActiveForm', array(
                                                        'id' => 'login-form',
                                                        'action' => Yii::app()->createUrl('/home/Login'),
                                                        'enableClientValidation' => true,
                                                        'clientOptions' => array(
                                                            'validateOnSubmit' => true,
                                                            'validateOnChange' => true,
                                                            'validateOnType' => false,
                                                        ),
                                                        'htmlOptions' => array(
                                                            'class' => 'bs-docs-example form-horizontal',
                                                        ),
                                                    ));
                                                    ?>
                                                    <div id="login-error-div" class="errorMessage" style="display: none;"></div>
                                                    <div class="control-group">
                                                        <label for="inputEmail" class="control-label">User Name or Email:</label>
                                                        <div class="controls">

                                                            <?php echo $form->textField($this->user_login, 'username', array('placeholder' => '')); ?>

                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label for="inputPassword" class="control-label">Password:</label>
                                                        <div class="controls">

                                                            <?php echo $form->passwordField($this->user_login, 'password', array()); ?>

                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>#collapseTwo" class="accordion-toggle forget" data-parent="#accordion2" data-toggle="collapse">Forget your password?</a>

                                                            <?php
                                                            echo CHtml::ajaxSubmitButton(
                                                                    'Log In', array('/home/login'), array(
                                                                'beforeSend' => 'function(){
                                             $("#login").attr("disabled",true);
            }',
                                                                'complete' => 'function(){
                                             $("#login-form").each(function(){ this.reset();});
                                             $("#login").attr("disabled",false);
                                        }',
                                                                'success' => 'function(data){
                                             //var obj = jQuery.parseJSON(data);
                                             if(data == "wrong"){
												 $("#login-error-div").show();
                                                $("#login-error-div").html("<h4>Login failed! Please try again.</h4>");$("#login-error-div").append("");

                                      }
          else{

			   $("#login-form").html("<h4>Login Successful! Please Wait...</h4>");
                                         parent.location.href = "' . Yii::app()->request->baseUrl . '/home";

                                             }

                                        }'
                                                                    ), array("id" => "login", "class" => "btn")
                                                            );
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <?php $this->endWidget(); ?>

                                                    <?php
                                                    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                                                        'id' => 'user-form',
                                                        'action' => Yii::app()->createUrl('/home/Forgotpass'),
                                                        'enableClientValidation' => true,
                                                        'clientOptions' => array(
                                                            'validateOnSubmit' => true,
                                                        ),
                                                    ));
                                                    ?>

                                                    <div class="accordion-body collapse" id="collapseTwo">
                                                        <div class="accordion-inner">

                                                            <div class="control-group">
                                                                <p class="parag3">Enter your email address and we will email you istructions to reset your password</p>
                                                                <label for="inputEmail" class="control-label">Email Address:</label>
                                                                <div class="controls">
                                                                    <?php echo $form->textField($this->user_signUp, 'email', array()); ?>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <button class="btn" type="submit">send</button>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <?php $this->endWidget(); ?>
                                                </div><!--end log-->
                                            </div>
                                            <span class="slash">/</span>
                                            <li><a href="<?php echo Yii::app()->getBaseUrl(true); ?>#registerModal" role="button" data-toggle="modal"><span>
                                                    </span> Register</a></li>

                                            <div id="registerModal" class="modal hide fade signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="log">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/" class="log-logo"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/log-logo.png"></a>
                                                        <h3>Register</h3>
                                                    </div>


                                                    <?php
                                                    $form = $this->beginWidget('CActiveForm', array(
                                                        'id' => 'user-register-form',
                                                        'action' => Yii::app()->createUrl('/home/register'),
                                                        'enableClientValidation' => true,
                                                        'clientOptions' => array(
                                                            'validateOnSubmit' => true,
                                                        ),
                                                        'htmlOptions' => array(
                                                            'class' => 'bs-docs-example form-horizontal',
                                                        ),
                                                    ));
                                                    ?>
                                                    <div id="reg-error-div" class="alert btn-danger" style="display: none;color:#FFF"></div>
                                                    <div class="control-group">
                                                        <label for="inputEmail" class="control-label">first name:</label>
                                                        <div class="controls">
                                                            <?php echo $form->textField($this->user_signUp, 'fname', array()); ?>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label for="inputEmail" class="control-label">last name:</label>
                                                        <div class="controls">
                                                            <?php echo $form->textField($this->user_signUp, 'lname', array()); ?>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label for="inputEmail" class="control-label">email address:</label>
                                                        <div class="controls">
                                                            <?php echo $form->textField($this->user_signUp, 'email', array()); ?>
                                                        </div>
                                                    </div>

                                                    <!--<div class="control-group">
                                                      <label for="inputEmail" class="control-label">confirm email:</label>
                                                      <div class="controls">
                                                    <?php echo $form->textField($this->user_signUp, 'email_repeat', array()); ?>
                                                      </div>
                                                    </div>-->

                                                    <div class="control-group">
                                                        <label for="inputEmail" class="control-label">user name:</label>
                                                        <div class="controls">
                                                            <?php echo $form->textField($this->user_signUp, 'username', array()); ?>
                                                        </div>
                                                    </div>


                                                    <div class="control-group">
                                                        <label for="inputPassword" class="control-label">Password:</label>
                                                        <div class="controls">
                                                            <?php echo $form->passwordField($this->user_signUp, 'password', array()); ?>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label for="inputPassword" class="control-label">confirm Password:</label>
                                                        <div class="controls">
                                                            <?php echo $form->passwordField($this->user_signUp, 'password_repeat', array()); ?>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <div class="controls">

                                                            <?php
                                                            echo CHtml::ajaxSubmitButton(
                                                                    'Submit', array('/home/register'), array(
                                                                'beforeSend' => 'function(){
                                             $("#reg").attr("disabled",true);
            }',
                                                                'complete' => 'function(){
                                             //$("#user-register-form").each(function(){ this.reset();});
                                             $("#reg").attr("disabled",false);
                                        }',
                                                                'success' => 'function(data){
				   				var x=data.split("*-*");
                                             if(x[0] == "wrong"){
												 $("#reg-error-div").show();
                                                $("#reg-error-div").html("<h5>Register failed!</h5>");$("#reg-error-div").append(x[1]);

                                      }
          else{
			   	$("#user-register-form").html("<h4 style=\"color:red;text-align:center;\">Thank you! An email has been sent to your email address with your credentials</h4>");
                //parent.location.href = "' . Yii::app()->request->baseUrl . '/home";

                                             }

                                        }'
                                                                    ), array("id" => "reg", "class" => "btn")
                                                            );
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <?php $this->endWidget(); ?>
                                                </div><!--end log-->
                                            </div>
                                            <?php
                                        } else {
                                            $profile = User::getProfileType();
                                            ?>
                                            <li><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/profile" class="profile-icon"> <?= Yii::app()->user->username; ?> </a></li>
                                            <span class="slash">/</span>
                                            <li><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/home/logout"><span>
                                                    </span> Sign out</a></li>





                                            <?php

                                            }?>



                                        </ul>

                                        <div class="social">
                                            <a title="" target="_blank" href="<?php echo Helper::yiiparam('facebook') ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/fb.png'/></a>
                                            <a title="" target="_blank" href="<?php echo Helper::yiiparam('twitter') ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/tw.png'/></a>

                                            <a title="" target="_blank" href="<?php echo Helper::yiiparam('google') ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/google.png'/></a>
                                            <a title="" target="_blank" href="<?php echo Helper::yiiparam('instagram') ?>"><img src='<?php echo Yii::app()->getBaseUrl(true); ?>/img/steg.png'/></a>
                                </div><!--end social-->

                            </div><!--end wrapper-->




                        </div><!--end login-->




                    </div><!--end header-->



