<?php

class StripeController extends AdminController
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
		$model=new Stripe;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Stripe']))
		{
			$model->attributes=$_POST['Stripe'];

			$rnd = rand(0,9999);  // generate random number between 0-9999
			$uploadedFile=CUploadedFile::getInstance($model,'image');

			if(! empty ($uploadedFile)){
				$fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
				$model->image = $fileName;
				$uploadedFile->saveAs(Yii::app()->basePath.'/../media/stripes/'.$fileName);
			}
			/*****************************************************/
			$uploadedFile1=CUploadedFile::getInstance($model,'left_image');

			if(! empty ($uploadedFile1)){
				$model->left_image = $fileName;
				$uploadedFile1->saveAs(Yii::app()->basePath.'/../media/stripes/left/'.$fileName);
			}
			/*****************************************************/
			$uploadedFile2=CUploadedFile::getInstance($model,'right_image');

			if(! empty ($uploadedFile2)){
				$model->right_image = $fileName;
				$uploadedFile2->saveAs(Yii::app()->basePath.'/../media/stripes/right/'.$fileName);
			}
			/*****************************************************/
			$uploadedFile3=CUploadedFile::getInstance($model,'back_image');

			if(! empty ($uploadedFile3)){
				$model->back_image = $fileName;
				$uploadedFile3->saveAs(Yii::app()->basePath.'/../media/stripes/back/'.$fileName);
			}
			

			if($model->save())
			{
				$this->redirect(array('view','id'=>$model->id));
			}

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
		
		if(isset($_POST['Stripe']))
		{

			if( $model->image != ''){
					$_POST['Stripe']['image'] = $model->image;
			}
			if( $model->left_image != ''){
					$_POST['Stripe']['left_image'] = $model->left_image;
			}
			if( $model->right_image != ''){
					$_POST['Stripe']['right_image'] = $model->right_image;
			}
			if( $model->back_image != ''){
					$_POST['Stripe']['back_image'] = $model->back_image;
			}
			/*if( $model->icon != ''){
					$_POST['Stripe']['icon'] = $model->icon;
			}*/
			
			$model->attributes=$_POST['Stripe'];
			$uploadedFile=CUploadedFile::getInstance($model,'image');
			$uploadedFile1=CUploadedFile::getInstance($model,'left_image');
			$uploadedFile2=CUploadedFile::getInstance($model,'right_image');
			$uploadedFile3=CUploadedFile::getInstance($model,'back_image');

			if(! empty ($uploadedFile)){
				if($model->image =='')
				{
					$rnd = rand(0,9999);
					$fileName = "{$rnd}-{$uploadedFile}";
					$model->image=	$fileName;
				}

					$uploadedFile->saveAs(Yii::app()->basePath.'/../media/stripes/'.$model->image);
			}
			if(! empty ($uploadedFile1)){
				if($model->left_image =='')
				{
					$model->left_image=$model->image;
				}

					$uploadedFile1->saveAs(Yii::app()->basePath.'/../media/stripes/left/'.$model->left_image);
			}
			if(! empty ($uploadedFile2)){
				if($model->right_image =='')
				{
					$model->right_image=$model->image;
				}

					$uploadedFile2->saveAs(Yii::app()->basePath.'/../media/stripes/right/'.$model->right_image);
			}
			if(! empty ($uploadedFile3)){
				if($model->back_image =='')
				{
					$model->back_image=$model->image;
				}

					$uploadedFile3->saveAs(Yii::app()->basePath.'/../media/stripes/back/'.$model->back_image);
			}
			
			/*************************************************************/
			/*$uploadedFile1=CUploadedFile::getInstance($model,'icon');

			if(! empty ($uploadedFile1)){
				if($model->icon =='')
				{
					$rnd1 = rand(0,9999);
					$fileName1 = "{$rnd1}-{$uploadedFile1}";
					$model->icon=	$fileName1;
				}

					$uploadedFile1->saveAs(Yii::app()->basePath.'/../media/stripes/icons/'.$model->icon);
			}*/


			if($model->save())
			{
				$this->redirect(array('view','id'=>$model->id));
			}

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
		$model=new Stripe('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Stripe']))
			$model->attributes=$_GET['Stripe'];

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
		$model=Stripe::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='stripe-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
