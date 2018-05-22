<?php

class ClassicController extends FrontController {

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex($id = null ,$cat_id =null , $subcat_id=null) {

        if($_GET['cat_id']){
                $cat_id = $_GET['cat_id'];
       } elseif($_POST['cat_id']) {
            $cat_id = $_POST['cat_id'];
        }elseif (!$_POST['cat_id']) {
            $cat_id = '1';
        }
        
        
       if($_GET['subcat_id']){
                $subcat_id = $_GET['subcat_id'];
       }elseif($_POST['subcat_id']) {
            $subcat_id = $_POST['subcat_id'];
        }else if (!$_POST['subcat_id']) {
            $subcat_id = '1';
        }
        //get the default product to display
        $criteria = new CDbCriteria();

        $criteria->condition = 'cat_id=' . $cat_id . ' and subcat_id=' . $subcat_id;

        $products = Product::model()->findAll($criteria);
        /*         * *********Folders*********** */
        Yii::app()->user->setState('cat', strtolower(Category::model()->findByPk($cat_id)->title));
        Yii::app()->user->setState('subcat', strtolower(Subcategory::model()->findByPk($subcat_id)->title));
        /*         * ************************* */
        Yii::app()->user->setState('Jprice', Subcategory::model()->findByPk($subcat_id)->price);
        Yii::app()->user->setState('Jname', Subcategory::model()->findByPk($subcat_id)->title);
        
        $this->render('leftside', array('products' => $products, 'cat_id'=>$cat_id,'subcat_id'=>$subcat_id));
        /*if ($subcat_id == 1 && $cat_id == 1) {
        } elseif ($subcat_id == 2 && $cat_id == 1) {
            $this->render('light-weight', array('products' => $products));
        } elseif ($subcat_id == 3 && $cat_id == 1) {
            $this->render('raglan', array('products' => $products));
        } elseif ($subcat_id == 4 && $cat_id == 1) {
            $this->render('retro', array('products' => $products));
        } elseif ($subcat_id == 5 && $cat_id == 1) {
            $this->render('new-style', array('products' => $products));
        }*/
    }

    public function actionCaptureImage() {
         
        $base64_str = substr($_POST['file'], strpos($_POST['file'], ",") + 1);
        $decoded = base64_decode($base64_str);
        $img_name = rand(1,99999999);
        $result = file_put_contents(Yii::getPathOfAlias('webroot') . '/media/types/captured/' . $img_name . '.png', $decoded);
    //    Yii::app()->user->setState('capturedImg','');
        Yii::app()->user->setState('capturedImg', $img_name . '.png');
        
//        if($_POST['id'] !=  0){
//        $model = TmpProduct::model()->findByPk($_POST['id']);
//        $model->main_image = $img_name . '.png';
//        $model->save(false);
//        }
        //send result - number or false
        //header('Content-Type: application/json');
        echo $img_name.'.png';
    }

    public function actionSetSession() {
        Yii::app()->user->setState($_REQUEST['ses_name'], $_REQUEST['var_value']);
    }

    /* public function actionGetTails()
      {
      $color=$_REQUEST['var_value'];
      $gal_id=Color::model()->findByAttributes(array('color'=>$color))->gallery_id;
      $gallery= Helper::getGalleryImages($gal_id);
      foreach($gallery as $image)
      {
      $list.='<a href="javascript:void(0)" onclick="change_tail(\''.$image['id'].'.png\')"> <img src="'.Yii::app()->getBaseUrl(true).'/gallery/'.$image['id'].'.png"/></a>';
      }
      echo $list;
      } */

    public function actionStep7() {

        $this->render('step7');
    }

    public function actionStep8() {

        $this->render('step8');
    }

    public function actionStep9() {
        Yii::app()->user->setState('rnd_img', 'leftchest_' . rand() . '.png');
        Yii::app()->user->setState('rnd_img', 'rightchest_' . rand() . '.png');
        Yii::app()->user->setState('rnd_img', 'leftarm_' . rand() . '.png');
        Yii::app()->user->setState('rnd_img2', 'leftarm2_' . rand() . '.png');
        Yii::app()->user->setState('rnd_img', 'rightarm_' . rand() . '.png');
        Yii::app()->user->setState('rnd_img2', 'rightarm2_' . rand() . '.png');
        Yii::app()->user->setState('rnd_img', 'back_' . rand() . '.png');
        $this->render('step9');
    }

    public function Getcolors($type_id, $subtype_id) {


        $criteria = new CDbCriteria();

        $criteria->condition = 'cat_id =' . $type . ' and subcat_id=' . $subtype_id;

        $products = Product::model()->findAll($criteria);


        return $products;
    }

    // the calling actions

