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
<<<<<<< HEAD
use yii\yiisoft\Mailer; 
=======
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
header("content-type:text/html;charset=utf8");
/**
 * Site controller
 */
class RegisterController extends Controller
<<<<<<< HEAD
{        
           public $enableCsrfValidation = false;
          //指向注册页面的方法
          public function actionRegister(){
          	return $this->renderPartial("register");
          }
          //做添加的方法
          public function actionDo_register(){
                $connection=Yii::$app->db;
                //响应
                $request = Yii::$app->request;
                //接收用户名的值
                $m_name = $request->post("m_name");
                //接收密码的值 
                $m_pad = $request->post("m_pad");
                //sql语句
                $insert=$connection->createCommand()->insert('message',[
                    'm_name' => "$m_name",
                    'm_pad' => "$m_pad",
                    'u_id' => "u_id",
                ])->execute();
                 if($insert){
                 	echo "<script>alert('注册成功');location.href='index.php?r=login/login'</script>";
                 }else{
                 	echo "<script>alert('注册失败');location.href='index.php?r=register/register'</script>";

                 }
                 
          }
=======
{
          public function actionRegister(){
          	return $this->renderPartial("register");
          }
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7

}