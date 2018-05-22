<?php

class ProductController extends AdminController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
                /* 'accessControl', // perform access control for CRUD operations */
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Product;

        if ($model->gallery_id == '') {


            $gallery = new Gallery();
            $gallery->name = true;
            $gallery->description = true;
            $gallery->versions = array(
                'small' => array(
                    'resize' => array(200, null),
                ),
                'medium' => array(
                    'resize' => array(800, null),
                )
            );
            $gallery->save();
        }
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Product'])) {
            $model->attributes = $_POST['Product'];
            $model->gallery_id = $gallery->id;
            $model->cat_id = Yii::app()->user->getState('parent_cat');
            $model->subcat_id = Yii::app()->user->getState('sub_cat');
            $model->code = strtolower($model->title);
            $sub = Subcategory::model()->findByPk($model->subcat_id);
            $model->price = $sub->price;
            $folder = Yii::getPathOfAlias('webroot') . '/media/types/' . strtolower(Category::model()->findByPk(Yii::app()->user->getState('parent_cat'))->title) . '/' . strtolower(Subcategory::model()->findByPk($model->subcat_id)->title) . '/' . strtolower($model->code);

            $left_folder = Yii::getPathOfAlias('webroot') . '/media/types/' . strtolower(Category::model()->findByPk(Yii::app()->user->getState('parent_cat'))->title) . '/' . strtolower(Subcategory::model()->findByPk($model->subcat_id)->title) . '/' . strtolower($model->code) . '/left';

            $right_folder = Yii::getPathOfAlias('webroot') . '/media/types/' . strtolower(Category::model()->findByPk(Yii::app()->user->getState('parent_cat'))->title) . '/' . strtolower(Subcategory::model()->findByPk($model->subcat_id)->title) . '/' . strtolower($model->code) . '/right';

            $back_folder = Yii::getPathOfAlias('webroot') . '/media/types/' . strtolower(Category::model()->findByPk(Yii::app()->user->getState('parent_cat'))->title) . '/' . strtolower(Subcategory::model()->findByPk($model->subcat_id)->title) . '/' . strtolower($model->code) . '/back';

            if (!is_dir($folder)) {
                mkdir($folder, 0777);
            } else {
                echo 'This SubCategory Already exists';
                die;
            }

            if (!is_dir($left_folder)) {
                mkdir($left_folder, 0777);
            } else {
                echo 'This Left Product Already exists';
                die;
            }

            if (!is_dir($right_folder)) {
                mkdir($right_folder, 0777);
            } else {
                echo 'This Right Product Already exists';
                die;
            }

            if (!is_dir($back_folder)) {
                mkdir($back_folder, 0777);
            } else {
                echo 'This Back Folder Already exists';
                die;
            }

            $img_url = Yii::app()->basePath . '/../media/types/' . strtolower(Category::model()->findByPk($model->cat_id)->title) . '/' . strtolower(Subcategory::model()->findByPk($model->subcat_id)->title) . '/' . $model->code . '/';
            $img_url_left = Yii::app()->basePath . '/../media/types/' . strtolower(Category::model()->findByPk($model->cat_id)->title) . '/' . strtolower(Subcategory::model()->findByPk($model->subcat_id)->title) . '/' . $model->code . '/left/';

            $img_url_right = Yii::app()->basePath . '/../media/types/' . strtolower(Category::model()->findByPk($model->cat_id)->title) . '/' . strtolower(Subcategory::model()->findByPk($model->subcat_id)->title) . '/' . $model->code . '/right/';

            $img_url_back = Yii::app()->basePath . '/../media/types/' . strtolower(Category::model()->findByPk($model->cat_id)->title) . '/' . strtolower(Subcategory::model()->findByPk($model->subcat_id)->title) . '/' . $model->code . '/back/';

            /* $uploadedFile=CUploadedFile::getInstance($model,'main_image');
              if(! empty ($uploadedFile)){
              $fileName = $uploadedFile;  // random number + file name
              $model->main_image = $fileName;
              $uploadedFile->saveAs($img_url.$fileName);
              } */

            /////////////////////////////////////

            $bodyfile = CUploadedFile::getInstance($model, 'body');

            if (!empty($bodyfile)) {
                $fileName21 = "body.png";  // random number + file name
                $model->body = $fileName21;
                $bodyfile->saveAs($img_url . $fileName21);
            }

            $topzipfile = CUploadedFile::getInstance($model, 'top_zip');

            if (!empty($topzipfile)) {
                $topzipfile_img = "top_zip.png";  // random number + file name
                $model->top_zip = $topzipfile_img;
                $topzipfile->saveAs($img_url . $topzipfile_img);
            }

            $buttonfile = CUploadedFile::getInstance($model, 'button');

            if (!empty($buttonfile)) {
                $fileName1 = "buttons.png";  // random number + file name
                $model->button = $fileName1;
                $buttonfile->saveAs($img_url . $fileName1);
            }

            $pocketsfile = CUploadedFile::getInstance($model, 'pockets');

            if (!empty($pocketsfile)) {
                $fileName_po = "pockets.png";  // random number + file name
                $model->pockets = $fileName_po;
                $pocketsfile->saveAs($img_url . $fileName_po);
            }

            $knitfile = CUploadedFile::getInstance($model, 'knit');

            if (!empty($knitfile)) {
                $fileName17 = "knit.png";  // random number + file name
                $model->knit = $fileName17;
                $knitfile->saveAs($img_url . $fileName17);
            }

            $frontsleeves = CUploadedFile::getInstance($model, 'front_sleeves');

            if (!empty($frontsleeves)) {
                $fileName_fs = "front-sleeves.png";  // random number + file name
                $model->front_sleeves = $fileName_fs;
                $frontsleeves->saveAs($img_url . $fileName_fs);
            }
