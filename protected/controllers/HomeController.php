<?php

class HomeController extends FrontController {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewActionM',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        if (Yii::app()->user->getState('landing') == '') {
            Yii::app()->user->setState('landing', 'found');
            $this->layout = 'column1';
            $this->render('landing');
        } else {

            $banners = Banner::model()->findAll();
            $this->render('index', array('banners' => $banners));
        }
    }

    //===============design my jacket==============
    public function actionDesignJacket() {
        /* if(Yii::app()->user->isGuest){
          $this->redirect(array('index'));
          } */
        $this->render('designjacket');
    }

    //===============static page==============
    public function actionPage() {
        $slug = $_REQUEST['slug'];


        $criteria = new CDbCriteria;
        $criteria->select = 't.*';
        $criteria->condition = 'url=:slug';
        $criteria->params = array(':slug' => $slug);
        $pages = Pages::model()->find($criteria);
        $this->render('staticpage', array('pages' => $pages));
    }

    //===============Landing page==============
    public function actionLanding() {
        $this->layout = 'landing_layout';
        $this->render('landing');
    }

    //===============Saved Jackets page==============
    public function actionDeleteSaved() {
        $id = $_POST['id'];
        if (TmpProduct::model()->findByPk($id)->delete())
            echo '1';
        else
            echo '0';
    }

    //===============Saved Jackets page==============
    public function actionSavedjackets() {
        if (Yii::app()->user->isGuest) {
            $this->redirect(array('index'));
        }
        $criteria = new CDbCriteria();
        $criteria->condition = 'user_id=' . Yii::app()->user->id . '';
        $count = TmpProduct::model()->count($criteria);
        $pages = new CPagination($count);

        // results per page
        $pages->pageSize = 3;
        $pages->applyLimit($criteria);

        $jackets = TmpProduct::model()->findAll($criteria);
        $this->render('savedjackets', array('jackets' => $jackets, 'pages' => $pages));
    }

    //===============My-Jackets page==============
    public function actionMyjackets() {

        $this->render('myjackets');
    }

    //===============Account-Settings page==============
    public function actionSettings() {
        if (Yii::app()->user->isGuest) {
            $this->redirect(array('index'));
        }
        $user = User::model()->findByPk(Yii::app()->user->id);
        $temp2 = $user->image;
        if (isset($_POST['User'])) {
            $user->attributes = $_POST['User'];
            $temp = CUploadedFile::getInstance($user, 'image');
            if ($temp) {
                if ($temp2) {
                    if (file_exists(Yii::getPathOfAlias('webroot') . '/media/members/' . $temp2))
                        unlink(Yii::getPathOfAlias('webroot') . '/media/members/' . $temp2);
                }

                $name = rand(0, 10000) . '-' . $temp;
                $user->image = $name;
                $temp->saveAs(Yii::getPathOfAlias('webroot') . '/media/members/' . $user->image);
            }
            if ($user->save())
                $this->refresh();
        }

        $user->password = $user->password_repeat = $user->simple_decrypt($user->password);
        $this->render('settings', array('user' => $user));
    }

//===============Cart-Details page==============
    public function actionCartdetails() {

        $this->render('cartdetails');
    }

//===============Gallery page==============
    public function actionGallery() {

        $criteria = new CDbCriteria();
        $count = FrontGallery::model()->count($criteria);
        $pages = new CPagination($count);

        // results per page
        $pages->pageSize = 9;
        $pages->applyLimit($criteria);
        $gallery = FrontGallery::model()->findAll($criteria);

        $this->render('gallery', array('gallery' => $gallery, 'pages' => $pages));
    }

