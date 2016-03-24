<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\FirmAdminuser;
class AdminController extends Controller
{
	public $enableCsrfValidation = false;
	public function actionLogin()
	{
    	$this->layout=false;
    	if ($_POST) {
    		print_r($_POST);
    	}else{
	    	return $this->render('sign-in');  					
    	}
	}
	public function actionIndex()
	{
		$this->layout="header";
    	return $this->render('index');  			
	}
}