//----------------------------------------- Left Preview -------------------------------------------- // 
            $leftbody = CUploadedFile::getInstance($model, 'left_body');

            if (!empty($leftbody)) {
                $fileName16 = "body-left.png";  // random number + file name
                $model->left_body = $fileName16;
                $leftbody->saveAs($img_url_left . $fileName16);
            }

            $leftsleeve = CUploadedFile::getInstance($model, 'left_sleeve');

            if (!empty($leftsleeve)) {
                $fileName20 = "sleeve-left.png";  // random number + file name
                $model->left_sleeve = $fileName20;
                $leftsleeve->saveAs($img_url_left . $fileName20);
            }

            $bottomleftpocket = CUploadedFile::getInstance($model, 'bottom_left_pocket');

            if (!empty($bottomleftpocket)) {
                $fileName6 = "pocket-left.png";  // random number + file name
                $model->bottom_left_pocket = $fileName6;
                $bottomleftpocket->saveAs($img_url_left . $fileName6);
            }

            $leftknit = CUploadedFile::getInstance($model, 'left_knit');

            if (!empty($leftknit)) {
                $leftknit_name = "knit-left.png";  // random number + file name
                $model->left_knit = $leftknit_name;
                $leftknit->saveAs($img_url_left . $leftknit_name);
            }

            $leftbutton = CUploadedFile::getInstance($model, 'left_button');

            if (!empty($leftbutton)) {
                $leftbutton_name = "button-left.png";  // random number + file name
                $model->left_button = $leftbutton_name;
                $leftbutton->saveAs($img_url_left . $leftbutton_name);
            }

//--------------------------------------- Right Preview ----------------------------------------------- // 
            $rightbody = CUploadedFile::getInstance($model, 'right_body');

            if (!empty($rightbody)) {
                $fileName15 = "body-right.png";  // random number + file name
                $model->right_body = $fileName15;
                $rightbody->saveAs($img_url_right . $fileName15);
            }

            $rightsleeve = CUploadedFile::getInstance($model, 'right_sleeve');

            if (!empty($rightsleeve)) {
                $fileName19 = "sleeve-right.png";  // random number + file name
                $model->right_sleeve = $fileName19;
                $rightsleeve->saveAs($img_url_right . $fileName19);
            }

            $bottomrightpocket = CUploadedFile::getInstance($model, 'bottom_right_pocket');

            if (!empty($bottomrightpocket)) {
                $fileName4 = "pocket-right.png";  // random number + file name
                $model->bottom_right_pocket = $fileName4;
                $bottomrightpocket->saveAs($img_url_right . $fileName4);
            }

            $rightknit = CUploadedFile::getInstance($model, 'right_knit');

            if (!empty($rightknit)) {
                $rightknit_name = "knit-right.png";  // random number + file name
                $model->right_knit = $rightknit_name;
                $rightknit->saveAs($img_url_right . $rightknit_name);
            }

            $rightbutton = CUploadedFile::getInstance($model, 'right_button');

            if (!empty($rightbutton)) {
                $rightbutton_name = "button-right.png";  // random number + file name
                $model->right_button = $rightbutton_name;
                $rightbutton->saveAs($img_url_right . $rightbutton_name);
            }
