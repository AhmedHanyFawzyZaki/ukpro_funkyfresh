<?php

class HeightController extends AdminController
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
		$model = $this->loadModel($id);
		$details=new CActiveDataProvider('HeightDetail', array(
			'criteria'=>array(
				'condition'=>'height_id='.$model->id,
			),
		));
		
		$this->render('view',array(
			'model'=>$model,'details'=>$details,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Height;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Height']))
		{
			$model->attributes=$_POST['Height'];
			if($model->save()){
				if(isset($_POST['weight']))
				{
					for($i=0;$i<count($_POST['weight']);$i++){
						$model1=new HeightDetail;
						$model1->height_id = $model->id;
						if($_POST['weight'][$i])
							$model1->weight = $_POST['weight'][$i];
						if($_POST['size'][$i])
							$model1->size = $_POST['size'][$i];
						if($_POST['shoulder'][$i])
							$model1->shoulder = $_POST['shoulder'][$i];
						if($_POST['sleeve'][$i])
							$model1->sleeve = $_POST['sleeve'][$i];
						if($_POST['waist'][$i])
							$model1->waist = $_POST['waist'][$i];
							
						if($model1->validate())
							$model1->save();
					}
				}
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

		if(isset($_POST['Height']))
		{
			$model->attributes=$_POST['Height'];
			if($model->save()){
				if(isset($_POST['weight']))
				{
					HeightDetail::model()->deleteAllByAttributes(array(
				'height_id'=>$model->id,
			));
					for($i=0;$i<count($_POST['weight']);$i++){
						$model1=new HeightDetail;
						$model1->height_id = $model->id;
						if($_POST['weight'][$i])
							$model1->weight = $_POST['weight'][$i];
						if($_POST['size'][$i])
							$model1->size = $_POST['size'][$i];
						if($_POST['shoulder'][$i])
							$model1->shoulder = $_POST['shoulder'][$i];
						if($_POST['sleeve'][$i])
							$model1->sleeve = $_POST['sleeve'][$i];
						if($_POST['waist'][$i])
							$model1->waist = $_POST['waist'][$i];
							
						if($model1->validate())
							$model1->save();
					}
				}
				$this->redirect(array('view','id'=>$model->id));
			}
		}
		
		$hdetails = HeightDetail::model()->findAllBySql('select * from height_detail where height_id ='.$model->id);

		$this->render('update',array(
			'model'=>$model,'details'=>$hdetails
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
		$model=new Height('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Height']))
			$model->attributes=$_GET['Height'];

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
		$model=Height::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='height-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
