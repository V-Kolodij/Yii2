<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\NewForm;


class NewController extends Controller{
	public function actionSay($message = 'Hello, proger)))'){
       return $this->render('say', ['mess'=> $message]);
	}
	public function actionIndex(){
		return $this->render('news');
      // return 'Test from '.__METHOD__;
	}

	public function actionEnter()
	{
		$model = new NewForm();

		if ($model->load(Yii::$app->request->post()) && $model->validate()){
			
			return $this->render('enter-confirm', ['model'=> $model]);
		} else {
			echo "Object Model don't set!";
			return $this->render('enter', ['model'=> $model]);
		}
	}




}