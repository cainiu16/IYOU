<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
header("content-type:text/html;charset=utf8");
/**
 * Site controller
 */
class RegisterController extends Controller
{
          public function actionRegister(){
          	return $this->renderPartial("register");
          }

}