//----------------------------------------- Back Preview ---------------------------------------------- // 
            $back = CUploadedFile::getInstance($model, 'back');

            if (!empty($back)) {
                $back_name = "back.png";  // random number + file name
                $model->back = $back_name;
                $back->saveAs($img_url_back . $back_name);
            }

            $backknit = CUploadedFile::getInstance($model, 'back_knit');

            if (!empty($backknit)) {
                $backknit_name = "knit-back.png";  // random number + file name
                $model->back_knit = $backknit_name;
                $backknit->saveAs($img_url_back . $backknit_name);
            }

            $backsleeves = CUploadedFile::getInstance($model, 'back_sleeves');

            if (!empty($backsleeves)) {
                $fileName_bs = "back-sleeves.png";  // random number + file name
                $model->back_sleeves = $fileName_bs;
                $backsleeves->saveAs($img_url_back . $fileName_bs);
            }

// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $cufile=CUploadedFile::getInstance($model,'cuff_left');

              if(!empty ($cufile)){
              $fileName2 = "cuff-left.png";  // random number + file name
              $model->cuff_left = $fileName2;
              $cufile->saveAs($img_url.$fileName2);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $cufile_right=CUploadedFile::getInstance($model,'cuff_right');

              if(!empty ($cufile_right)){
              $fileName_right = "cuff-right.png";  // random number + file name
              $model->cuff_right = $fileName_right;
              $cufile_right->saveAs($img_url.$fileName_right);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd3 = rand(0,9999);  // generate random number between 0-9999
              $toprightpocket=CUploadedFile::getInstance($model,'top_right_pocket');

              if(!empty ($toprightpocket)){
              $fileName3 = "{$rnd3}-{$toprightpocket}";  // random number + file name
              $model->top_right_pocket = $fileName3;
              $toprightpocket->saveAs($img_url.$fileName3);
              } */

            /* $rnd5 = rand(0,9999);  // generate random number between 0-9999
              $topleftpocket=CUploadedFile::getInstance($model,'top_left_pocket');

              if(!empty ($topleftpocket)){
              $fileName5 = "{$rnd5}-{$topleftpocket}";  // random number + file name
              $model->top_left_pocket = $fileName5;
              $topleftpocket->saveAs($img_url.$fileName5);
              } */

// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd7 = rand(0,9999);  // generate random number between 0-9999
              $collarfile=CUploadedFile::getInstance($model,'collar');

              if(!empty ($collarfile)){
              $fileName7 = "collar.png";  // random number + file name
              $model->collar = $fileName7;
              $collarfile->saveAs($img_url.$fileName7);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd8 = rand(0,9999);  // generate random number between 0-9999
              $toprightpatch=CUploadedFile::getInstance($model,'top_right_patch');

              if(!empty ($toprightpatch)){
              $fileName8 = "{$rnd8}-{$toprightpatch}";  // random number + file name
              $model->top_right_patch = $fileName8;
              $toprightpatch->saveAs($img_url.$fileName8);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd9 = rand(0,9999);  // generate random number between 0-9999
              $bottomrightpatch=CUploadedFile::getInstance($model,'bottom_right_patch');

              if(!empty ($bottomrightpatch)){
              $fileName9 = "{$rnd9}-{$bottomrightpatch}";  // random number + file name
              $model->bottom_right_patch = $fileName9;
              $bottomrightpatch->saveAs($img_url.$fileName9);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd10 = rand(0,9999);  // generate random number between 0-9999
              $topleftpatch=CUploadedFile::getInstance($model,'top_left_patch');

              if(!empty ($topleftpatch)){
              $fileName10 = "{$rnd10}-{$topleftpatch}";  // random number + file name
              $model->top_left_patch = $fileName10;
              $topleftpatch->saveAs($img_url.$fileName10);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd11 = rand(0,9999);  // generate random number between 0-9999
              $bottomleftpatch=CUploadedFile::getInstance($model,'bottom_left_patch');

              if(!empty ($bottomleftpatch)){
              $fileName11 = "{$rnd11}-{$bottomleftpatch}";  // random number + file name
              $model->bottom_left_patch = $fileName11;
              $bottomleftpatch->saveAs($img_url.$fileName11);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd12 = rand(0,9999);  // generate random number between 0-9999
              $hoodefile=CUploadedFile::getInstance($model,'hoode');

              if(!empty ($hoodefile)){
              $fileName12 = "{$rnd12}-{$hoodefile}";  // random number + file name
              $model->hoode = $fileName12;
              $hoodefile->saveAs($img_url.$fileName12);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd13 = rand(0,9999);  // generate random number between 0-9999
              $upperbody=CUploadedFile::getInstance($model,'upper_body');

              if(!empty ($upperbody)){
              $fileName13 = "{$rnd13}-{$upperbody}";  // random number + file name
              $model->upper_body = $fileName13;
              $upperbody->saveAs($img_url.$fileName13);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd14 = rand(0,9999);  // generate random number between 0-9999
              $bottombody=CUploadedFile::getInstance($model,'bottom_body');

              if(!empty ($bottombody)){
              $fileName14 = "{$rnd14}-{$bottombody}";  // random number + file name
              $model->bottom_body = $fileName14;
              $bottombody->saveAs($img_url.$fileName14);
              } */

            /* $rnd18 = rand(0,9999);  // generate random number between 0-9999
              $innerlining=CUploadedFile::getInstance($model,'inner_lining');

              if(!empty ($innerlining)){
              $fileName18 = "{$rnd18}-{$innerlining}";  // random number + file name
              $model->inner_lining = $fileName18;
              $innerlining->saveAs($img_url.$fileName18);
              } */

            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }
        $model->gallery_id = $gallery->id;
        $gallery = Gallery::model()->findByPk($model->gallery_id);

        $this->render('create', array(
            'model' => $model, 'gallery' => $gallery
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Product'])) {
            $sub = Subcategory::model()->findByPk($model->subcat_id);
            $model->price = $sub->price;
            /* if( $model->main_image != '')
              {
              $_POST['Product']['main_image'] = $model->main_image;
              } */
            if ($model->body != '') {
                $_POST['Product']['body'] = $model->body;
            }
            if ($model->top_zip != '') {
                $_POST['Product']['top_zip'] = $model->top_zip;
            }
            if ($model->front_sleeves != '') {
                $_POST['Product']['front_sleeves'] = $model->front_sleeves;
            }
            if ($model->button != '') {
                $_POST['Product']['button'] = $model->button;
            }
            if ($model->pockets != '') {
                $_POST['Product']['pockets'] = $model->pockets;
            }
            if ($model->knit != '') {
                $_POST['Product']['knit'] = $model->knit;
            }
            /*             * ********************************* Right Preview ****************************************************** */
            if ($model->right_body != '') {
                $_POST['Product']['right_body'] = $model->right_body;
            }
            if ($model->right_sleeve != '') {
                $_POST['Product']['right_sleeve'] = $model->right_sleeve;
            }
            if ($model->bottom_right_pocket != '') {
                $_POST['Product']['bottom_right_pocket'] = $model->bottom_right_pocket;
            }
            if ($model->right_knit != '') {
                $_POST['Product']['right_knit'] = $model->right_knit;
            }
            if ($model->right_button != '') {
                $_POST['Product']['right_button'] = $model->right_button;
            }
            /*             * ********************************* Left Preview ******************************************************* */
            if ($model->left_body != '') {
                $_POST['Product']['left_body'] = $model->left_body;
            }
            if ($model->left_sleeve != '') {
                $_POST['Product']['left_sleeve'] = $model->left_sleeve;
            }
            if ($model->bottom_left_pocket != '') {
                $_POST['Product']['bottom_left_pocket'] = $model->bottom_left_pocket;
            }
            if ($model->left_knit != '') {
                $_POST['Product']['left_knit'] = $model->left_knit;
            }
            if ($model->left_button != '') {
                $_POST['Product']['left_button'] = $model->left_button;
            }
            /*             * ********************************* Back Preview ******************************************************* */
            if ($model->back != '') {
                $_POST['Product']['back'] = $model->back;
            }
            if ($model->back_knit != '') {
                $_POST['Product']['back_knit'] = $model->back_knit;
            }
            if ($model->back_sleeves != '') {
                $_POST['Product']['back_sleeves'] = $model->back_sleeves;
            }

// --------------------------------------------------------------------------------------------------- //
            /* if( $model->collar != '')
              {
              $_POST['Product']['collar'] = $model->collar;
              } */
// --------------------------------------------------------------------------------------------------- //
            /* if( $model->cuff_left != '')
              {
              $_POST['Product']['cuff_left'] = $model->cuff_left;
              } */
// --------------------------------------------------------------------------------------------------- //
            /* if( $model->cuff_right != '')
              {
              $_POST['Product']['cuff_right'] = $model->cuff_right;
              } */
// --------------------------------------------------------------------------------------------------- //
            /* if( $model->top_right_pocket != '')
              {
              $_POST['Product']['top_right_pocket'] = $model->top_right_pocket;
              } */
// --------------------------------------------------------------------------------------------------- //
            /* if( $model->top_left_pocket != '')
              {
              $_POST['Product']['top_left_pocket'] = $model->top_left_pocket;
              } */

// --------------------------------------------------------------------------------------------------- //
            /* if( $model->top_right_patch != '')
              {
              $_POST['Product']['top_right_patch'] = $model->top_right_patch;
              } */
// --------------------------------------------------------------------------------------------------- //
            /* if( $model->top_left_patch != '')
              {
              $_POST['Product']['top_left_patch'] = $model->top_left_patch;
              } */
// --------------------------------------------------------------------------------------------------- //
            /* if( $model->bottom_right_patch != '')
              {
              $_POST['Product']['bottom_right_patch'] = $model->bottom_right_patch;
              } */
// --------------------------------------------------------------------------------------------------- //
            /* if( $model->bottom_left_patch != '')
              {
              $_POST['Product']['bottom_left_patch'] = $model->bottom_left_patch;
              } */
// --------------------------------------------------------------------------------------------------- //
            /* if( $model->hoode != '')
              {
              $_POST['Product']['hoode'] = $model->hoode;
              } */
// --------------------------------------------------------------------------------------------------- //
            /* if( $model->upper_body != '')
              {
              $_POST['Product']['upper_body'] = $model->upper_body;
              } */
// --------------------------------------------------------------------------------------------------- //
            /* if( $model->bottom_body != '')
              {
              $_POST['Product']['bottom_body'] = $model->bottom_body;
              } */

// --------------------------------------------------------------------------------------------------- //
            /* if( $model->inner_lining != '')
              {
              $_POST['Product']['inner_lining'] = $model->inner_lining;
              } */

            $model->attributes = $_POST['Product'];

            $model->cat_id = Yii::app()->user->getState('parent_cat');
            $model->subcat_id = Yii::app()->user->getState('sub_cat');

            $img_url = Yii::app()->basePath . '/../media/types/' . strtolower(Category::model()->findByPk($model->cat_id)->title) . '/' . strtolower(Subcategory::model()->findByPk($model->subcat_id)->title) . '/' . strtolower($model->code) . '/';

            $img_url_left = Yii::app()->basePath . '/../media/types/' . strtolower(Category::model()->findByPk($model->cat_id)->title) . '/' . strtolower(Subcategory::model()->findByPk($model->subcat_id)->title) . '/' . strtolower($model->code) . '/left/';

            $img_url_right = Yii::app()->basePath . '/../media/types/' . strtolower(Category::model()->findByPk($model->cat_id)->title) . '/' . strtolower(Subcategory::model()->findByPk($model->subcat_id)->title) . '/' . strtolower($model->code) . '/right/';

            $img_url_back = Yii::app()->basePath . '/../media/types/' . strtolower(Category::model()->findByPk($model->cat_id)->title) . '/' . strtolower(Subcategory::model()->findByPk($model->subcat_id)->title) . '/' . strtolower($model->code) . '/back/';

            /* $uploadedFile=CUploadedFile::getInstance($model,'main_image');

              if(! empty ($uploadedFile)){
              $rnd = rand(0,9999);
              $fileName = "{$rnd}-{$uploadedFile}";
              $model->main_image=	$fileName;
              $uploadedFile->saveAs($img_url.$model->main_image);
              } */

            // get color title // 
            //$colorTitle = Color::model()->findByPK($model->color_id);
// //////////////////////////////////

            $bodyfile = CUploadedFile::getInstance($model, 'body');

            if (!empty($bodyfile)) {
                $fileName21 = "body.png";  // random number + file name
                $model->body = $fileName21;
                $bodyfile->saveAs($img_url . $fileName21);
            }

            $topzipfile = CUploadedFile::getInstance($model, 'top_zip');

            if (!empty($topzipfile)) {
                $topzipfile_img = "top_zip.png";  // random number + file name
                $model->top_zip = $topzipfile_img;
                $topzipfile->saveAs($img_url . $topzipfile_img);
            }

            $knitfile = CUploadedFile::getInstance($model, 'knit');

            if (!empty($knitfile)) {
                $fileName17 = "knit.png";  // random number + file name
                $model->knit = $fileName17;
                $knitfile->saveAs($img_url . $fileName17);
            }

            $frontsleeves = CUploadedFile::getInstance($model, 'front_sleeves');

            if (!empty($frontsleeves)) {
                $fileName_fs = "front-sleeves.png";  // random number + file name
                $model->front_sleeves = $fileName_fs;
                $frontsleeves->saveAs($img_url . $fileName_fs);
            }

            $buttonfile = CUploadedFile::getInstance($model, 'button');

            if (!empty($buttonfile)) {
                $fileName1 = "buttons.png";  // random number + file name
                $model->button = $fileName1;
                $buttonfile->saveAs($img_url . $fileName1);
            }
            $pocketfile = CUploadedFile::getInstance($model, 'pockets');

            if (!empty($pocketfile)) {
                $fileName_po = "pockets.png";  // random number + file name
                $model->pockets = $fileName_po;
                $pocketfile->saveAs($img_url . $fileName_po);
            }
            /*             * ************************************* Right Preview ************************************************ */
            $rightbody = CUploadedFile::getInstance($model, 'right_body');

            if (!empty($rightbody)) {
                $fileName15 = "body-right.png";  // random number + file name
                $model->right_body = $fileName15;
                $rightbody->saveAs($img_url_right . $fileName15);
            }

            $rightsleeve = CUploadedFile::getInstance($model, 'right_sleeve');

            if (!empty($rightsleeve)) {
                $fileName19 = "sleeve-right.png";  // random number + file name
                $model->right_sleeve = $fileName19;
                $rightsleeve->saveAs($img_url_right . $fileName19);
            }

            $bottomrightpocket = CUploadedFile::getInstance($model, 'bottom_right_pocket');

            if (!empty($bottomrightpocket)) {
                $fileName4 = "pocket-right.png";  // random number + file name
                $model->bottom_right_pocket = $fileName4;
                $bottomrightpocket->saveAs($img_url_right . $fileName4);
            }

            $rightsleeve = CUploadedFile::getInstance($model, 'right_sleeve');

            if (!empty($rightsleeve)) {
                $fileName19 = "sleeve-right.png";  // random number + file name
                $model->right_sleeve = $fileName19;
                $rightsleeve->saveAs($img_url_right . $fileName19);
            }

            $rightknit = CUploadedFile::getInstance($model, 'right_knit');

            if (!empty($rightknit)) {
                $rightknit_name = "knit-right.png";  // random number + file name
                $model->right_knit = $rightknit_name;
                $rightknit->saveAs($img_url_right . $rightknit_name);
            }

            $rightbutton = CUploadedFile::getInstance($model, 'right_button');

            if (!empty($rightbutton)) {
                $rightbutton_name = "button-right.png";  // random number + file name
                $model->right_button = $rightbutton_name;
                $rightbutton->saveAs($img_url_right . $rightbutton_name);
            }
            /*             * ************************************* Left Preview ************************************************ */
            $leftbody = CUploadedFile::getInstance($model, 'left_body');

            if (!empty($leftbody)) {
                $fileName16 = "body-left.png";  // random number + file name
                $model->left_body = $fileName16;
                $leftbody->saveAs($img_url_left . $fileName16);
            }

            $leftsleeve = CUploadedFile::getInstance($model, 'left_sleeve');

            if (!empty($leftsleeve)) {
                $fileName20 = "sleeve-left.png";  // random number + file name
                $model->left_sleeve = $fileName20;
                $leftsleeve->saveAs($img_url_left . $fileName20);
            }

            $bottomleftpocket = CUploadedFile::getInstance($model, 'bottom_left_pocket');

            if (!empty($bottomleftpocket)) {
                $fileName6 = "pocket-left.png";  // random number + file name
                $model->bottom_left_pocket = $fileName6;
                $bottomleftpocket->saveAs($img_url_left . $fileName6);
            }

            $leftknit = CUploadedFile::getInstance($model, 'left_knit');

            if (!empty($leftknit)) {
                $leftknit_name = "knit-left.png";  // random number + file name
                $model->left_knit = $leftknit_name;
                $leftknit->saveAs($img_url_left . $leftknit_name);
            }

            $leftbutton = CUploadedFile::getInstance($model, 'left_button');

            if (!empty($leftbutton)) {
                $leftbutton_name = "button-left.png";  // random number + file name
                $model->left_button = $leftbutton_name;
                $leftbutton->saveAs($img_url_left . $leftbutton_name);
            }
            /*             * ************************************* Back Preview ************************************************ */
            $back = CUploadedFile::getInstance($model, 'back');

            if (!empty($back)) {
                $back_name = "back.png";  // random number + file name
                $model->back = $back_name;
                $back->saveAs($img_url_back . $back_name);
            }

            $backknit = CUploadedFile::getInstance($model, 'back_knit');

            if (!empty($backknit)) {
                $backknit_name = "knit-back.png";  // random number + file name
                $model->back_knit = $backknit_name;
                $backknit->saveAs($img_url_back . $backknit_name);
            }

            $backsleeves = CUploadedFile::getInstance($model, 'back_sleeves');

            if (!empty($backsleeves)) {
                $fileName_bs = "back-sleeves.png";  // random number + file name
                $model->back_sleeves = $fileName_bs;
                $backsleeves->saveAs($img_url_back . $fileName_bs);
            }

            /* $cufile=CUploadedFile::getInstance($model,'cuff_left');

              if(!empty ($cufile)){
              $fileName2 = "cuff-left.png";  // random number + file name
              $model->cuff_left = $fileName2;
              $cufile->saveAs($img_url.$fileName2);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $cufile_right=CUploadedFile::getInstance($model,'cuff_right');

              if(!empty ($cufile_right)){
              $fileName_right = "cuff-right.png";  // random number + file name
              $model->cuff_right = $fileName_right;
              $cufile_right->saveAs($img_url.$fileName_right);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd3 = rand(0,9999);  // generate random number between 0-9999
              $toprightpocket=CUploadedFile::getInstance($model,'top_right_pocket');

              if(!empty ($toprightpocket)){
              $fileName3 = "{$rnd3}-{$toprightpocket}";  // random number + file name
              $model->top_right_pocket = $fileName3;
              $toprightpocket->saveAs($img_url.$fileName3);
              } */
            /* $rnd5 = rand(0,9999);  // generate random number between 0-9999
              $topleftpocket=CUploadedFile::getInstance($model,'top_left_pocket');

              if(!empty ($topleftpocket)){
              $fileName5 = "{$rnd5}-{$topleftpocket}";  // random number + file name
              $model->top_left_pocket = $fileName5;
              $topleftpocket->saveAs($img_url.$fileName5);
              } */
            /* $collarfile=CUploadedFile::getInstance($model,'collar');

              if(!empty ($collarfile)){
              $fileName7 = "collar.png";  // random number + file name
              $model->collar = $fileName7;
              $collarfile->saveAs($img_url.$fileName7);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd8 = rand(0,9999);  // generate random number between 0-9999
              $toprightpatch=CUploadedFile::getInstance($model,'top_right_patch');

              if(!empty ($toprightpatch)){
              $fileName8 = "{$rnd8}-{$toprightpatch}";  // random number + file name
              $model->top_right_patch = $fileName8;
              $toprightpatch->saveAs($img_url.$fileName8);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd9 = rand(0,9999);  // generate random number between 0-9999
              $bottomrightpatch=CUploadedFile::getInstance($model,'bottom_right_patch');

              if(!empty ($bottomrightpatch)){
              $fileName9 = "{$rnd9}-{$bottomrightpatch}";  // random number + file name
              $model->bottom_right_patch = $fileName9;
              $bottomrightpatch->saveAs($img_url.$fileName9);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd10 = rand(0,9999);  // generate random number between 0-9999
              $topleftpatch=CUploadedFile::getInstance($model,'top_left_patch');

              if(!empty ($topleftpatch)){
              $fileName10 = "{$rnd10}-{$topleftpatch}";  // random number + file name
              $model->top_left_patch = $fileName10;
              $topleftpatch->saveAs($img_url.$fileName10);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd11 = rand(0,9999);  // generate random number between 0-9999
              $bottomleftpatch=CUploadedFile::getInstance($model,'bottom_left_patch');

              if(!empty ($bottomleftpatch)){
              $fileName11 = "{$rnd11}-{$bottomleftpatch}";  // random number + file name
              $model->bottom_left_patch = $fileName11;
              $bottomleftpatch->saveAs($img_url.$fileName11);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd12 = rand(0,9999);  // generate random number between 0-9999
              $hoodefile=CUploadedFile::getInstance($model,'hoode');

              if(!empty ($hoodefile)){
              $fileName12 = "{$rnd12}-{$hoodefile}";  // random number + file name
              $model->hoode = $fileName12;
              $hoodefile->saveAs($img_url.$fileName12);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd13 = rand(0,9999);  // generate random number between 0-9999
              $upperbody=CUploadedFile::getInstance($model,'upper_body');

              if(!empty ($upperbody)){
              $fileName13 = "{$rnd13}-{$upperbody}";  // random number + file name
              $model->upper_body = $fileName13;
              $upperbody->saveAs($img_url.$fileName13);
              } */
// ---------------------------------------------------------------------------------------------------------------------------------------- // 
            /* $rnd14 = rand(0,9999);  // generate random number between 0-9999
              $bottombody=CUploadedFile::getInstance($model,'bottom_body');

              if(!empty ($bottombody)){
              $fileName14 = "{$rnd14}-{$bottombody}";  // random number + file name
              $model->bottom_body = $fileName14;
              $bottombody->saveAs($img_url.$fileName14);
              } */
            /* $rnd18 = rand(0,9999);  // generate random number between 0-9999
              $innerlining=CUploadedFile::getInstance($model,'inner_lining');

              if(!empty ($innerlining)){
              $fileName18 = "{$rnd18}-{$innerlining}";  // random number + file name
              $model->inner_lining = $fileName18;
              $innerlining->saveAs($img_url.$fileName18);
              } */

            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }
        $gallery = Gallery::model()->findByPk($model->gallery_id);

        $this->render('update', array(
            'model' => $model, 'gallery' => $gallery,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        if (isset($_REQUEST['id'])) {
            Yii::app()->user->setState('sub_cat', $_REQUEST['id']);
        }
        $_GET['Product']['cat_id'] = Yii::app()->user->getState('parent_cat');
        $_GET['Product']['subcat_id'] = Yii::app()->user->getState('sub_cat');


        $model = new Product('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Product']))
            $model->attributes = $_GET['Product'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Product::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'product-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