//===============My Size page==============
    public function actionMySize() {
        $heights = Size::model()->findAll();

        $this->render('mysize', array('heights' => $heights,));
    }

    public function actionWeights($id) {
        $model = HeightDetail::model()->findAllByAttributes(array('height_id' => $id));
        $return = array();
        if ($model) {
            $return['status'] = 'yes';
            $return['weights'] = "";
            $i = 0;
            foreach ($model as $m) {
                $return['weights'] .= '<option value="' . $m->id . '">' . $m->weight . '</option>';
                if ($i == 0) {
                    $return['size'] = $m->size;
                    $return['shoulder'] = $m->shoulder;
                    $return['sleeve'] = $m->sleeve;
                    $return['waist'] = $m->waist;
                }
            }
        } else {
            $return['status'] = 'no';
            $return['weights'] = "";
            $return['size'] = "";
            $return['shoulder'] = "";
            $return['sleeve'] = '';
            $return['waist'] = '';
        }
        echo json_encode($return);
    }

    public function actionWeightsinfo($id) {
        $m = HeightDetail::model()->findByPk($id);
        $return = array();
        if ($m) {
            $return['status'] = 'yes';
            $return['size'] = $m->size;
            $return['shoulder'] = $m->shoulder;
            $return['sleeve'] = $m->sleeve;
            $return['waist'] = $m->waist;
        } else {
            $return['status'] = 'no';
            $return['size'] = "";
            $return['shoulder'] = "";
            $return['sleeve'] = '';
            $return['waist'] = '';
        }
        echo json_encode($return);
    }

//===============Review page==============
    public function actionReview() {

        $this->render('review');
    }

//===============Design page==============
    public function actionDesign() {

        $this->render('design');
    }

//===============Shipping Info page==============
    public function actionShipping() {
        $shippingInfo = Pages::model()->findByPK(4);
        $shippingTimes = Pages::model()->findByPK(5);
        $internationalShipping = Pages::model()->findByPK(6);
        $this->render('shipping', array('shippingInfo' => $shippingInfo,
            'shippingTimes' => $shippingTimes,
            'internationalShipping' => $internationalShipping));
    }

    public function actionShippingDet() {
        if (Yii::app()->user->isGuest) {
            $this->redirect(array('index'));
        }

        $userd = UserDetails::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        if (isset($_POST['UserDetails'])) {
            $userd->attributes = $_POST['UserDetails'];
            if ($userd->save())
                $this->refresh();
        }
        $this->render('shippingdet', array('userd' => $userd));
    }

    public function actionBillingDet() {
        if (Yii::app()->user->isGuest) {
            $this->redirect(array('index'));
        }

        $userd = UserDetails::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
        if (isset($_POST['UserDetails'])) {
            $userd->attributes = $_POST['UserDetails'];
            if ($userd->save())
                $this->refresh();
        }
        $this->render('billingdet', array('userd' => $userd));
    }

