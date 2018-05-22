<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class FrontController extends CController {

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = '//layouts/main';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();
    public $user_login;
    public $user_signUp;

    public function init() {
        $this->user_login = new LoginForm();

        $this->user_signUp = new User();

        $parameters = Settings::model()->findByPk(1);


        Yii::app()->params['google'] = $parameters['google'];
        Yii::app()->params['twitter'] = $parameters['twitter'];
        Yii::app()->params['pinterest'] = $parameters['pinterest'];
        Yii::app()->params['support_email'] = $parameters['support_email'];
        Yii::app()->params['email'] = $parameters['email'];
        Yii::app()->params['facebook'] = $parameters['facebook'];
        Yii::app()->params['facebook'] = $parameters['facebook'];
        Yii::app()->params['paypal_email'] = $parameters['paypal_email'];
        Yii::app()->params['instagram'] = $parameters['instagram'];
        Yii::app()->Paypal->apiUsername = $parameters['api_username'];
        Yii::app()->Paypal->apiPassword = $parameters['api_password'];
        Yii::app()->Paypal->apiSignature = $parameters['signature'];
        //Yii::app()->Paypal->returnUrl = Yii::app()->request->baseUrl . "/home/PaymentSuccess";
        //Yii::app()->Paypal->cancelUrl = Yii::app()->request->baseUrl . "/home/PaymentCancelled";
    }

}
