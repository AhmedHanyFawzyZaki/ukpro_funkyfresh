<?php

class UserController extends AdminController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','upload'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new User;
		$user_details= new UserDetails();

		$rnd = rand(0,9999);  // generate random number between 0-9999
		$uploadedFile=CUploadedFile::getInstance($model,'image');

		if(! empty ($uploadedFile)){
			$fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
			$model->image = $fileName;
			$uploadedFile->saveAs(Yii::app()->basePath.'/../media/members/'.$fileName);
		}

		$cats = Category::model()->findAll();


		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);


		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$user_details->attributes=$_POST['UserDetails'];


		//	echo $_POST['User']['groups_id'].'ddd';

		//	exit();

			if($model->save()){

				$user_details->user_id= $model->id;
				$user_details->save(false);
				$this->redirect(array('view','id'=>$model->id));
			}


			//send an email and set notification
		/*	Yii::app()->mailer->sendMIME(
			'from@example.com',
			array(
			    'm.amer@egprosolutions.com',

			),
			'Subject',
			'This is the plain text body',
			'<html><body>This is the HTML body</body></html>'
			);*/


		}

		$this->render('create',array(
				'model'=>$model,'user_details'=>$user_details,
				'cats' => $cats
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$criteria=new CDbCriteria;
		$criteria->condition='user_id=:userID';
		$criteria->params=array(':userID'=>$id);
		$user_details= UserDetails::model()->find($criteria); // $params is not needed


		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);
		$temp2 = $model->image;
		if(isset($_POST['User']))
		{
			if( $model->image != ''){
				$_POST['User']['image'] = $model->image;
			}

			$model->attributes=$_POST['User'];

			$uploadedFile=CUploadedFile::getInstance($model,'image');

			if(! empty ($uploadedFile)){
				if($model->image =='')
				{
					$rnd = rand(0,9999);
					$fileName = "{$rnd}-{$uploadedFile}";
					$model->image=	$fileName;
					if($temp2){
					if (file_exists(Yii::app()->basePath.'/../media/members/' . $temp2))
                        unlink(Yii::app()->basePath.'/../media/members/' . $temp2);
					}
				}

				$uploadedFile->saveAs(Yii::app()->basePath.'/../media/members/'.$model->image);
			}


			if($model->save())
			{
					$user_details->user_id= $model->id;
					$user_details->attributes=$_POST['UserDetails'];
					$user_details->save(false);
		    		$this->redirect(array('view','id'=>$model->id));
			}

		}


		$model->password=$model->password_repeat=$model->simple_decrypt($model->password);
		$this->render('update',array(
			'model'=>$model,'user_details'=>$user_details
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$model = $this->loadModel($id);
			if($model->image){
			if(file_exists(Yii::app()->basePath.'/../media/members/' . $model->image))
				unlink(Yii::app()->basePath.'/../media/members/' . $model->image);
			}
			$model->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('index',array(
			'model'=>$model,
		));
	}



	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}




	protected function beforeSave()
	{
		if (parent::beforeSave()){
			$this->pwd_hash = $this->hash($this->password);
			return true;
		}
		return false;
	}



	// Authentication methods
	public function hash($value)
	{
		return crypt($value);
	}

	public function check($value)
	{
		$new_hash = crypt($value, $this->pwd_hash);
		if ($new_hash == $this->pwd_hash) {
			return true;
		}
		return false;
	}

	public function actionUpload()
	{
		$output_dir= $_SERVER["DOCUMENT_ROOT"].'/yii_final/media/';// folder for uploaded files

		if(isset($_FILES["myfile"]))
		{
			$ret = array();

			$error =$_FILES["myfile"]["error"];
			if(!is_array($_FILES["myfile"]["name"])) //single file
			{
				$fileName = $_FILES["myfile"]["name"];
				move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $_FILES["myfile"]["name"]);
				$ret[$fileName]= $output_dir.$fileName;
			}
			else
			{
				$fileCount = count($_FILES["myfile"]["name"]);
				for($i=0; $i < $fileCount; $i++)
				{
					$fileName = $_FILES["myfile"]["name"][$i];
					$ret[$fileName]= $output_dir.$fileName;
					move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName );
				}

			}
			echo json_encode($ret);
		}
	}





}