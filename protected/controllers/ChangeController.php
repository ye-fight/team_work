<?php

class ChangeController extends Controller
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
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('create','update','admin','delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(),
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
		$dataProvider= Change::model()->findAll('sof_change_id=:sof_change_id',
											array(':sof_change_id' => $id),
											array('order' => 'create_time desc')
											);
		foreach ($dataProvider as $key => $value) {
			$result[] = $value->attributes;
		}		
		$this->layout='main_post';
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'result'=>$result,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Change;

		if(isset($_POST['Change']))
		{
			$_POST['Change']['user_id'] = Yii::app()->user->getId();
			$_POST['Change']['type'] = 1;
			$_POST['Change']['flag'] = 0;
			$_POST['Change']['create_time'] = time();
			$tmp = explode('-', $_POST["Change"]['end_time']);
			$_POST['Change']['end_time'] = mktime(0, 0, 0, $tmp[1], $tmp[2], $tmp[0]);

			$image = CUploadedFile::getInstance($model, 'image');  
			if( is_object($image) && get_class($image) === 'CUploadedFile' ){  
			    $model->image = time() .'.jpg';  
			}else{  
			    $model->image = 'NoPic.jpg';  
			}

			$model->attributes=$_POST['Change'];
			if($model->save()) {
			    if(is_object($image) && get_class($image) === 'CUploadedFile'){  
			        $image->saveAs(Yii::app()->basePath.'/../assets/uploads/'.$model->image);  			      
				}
			}
			$this->redirect(array('view','id'=>$model->change_id));
		}

		$this->layout='//layouts/column2_post';
		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionReaction()
	{
		$model=new Change;

		if(isset($_POST['Change']))
		{
			$_POST['Change']['user_id'] = Yii::app()->user->getId();
			$_POST['Change']['type'] = 0;
			$_POST['Change']['flag'] = 0;
			$_POST['Change']['create_time'] = time();
			$tmp = explode('-', $_POST["Change"]['end_time']);
			$_POST['Change']['end_time'] = mktime(0, 0, 0, $tmp[1], $tmp[2],0+$tmp[0]);

			$image = CUploadedFile::getInstance($model, 'image');
			if( is_object($image) && get_class($image) === 'CUploadedFile' ){  
			    $model->image = time() .'.jpg';  
			}else{  
			    $model->image = 'NoPic.jpg';  
			}

			$model->attributes=$_POST['Change'];
			if($model->save()) {
			    if(is_object($image) && get_class($image) === 'CUploadedFile'){  
			        $image->saveAs(Yii::app()->basePath.'/../assets/uploads/'.$model->image);
			    }  
			}
			$this->redirect(array('change/view/', 'id'=>$_POST['Change']['sof_change_id']));
		 
		}

		$this->layout='//layouts/column2_post';
		$this->render('create',array(
			'model'=>$model,
		));
	}	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Change']))
		{
			$model->attributes=$_POST['Change'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->change_id));
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider= Change::model()->findAll(
											'type=:type',
											array(':type' => 1),
											array('order' => 'create_time desc')
											);
		foreach ($dataProvider as $key => $value) {
			$result[] = $value->attributes;
		}
		$this->layout='main';
		$this->render('index',array(
			'result'=>$result,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$user_id=Yii::app()->user->getId();
		$model=new CActiveDataProvider('Change',
										array('criteria'=>array(
												'condition'=>"user_id=$user_id AND type=1",
												'order'=>'create_time DESC',)));
		if(isset($_GET['Change']))
			$model->attributes=$_GET['Change'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Change the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Change::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Change $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='change-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