//===============Group jacket page==============
    public function actionGroup() {

        $this->render('group');
    }

    //===============Checkout page==============
    public function actionCheckout($id = null, $k = null) {
$paymentInfo =array();
        $flag = false;
        if (Yii::app()->user->isGuest) {
            $userd = new Orders;
            if (isset($_POST['Orders'])) {
                $userd->attributes = $_POST['Orders'];
                $userd->price = Yii::app()->user->getState('Jprice');
                if ($userd->save()) {
                    $flag = true;
                    $orders_id = $userd->id;
                }
            }
        } else {

            $userd = UserDetails::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
            $ord = new Orders;
            if (isset($_POST['UserDetails'])) {
                $userd->attributes = $_POST['UserDetails'];
                $ord->status = 1;
                $ord->country_id = $userd->country_id;
                $ord->b_country_id = $userd->b_country_id;
                $ord->city = $userd->city;
                $ord->b_city = $userd->b_city;
                $ord->address = $userd->address;
                $ord->b_address = $userd->b_address;
                $ord->zipcode = $userd->zipcode;
                $ord->b_zipcode = $userd->b_zipcode;
                $ord->phone_no = $userd->phone_no;
                $ord->b_phone_no = $userd->b_phone_no;
                $ord->user_id = Yii::app()->user->id;
                $ord->price = Yii::app()->user->getState('Jprice');
                if ($ord->save()) {
                    $flag = true;
                    $orders_id = $ord->id;
                }
            }
        }
        if ($flag) {

            $paymentInfo['Order']['theTotal'] = Yii::app()->user->getState('Jprice');
            $paymentInfo['Order']['description'] = 'Funky Fresh Payment';
            $paymentInfo['Order']['quantity'] = '1';
            // call paypal



            $result = Yii::app()->Paypal->SetExpressCheckout($paymentInfo);
            
            //var_dump($result);die;
            if (!Yii::app()->Paypal->isCallSucceeded($result)) {  
                if (Yii::app()->Paypal->apiLive === true) {
                    //Live mode basic error message
                    $error = 'We were unable to process your request. Please try again later';
                    
                } else {
                    //Sandbox output the actual error message to dive in.
                    $error = $result['L_LONGMESSAGE0']; 
                }
                
                echo $error;
                
                Yii::app()->end();
                
            } else {  
                // send user to paypal
                $token = urldecode($result["TOKEN"]);
                //Yii::app()->Paypal->returnUrl = Yii::app()->request->baseUrl . "/home/PaymentSuccess";
                //Yii::app()->Paypal->cancelUrl = Yii::app()->request->baseUrl . "/home/PaymentCancelled";
                $payPalURL = Yii::app()->Paypal->paypalUrl . $token . '&Order=' . $orders_id;
                ///// still need to save in order details from shoping cart before going to paypal
                
                $ord = Orders::model()->findByPk($orders_id);
                
                $ord->token = $token;
                $ord->tmp_product_id = $id;
                $ord->save(false);


                $tmp_product = TmpProduct::model()->findByPk($id);

                $order_details = new OrdersDetails();

                $order_details->orders_id = $orders_id;
                $order_details->qty = '1';
                $order_details->cat_id = '1';
                $order_details->subcat_id = '1';
                $order_details->pro_id = Yii::app()->user->getState('DProid_id');
                $order_details->price = Yii::app()->user->getState('Jprice');
                $order_details->body = $tmp_product->body;
                $order_details->collar = $tmp_product->collar;
                $order_details->cuff_left = $tmp_product->cuff_left;
                $order_details->cuff_right = $tmp_product->cuff_right;
                $order_details->pocket_bottom_left = $tmp_product->bottom_left_pocket;
                $order_details->pocket_bottom_right = $tmp_product->bottom_right_pocket;
                $order_details->knit = $tmp_product->knit;
                $order_details->sleeve_left = $tmp_product->left_sleeve;
                $order_details->sleeve_right = $tmp_product->right_sleeve;
                $order_details->buttons = $tmp_product->button;

                /* $order_details->top_collar=Yii::app()->user->getState('top_collar');
                  $order_details->bottom_jacket=Yii::app()->user->getState('bottom_jacket');

                  $order_details->image=Yii::app()->user->getState('capturedImg');
                  $order_details->save_date=new CDbExpression('NOW()') ; */

                // add  days to date
                if ($order_details->save(false)) {

                    
                    $ids = Yii::app()->user->getState('tmp_product_id');
                    //  print_r($ids);die;
                    unset($ids[$k]);
                    Yii::app()->user->setState('tmp_product_id', $ids);

                    $this->redirect($payPalURL);
                }
            }
        }

        $this->render('checkout', array('userd' => $userd));
    }

    public function actionPaymentSuccess() {
        $token = $_GET['token'];
        $order = Orders::model()->find("token='$token'");
        if ($order) {
            $order->status = 2;
            $order->save(false);
            $tmp_product = TmpProduct::model()->findByPk($order->tmp_product_id);
            $tmp_product->sold = 1;
            $tmp_product->save();
            $model = User::model()->findByPk($order->user_id);
            // Send mail to user with the details of the order
            $user_message = '
                      <br/>
                      New Funky Fresh Order info  <br/>
                      ________________________________________<br/>
                      You just made a new order @<a href="' . Yii::app()->params['webSite'] . '">' . Yii::app()->params['webSite'] . '</a> and your order completed<br/>
                      this is the details of your order<br/>
                      <table>
                             <tr>
                                 <td>Price</td>
                                 <td>' . $order->price . '</td>
                             </tr>
                             <tr>
                                 <td>Name</td>
                                 <td>' . $model->fname . ' ' . $model->lname . '</td>
                             </tr>
                             <tr>
                                 <td>Email</td>
                                 <td>' . $model->email . '</td>
                             </tr>
                             <tr>
                                 <td>Shipping Address</td>
                                 <td>' . $order->address . '</td>
                             </tr>
                             <tr>
                                 <td>Shipping Country</td>
                                 <td>' . AllCountries::model()->findByPk($order->country_id)->country_name . '</td>
                             </tr>
                             <tr>
                                 <td>Shipping City</td>
                                 <td>' . $order->city . '</td>
                             </tr>
                             <tr>
                                 <td>Shipping Zipcode</td>
                                 <td>' . $order->zipcode . '</td>
                             </tr>
                             <tr>
                                 <td>Shipping Phone</td>
                                 <td>' . $order->phone_no . '</td>
                             </tr>
                             <tr>
                                 <td>Billing Country</td>
                                 <td>' . AllCountries::model()->findByPk($order->b_country_id)->country_name . '</td>
                             </tr>
                             <tr>
                                 <td>Billing Phone</td>
                                 <td>' . $order->b_phone_no . '</td>
                             </tr>
                             <tr>
                                 <td>Billing Zipcode</td>
                                 <td>' . $order->b_zipcode . '</td>
                             </tr>
                             <tr>
                                 <td>Billing City</td>
                                 <td>' . $order->b_city . '</td>
                             </tr>
                             <tr>
                                 <td>Billing Address</td>
                                 <td>' . $order->b_address . '</td>
                             </tr>
                      </table>
                      ';
            $this->send_mail(Yii::app()->params['email'], $model->email, 'Funky Fresh order', $user_message);

            $admin_message = '
                      <br/>
                      New Order Notification  <br/>
                      ________________________________________<br/>
                      A customer called ' . $model->fname . ' ' . $model->lname . ' has made a new order <br/>
                      Please login to your administrator account to see the details of the booking
                      ';
            $this->send_mail(Yii::app()->params['email'], Yii::app()->params['email'], 'New Order Notification', $admin_message);

            Yii::app()->user->setFlash('payment-success', "<div class='alert alert-success'>THANKS FOR Paying at funkyfresh!</div>");
            $this->render('payment');
        }
    }

    public function actionPaymentCancelled() {
        $token = $_GET['token'];
        $order = Orders::model()->find("token='$token'");
        if ($order) {
            $order->status = 3;
            $order->save(false);
            Yii::app()->user->setFlash('payment-cancel', "<div class='alert alert-success'>Payment Cancelled!</div>");
            $this->render('payment');
        }
    }

    //===============Classic page==============
    public function actionClassic($id) {
        $cat = Category::model()->findByPk($id);
        $subcats = Subcategory::model()->findAllBySql('select * from subcategory where cat_id = ' . $cat->id);
        if ($subcats) {
            $jackets = CHtml::dropDownList('subcat_id', '', CHtml::listData($subcats, 'id', 'title'));
        } else {
            $jackets = '';
        }

        $this->render('classic', array('cat' => $cat, 'jackets' => $jackets));
    }

    //===============Cart page==============
    public function actionCart() {
        if (Yii::app()->user->isGuest) {
            $this->redirect(array('index'));
        }
        $ids = Yii::app()->user->getState('tmp_product_id');
        // print_r($_SESSION['tmp_product_id']);die;
        $this->render('cart', array('ids' => $ids));
    }

    public function actionRemoveCartItem($k) {
//        print_r(Yii::app()->user->getState('tmp_product_id'));
//        die;
        if (is_array(Yii::app()->user->getState('tmp_product_id'))) {
            $ids = Yii::app()->user->getState('tmp_product_id');
            unset($ids[$k]);
            Yii::app()->user->setState('tmp_product_id', $ids);
            //  unset($ids[$k]);
        } else {
            //   unset(Yii::app()->user->getState('tmp_product_id'));
        }
        $this->redirect(array('cart'));
    }

    public function actionProfile() {
        if (Yii::app()->user->isGuest) {
            $this->redirect(array('index'));
        }
        $user = User::model()->findByPk(Yii::app()->user->id);
        $this->render('profile', array('user' => $user));
    }

    public function actionFaq() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'

        $criteria = new CDbCriteria;
        $count = Faq::model()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 6;
        $pages->applyLimit($criteria);
        $model = Faq::model()->findAll($criteria);


        //$model= Faq::model()->findAll();
        $this->render('faq', array('faqs' => $model,
            'pages' => $pages));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {

        //echo Helper::yiiparam('adminEmail');

        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-type: text/plain; charset=UTF-8";

                mail(Helper::yiiparam('adminEmail'), $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    public function actionRegister() {

        $user_signUp = $this->user_signUp;
        $user_signUp->scenario = 'register';
        //	$model= new User('register');

        if (isset($_POST['User'])) {



            $user_signUp->attributes = $_POST['User'];
            if ($_POST['User']['groups_id'] == '') {
                $user_signUp->groups_id = '1';
            }
            if ($user_signUp->save()) {

                //create the user details  record
                $user_details = new UserDetails();
                $user_details->user_id = $user_signUp->id;
                $user_details->save(false);



                $mail = new YiiMailer();
                $mail->setFrom(Yii::app()->params['adminEmail'], ' Funky Fresh Admininstrator');
                $mail->setTo($user_signUp->email);
                $mail->setSubject(' New customer profile notification');

                $message = $msg . '
<br/>
User account information  <br/>
________________________________________<br/>
Username:  ' . $user_signUp->username . '<br/>
Password:   ' . $user_signUp->simple_decrypt($user_signUp->password) . '<br/>
Login URL: 	' . Yii::app()->params['webSite'] . '

';

                $mail->setBody($message);


                if ($mail->send()) {
                    Yii::app()->user->setFlash('register-success', 'Thank you! An email has been sent to your email address with your credentials.');
                } else {
                    Yii::app()->user->setFlash('error', 'Error while sending email: ' . $mail->getError());
                }


                //$this->redirect(Yii::app()->user->returnUrl);
                $this->redirect(array('home/index'));
            } else {
                foreach ($user_signUp->getErrors() as $error) {
                    $list.=$error[0] . '<br>';
                }
                echo 'wrong' . '*-*' . $list . '<br>';
                die;
            }
        }

        $this->render('register', array(
            'model' => $model,
        ));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $this->layout = 'column2';

        $user_login = $this->user_login;
        //$model=new LoginForm;
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($user_login);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $user_login->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($user_login->validate() && $user_login->login()) {

                if (Yii::app()->user->group == 1) {
                    $this->redirect(array('home/index'));
                } else if (Yii::app()->user->group == 6) {
                    $this->redirect(array('dashboard/index'));
                }
            } else {
                echo 'wrong';
                die;
            }
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionForgotpass() {

        $model = new User;
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];

            $criteria = new CDbCriteria;
            $criteria->condition = 'email=:email';
            $criteria->params = array(':email' => $model->email);
            $usermodel = User::model()->find($criteria);



            if (count($usermodel) == 0) {

                Yii::app()->user->setFlash('ErrorMsg', 'Sorry, there\'s no account associated with that email address');
            } else {

                //create randomkey
                $key = Helper::GenerateRandomKey();
                $usermodel->pass_reset = 1;
                $usermodel->pass_code = $key;
                $usermodel->save(false);

                $mail = new YiiMailer();
                $mail->setFrom(Yii::app()->params['adminEmail'], ' Funky Fresh Admininstrator');
                $mail->setTo($model->email);
                $mail->setSubject('EHRlinked Password reset');

                $message = 'Dear customer,

Please follow this link to reset your password :
Username:' . $usermodel->username . '
URL: 	' . Yii::app()->params['webSite'] . '/home/reset/hash/' . $usermodel->pass_code . '

';

                $mail->setBody($message);


                if ($mail->send()) {
                    //Yii::app()->user->setFlash('register-success','Thank you! An activation email has been sent to your email address.');
                    $this->redirect(array('home/index'));
                } else {
                    Yii::app()->user->setFlash('error', 'Error while sending email: ' . $mail->getError());
                }

                Yii::app()->user->setFlash('ErrorMsg', 'Check <b> ' . $usermodel->email . ' </b> for the confirmation email. It will have a link to reset your password..');
            }
        }



        $this->render('forgotpass', array('model' => $model));
    }

    public function actionReset($hash) {

        //	echo $hash;

        $criteria = new CDbCriteria;
        $criteria->condition = 'pass_code=:Hash and pass_reset=1';
        $criteria->params = array(':Hash' => $hash);
        $user_found = User::model()->find($criteria);

        if (count($user_found) == 0) {
            $flag = 0;
            Yii::app()->user->setFlash('ErrorMsg', 'Sorry you have followed a wrong link .');
        } else {
            $flag = 1;
        }

        $model = new User('passreset');


        if (isset($_POST['User']) and count($user_found) != 0) {
            $model->attributes = $_POST['User'];

            $user_found->pass_reset = 0;
            $user_found->pass_code = '';
            $user_found->password = $model->newpassword = $_POST['User']['newpassword'];

            $user_found->save(false);

            $notify = new Notification();
            $notify->type = 4;
            $notify->notify_from = 1; // admin user has static id
            $notify->notify_to = $user_found->id;
            $notify->title = 'Password changed  ';
            $notify->details = 'Your password has been changed successfully .';
            $notify->save(false);

            Yii::app()->user->setFlash('ErrorMsg', ' Please Login with your new credentials');

            $this->redirect(array('home/login'));
        }


        $this->render('resetpass', array('model' => $model, 'flag' => $flag));
    }

    public function actionConfirm() {
        $token = trim($_GET['token']);
        $payerId = trim($_GET['PayerID']);
        $criteria = new CDbCriteria;
        $criteria->condition = 'token=:Tokenw';
        $criteria->params = array(':Tokenw' => $token);
        $orders = Orders::model()->find($criteria);
        $result = Yii::app()->Paypal->GetExpressCheckoutDetails($token);
        $result['PAYERID'] = $payerId;
        $result['TOKEN'] = $token;
        $result['ORDERTOTAL'] = $orders->price;
        if (!Yii::app()->Paypal->isCallSucceeded($result)) {
            if (Yii::app()->Paypal->apiLive === true) {
                //Live mode basic error message
                $error = 'We were unable to process your request. Please try again later';
            } else {
                //Sandbox output the actual error message to dive in.
                $error = $result['L_LONGMESSAGE0'];
            }
            echo $error;
            Yii::app()->end();
        } else {
            $paymentResult = Yii::app()->Paypal->DoExpressCheckoutPayment($result);
            //Detect errors
            if (!Yii::app()->Paypal->isCallSucceeded($paymentResult)) {
                if (Yii::app()->Paypal->apiLive === true) {
                    //Live mode basic error message
                    $error = 'We were unable to process your request. Please try again later';
                } else {
                    //Sandbox output the actual error message to dive in.
                    $error = $paymentResult['L_LONGMESSAGE0'];
                }
                echo $error;
                Yii::app()->end();
            } else {
                //payment was completed successfully
                if ($orders->status == '1') {
                    $orders->status = '2';
                    $orders->save();
                }
                /* $this->render('confirm',array('orders'=>$orders,
                  'orders_details'=>$orders_details)); */
                $this->redirect('index');
            }
        }
    }

    public function actionCancel() {
        //The token of the cancelled payment typically used to cancel the payment within your application
        $token = trim($_GET['token']);
        //	$payerId = trim($_GET['PayerID']);


        $criteria = new CDbCriteria;
        $criteria->condition = 'token=:Tokenw';
        $criteria->params = array(':Tokenw' => $token);

        $orders = Orders::model()->find($criteria);
        if ($orders->status == '1') {
            $orders->status = '3';
            $orders->save();
        }

        //$this->render('cancel');
        $this->redirect('home');
    }

    function send_mail($from, $to, $subject, $msg) {
        $mail = new YiiMailer();
        $mail->setFrom($from, 'Funky Fresh Admininstrator');
        $mail->setTo($to);
        $mail->setSubject($subject);

        $message = $msg;

        $mail->setBody($message);


        if ($mail->send()) {
            return true;
        }
        return false;
    }

}
