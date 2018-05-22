<?php

class SnapController extends AdminController
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
			/*'accessControl', // perform access control for CRUD operations*/
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
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
		$model=new Snap;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Snap']))
		{
			$model->attributes=$_POST['Snap'];
			$rnd = rand(0,9999);  // generate random number between 0-9999
			$uploadedFile=CUploadedFile::getInstance($model,'image');

			if(! empty ($uploadedFile)){
				$fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
				$model->image = $fileName;
				$uploadedFile->saveAs(Yii::app()->basePath.'/../media/snap/'.$fileName);
			}
			/***************extra image****************/
			$rnd1 = rand(0,9999);  // generate random number between 0-9999
			$uploadedFile1=CUploadedFile::getInstance($model,'extra_image');

			if(! empty ($uploadedFile1)){
				$fileName1 = "{$rnd1}-{$uploadedFile1}";  // random number + file name
				$model->extra_image = $fileName1;
				$uploadedFile1->saveAs(Yii::app()->basePath.'/../media/snap/'.$fileName1);
			}
			/***************left image****************/
			$rnd2 = rand(0,9999);  // generate random number between 0-9999
			$uploadedFile2=CUploadedFile::getInstance($model,'left_image');

			if(! empty ($uploadedFile2)){
				$fileName2 = "{$rnd2}-{$uploadedFile2}";  // random number + file name
				$model->left_image = $fileName2;
				$uploadedFile2->saveAs(Yii::app()->basePath.'/../media/snap/'.$fileName2);
			}
			/***************right image****************/
			$rnd3 = rand(0,9999);  // generate random number between 0-9999
			$uploadedFile3=CUploadedFile::getInstance($model,'right_image');

			if(! empty ($uploadedFile3)){
				$fileName3 = "{$rnd3}-{$uploadedFile3}";  // random number + file name
				$model->right_image = $fileName3;
				$uploadedFile3->saveAs(Yii::app()->basePath.'/../media/snap/'.$fileName3);
			}
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Snap']))
		{
			if( $model->image != ''){
					$_POST['Snap']['image'] = $model->image;
			}
			if( $model->extra_image != ''){
					$_POST['Snap']['extra_image'] = $model->extra_image;
			}
			if( $model->left_image != ''){
					$_POST['Snap']['left_image'] = $model->left_image;
			}
			if( $model->right_image != ''){
					$_POST['Snap']['right_image'] = $model->right_image;
			}
			$model->attributes=$_POST['Snap'];
			
			$uploadedFile=CUploadedFile::getInstance($model,'image');
			if(! empty ($uploadedFile)){
				if($model->image =='')
				{
					$rnd = rand(0,9999);
					$fileName = "{$rnd}-{$uploadedFile}";
					$model->image=$fileName;
				}

					$uploadedFile->saveAs(Yii::app()->basePath.'/../media/snap/'.$model->image);
			}
			$uploadedFile1=CUploadedFile::getInstance($model,'extra_image');
			if(! empty ($uploadedFile1)){
				if($model->extra_image =='')
				{
					$rnd1 = rand(0,9999);
					$fileName1 = "{$rnd1}-{$uploadedFile1}";
					$model->extra_image=$fileName1;
				}

					$uploadedFile1->saveAs(Yii::app()->basePath.'/../media/snap/'.$model->extra_image);
			}
			/******************************************************/
			$uploadedFile2=CUploadedFile::getInstance($model,'left_image');
			if(! empty ($uploadedFile2)){
				if($model->left_image =='')
				{
					$rnd2 = rand(0,9999);
					$fileName2 = "{$rnd2}-{$uploadedFile2}";
					$model->left_image=$fileName2;
				}

					$uploadedFile2->saveAs(Yii::app()->basePath.'/../media/snap/'.$model->left_image);
			}
			$uploadedFile3=CUploadedFile::getInstance($model,'right_image');
			if(! empty ($uploadedFile3)){
				if($model->right_image =='')
				{
					$rnd3 = rand(0,9999);
					$fileName3 = "{$rnd3}-{$uploadedFile3}";
					$model->right_image=$fileName3;
				}

					$uploadedFile3->saveAs(Yii::app()->basePath.'/../media/snap/'.$model->right_image);
			}
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
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
			$this->loadModel($id)->delete();

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
		$model=new Snap('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Snap']))
			$model->attributes=$_GET['Snap'];

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
		$model=Snap::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='snap-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