    public function actionSetdata() {
        $field = $_POST['field'];
        $data = $_POST['data'];

        if ($field == 'sleeve-left') {
            Yii::app()->user->setState('sleeve-left', $data);
            Yii::app()->user->setState('sleeve-right', $data);
        } else if ($field == 'pocket-left') {
            Yii::app()->user->setState('pocket-left', $data);
            Yii::app()->user->setState('pocket-right', $data);
        } else if ($field == 'top_collar') {

            Yii::app()->user->setState('top_collar', $data);
        } else if ($field == 'bottom_jacket') {
            Yii::app()->user->setState('bottom_jacket', $data);
        } else {

            Yii::app()->user->setState($field, $data);
        }




        Yii::app()->end();
    }

    public function actionSavejacket() {
        $saveproduct = new Sjacket();

        $saveproduct->user_id = Yii::app()->user->id;
        $saveproduct->type = $_POST['type'];
        $saveproduct->cat_id = $_POST['cat_id'];
        $saveproduct->subcat_id = $_POST['subcat_id'];
        $saveproduct->price = Yii::app()->user->getState('Jprice');
        $saveproduct->body = Yii::app()->user->getState('body');
        $saveproduct->buttons = Yii::app()->user->getState('buttons');
        $saveproduct->collar = Yii::app()->user->getState('collar');
        $saveproduct->cuff_left = Yii::app()->user->getState('cuff_left');
        $saveproduct->cuff_right = Yii::app()->user->getState('cuff_right');
        $saveproduct->knite = Yii::app()->user->getState('knite');
        $saveproduct->sleeve_left = Yii::app()->user->getState('sleeve_left');
        $saveproduct->sleeve_right = Yii::app()->user->getState('sleeve_right');
        $saveproduct->pocket_left = Yii::app()->user->getState('pocket_left');
        $saveproduct->pocket_right = Yii::app()->user->getState('pocket_right');
        $saveproduct->top_collar = Yii::app()->user->getState('top_collar');
        $saveproduct->bottom_jacket = Yii::app()->user->getState('bottom_jacket');
        $saveproduct->prod_id = Yii::app()->user->getState('DProid_id');
        $saveproduct->image = Yii::app()->user->getState('capturedImg');

        $saveproduct->leftchest = Yii::app()->user->getState('leftchest');
        $saveproduct->leftchest_txt_color = Yii::app()->user->getState('leftchest_txt_color');
        $saveproduct->leftchest_txt_type = Yii::app()->user->getState('leftchest_txt_type');
        //$saveproduct->leftchest_txt_tail=Yii::app()->user->getState('leftchest_txt_tail');

        $saveproduct->rightchest = Yii::app()->user->getState('rightchest');
        $saveproduct->rightchest_txt_color = Yii::app()->user->getState('rightchest_txt_color');
        $saveproduct->rightchest_txt_type = Yii::app()->user->getState('rightchest_txt_type');
        //$saveproduct->rightchest_txt_tail=Yii::app()->user->getState('rightchest_txt_tail');

        $saveproduct->leftarm = Yii::app()->user->getState('leftarm');
        $saveproduct->leftarm_txt_color = Yii::app()->user->getState('leftarm_txt_color');
        $saveproduct->leftarm_txt_type = Yii::app()->user->getState('leftarm_txt_type');
        //$saveproduct->leftarm_txt_tail=Yii::app()->user->getState('leftarm_txt_tail');

        $saveproduct->rightarm = Yii::app()->user->getState('rightarm');
        $saveproduct->rightarm_txt_color = Yii::app()->user->getState('rightarm_txt_color');
        $saveproduct->rightarm_txt_type = Yii::app()->user->getState('rightarm_txt_type');
        //$saveproduct->rightarm_txt_tail=Yii::app()->user->getState('rightarm_txt_tail');

        $saveproduct->back = Yii::app()->user->getState('back');
        $saveproduct->back_txt_color = Yii::app()->user->getState('back_txt_color');
        $saveproduct->back_txt_type = Yii::app()->user->getState('back_txt_type');
        $saveproduct->back_txt_tail = Yii::app()->user->getState('back_txt_tail');

        $saveproduct->save_date = new CDbExpression('NOW()');
        $saveproduct->save(false);

        Yii::app()->end();
    }

    public function actionUpload() {
        Yii::import("ext.EAjaxUpload.qqFileUploader");

        $folder = 'upload/'; // folder for uploaded files
        $allowedExtensions = array("jpg", "jpeg", "png", "gif"); //array("jpg","jpeg","gif","exe","mov" and etc...
        $sizeLimit = 10 * 1024 * 1024; // maximum file size in bytes
        $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
        $result = $uploader->handleUpload($folder);
        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);

