<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionChange(){
		$model = new ChangeForm;

		if (isset($_POST['ChangeForm'])) {
			$model->attributes=$_POST['ChangeForm'];
			if ($model->validate()) {
				if ($model->change()) {
					Yii::app()->user->setFlash('success','Contraseña cambiada correctamente');
				}else{
					Yii::app()->user->setFlash('error','No se pudo cambiar la Contraseña');
					$model = new ChangeForm;
				}
			}
		}

		$this->render('change', array('model'=>$model,));
	}

	public function actionRegister(){
		$model = new Usuarios;

		if(isset($_POST['Usuarios'])){
			$model->attributes= $_POST['Usuarios'];
			$cleanPassword = $model->password;
			$model->password = MD5($model->password);
			if($model->save()){
				$loginForm = new LoginForm;
				$loginForm->username = $model->nick;
				$loginForm->password = $cleanPassword;

				if($loginForm->login()){
					$this->redirect(array('index'));
				}
			}
			else
			{
				yii::app()->user->setFlash('error','No se pudo registrar el usuario');
			}	
		}

		$this->render('register', array('model'=>$model,));
	}
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	
	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}