        $fileSize = filesize($folder . $result['filename']);  
        $fileName = $result['filename']; //GETTING FILE NAME

        echo $return; // it's array
    }

    public function actionUpload2() {
        Yii::import("ext.EAjaxUpload2.qqFileUploader");

        $folder = 'upload/'; // folder for uploaded files
        $allowedExtensions = array("jpg", "jpeg", "png", "gif"); //array("jpg","jpeg","gif","exe","mov" and etc...
        $sizeLimit = 10 * 1024 * 1024; // maximum file size in bytes
        $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
        $result = $uploader->handleUpload($folder);
        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);

        $fileSize = filesize($folder . $result['filename']); //GETTING FILE SIZE
        $fileName = $result['filename']; //GETTING FILE NAME

        echo $return; // it's array
    }

    public function actionLoad_step($no) {
        if ($no > 0 && $no <= 10) {
            $step = $this->renderPartial("_step" . $no . "_form");
            echo $step;
        }
    }

    public function actionChangeSnapType() {
        $type = $_GET['val'];
        $snaps = Snap::model()->findAll(array('condition' => 'sub_category=1 and type=' . $type));
        foreach ($snaps as $snap) {
            $list.='<span class="btn round" title="' . $snap->title . '" style="background:' . $snap->color . '" onclick="document.getElementById(\'buttons\').src=\'' . Yii::app()->request->baseUrl . '/media/snap/' . $snap->image . '\'; document.getElementById(\'buttons-right\').src=\'' . Yii::app()->request->baseUrl . '/media/snap/' . $snap->right_image . '\';document.getElementById(\'buttons-left\').src=\'' . Yii::app()->request->baseUrl . '/media/snap/' . $snap->left_image . '\';document.getElementById(\'snap-color-picker\').style.background=\''.$snap->color.'\';"></span>';
        }
        echo $list;
    }
    
    public function ActionSaveProduct(){
         if($_POST['_id'] == ''){
             $model = new TmpProduct;
         }else{
             $model = TmpProduct::model()->findByPk($_POST['_id']);
         }
        
        //body
        $model->body_color = $_POST['tmp_body_color'];
        $model->body = $_POST['tmp_body'];
        $model->back = $_POST['tmp_back_body'];
        $model->right_body = $_POST['tmp_body_right'];
        $model->left_body = $_POST['tmp_body_left'];
        
        //sleeves
        $model->sleeves_color = $_POST['tmp_sleeves_color'];
        $model->front_sleeves = $_POST['tmp_front_sleeves'];
        $model->back_sleeves = $_POST['tmp_back_sleeves'];
        $model->right_sleeve = $_POST['tmp_right_sleeves'];
        $model->left_sleeve = $_POST['tmp_left_sleeves'];
        
        //snap(buttons)
        $model->button_color = $_POST['tmp_snap_color'];
        $model->button = $_POST['tmp_front_snap'];
        $model->right_button = $_POST['tmp_right_snap'];
        $model->left_button = $_POST['tmp_left_snap'];
        
        //pocket
        $model->button_color = $_POST['tmp_pocket_color'];
        $model->pockets = $_POST['tmp_front_pocket'];
        $model->bottom_right_pocket = $_POST['tmp_right_pocket'];
        $model->bottom_left_pocket = $_POST['tmp_left_pocket'];
        
        //knit (solid only)
        $model->knit_base_color = $_POST['tmp_knit_color'];
        $model->knit = $_POST['tmp_front_knit'];
        $model->back_knit = $_POST['tmp_back_knit'];
        $model->right_knit = $_POST['tmp_right_knit'];
        $model->left_knit = $_POST['tmp_left_knit'];
        
        //strip single
        $model->knit_stripe_color = $_POST['tmp_knit_stripe_color'];
        $model->knit_stripe = $_POST['tmp_knit_stripe'];
        $model->knit_stripe_back = $_POST['tmp_knit_stripe_back'];
        $model->knit_stripe_right = $_POST['tmp_knit_stripe_right'];
        $model->knit_stripe_left = $_POST['tmp_knit_stripe_left'];
        
        
         //strip border
        $model->knit_stripe_border_color = $_POST['tmp_double_stripe_color'];
        $model->knit_stripe_border = $_POST['tmp_double_stripe'];
//        $model->knit_stripe_border_back = $_POST['tmp_double_stripe_back'];
//        $model->knit_stripe_border_right = $_POST['tmp_knit_double_stripe_right'];
//        $model->knit_stripe_border_left = $_POST['tmp_knit_double_stripe_left'];
        
        //right chest line one
        $model->rightchest1 = $_POST['tmp_rightchest1'];
        $model->rightchest_txt_color1 = $_POST['tmp_rightchest_txt_color2'];
        $model->rightchest_txt_type1 = $_POST['tmp_rightchest_txt_type1'];
        
         //right chest line two
        $model->rightchest2 = $_POST['tmp_rightchest2'];
        $model->rightchest_txt_color2 = $_POST['tmp_rightchest_txt_color2'];
        $model->rightchest_txt_type2 = $_POST['tmp_rightchest_txt_type2'];
        $model->rightchest_image = $_POST['tmp_rightchest_image'];
       
        
         //left chest
        $model->leftchest = $_POST['tmp_leftchest'];
        $model->leftchest_txt_color = $_POST['tmp_leftchest_txt_color'];
        $model->leftchest_txt_type = $_POST['tmp_leftchest_txt_type'];
          $model->leftchest_image = $_POST['tmp_leftchest_image'];
        
        
        //right arm line one
        $model->right_arm1 = $_POST['tmp_rightarm1'];
        $model->rightarm_txt_color1 = $_POST['tmp_rightarm_txt_color1'];
        $model->rightarm_txt_type1 = $_POST['tmp_rightarm_txt_type1'];
        
         //right arm line two
        $model->right_arm2 = $_POST['tmp_rightarm2'];
        $model->rightarm_txt_color2 = $_POST['tmp_rightarm_txt_color2'];
        $model->rightarm_txt_type2 = $_POST['tmp_rightarm_txt_type2'];
         $model->rightarm_image = $_POST['tmp_rightarm_image'];
        $model->rightarm_image2 = $_POST['tmp_rightarm_image2'];
        
         //left arm line one
        $model->left_arm1 = $_POST['tmp_leftarm1'];
        $model->leftarm_txt_color1 = $_POST['tmp_leftarm_txt_color1'];
        $model->leftarm_txt_type1 = $_POST['tmp_leftarm_txt_type1'];
        
         //right arm line two
        $model->left_arm2 = $_POST['tmp_leftarm2'];
        $model->leftarm_txt_color2 = $_POST['tmp_leftarm_txt_color2'];
        $model->leftarm_txt_type2 = $_POST['tmp_leftarm_txt_type2'];
        
        $model->leftarm_image =  $_POST['tmp_leftarm_image'];
        $model->leftarm_image2 = $_POST['tmp_leftarm_image2'];
        
         //back text top
        $model->back_text = $_POST['tmp_back_text'];
        $model->back_text_color = $_POST['tmp_back_text_color'];
        $model->back_text_type = $_POST['tmp_back_text_type'];
        
        //back text middle
        $model->back_text1 = $_POST['tmp_back_text1'];
        $model->back_text_color1 = $_POST['tmp_back_text_color1'];
        $model->back_text_type1 = $_POST['tmp_back_text_type1'];
        
        //back text middle
        $model->back_text2 = $_POST['tmp_back_text2'];
        $model->back_text_color2 = $_POST['tmp_back_text_color2'];
        $model->back_text_type2 = $_POST['tmp_back_text_type2'];
        
         $model->back_image = $_POST['tmp_back_image'];
         $model->back_type = $_POST['tmp_back_type'];
         
         //measurements
        $model->form_size = $_POST['tmp_form_size'];
        $model->chest_size = $_POST['tmp_chest_size'];
        $model->waist_size = $_POST['tmp_waist_size'];
        $model->shoulder_length = $_POST['tmp_shoulder_length'];
        $model->body_length = $_POST['tmp_body_length'];
        $model->sleeve_length = $_POST['tmp_sleeve_length'];
        
      
        
        
        
        $model->user_id =  Yii::app()->user->id;
        $cat = Yii::app()->user->getState('cat'); 
        $cat_id = Category::model()->find("lower(title) = lower('$cat')")->id;
        $subcat = Yii::app()->user->getState('subcat'); 
        $subcat_id = Subcategory::model()->find("lower(title) = lower('$subcat')")->id;

        $model->cat_id = $cat_id;
        $model->subcat_id = $subcat_id;
        $model->product_id = $_POST['tmp_product_id'];
     //   $model->main_image = Yii::app()->user->getState('capturedImg');
         $model->main_image = $_POST['main_image'];
          $model->top_zip = $_POST['tmp_top_zip'];
        if($model->save(false)){
        Yii::app()->user->setState('capturedImg','');
        }
//        $_SESSION['tmp_product_id'][] = $model->id;
        $cart =array();
        $cart[]= $model->id;
        Yii::app()->user->setState('tmp_product_id', $cart);
        
        $arr['id'] = $model->id;
         $arr['cat_id'] = $model->cat_id;
        $arr['subcat_id'] = $model->subcat_id;
        echo json_encode($arr);
    }

}
