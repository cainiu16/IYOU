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
use yii\base\Model;
use app\models\Travels;
use yii\web\UploadedFile;
class TravelController extends Controller
{
	public function actionTravel()
	{
		$this->layout="header";	
		$model = new Travels;
		$connection = \Yii::$app->db;
		$command = $connection->createCommand('SELECT * FROM travels');
		$post_arr = $command->queryAll();
		$connection = \Yii::$app->db;
		$command = $connection->createCommand('SELECT * FROM user');
		$user_one = $command->queryOne();
		return $this->render('blog',['post_arr'=>$post_arr,'model'=>$model,'user_one'=>$user_one]);
	}
	//景点上传
    /*public function upload()
    {
        $model = new Product();
		$model->p_imges = UploadedFile::getInstance($model, 'p_imges');
		$arr=$model->p_imges->saveAs('../../frontend/web/images/'.$model->p_imges->baseName . '.' . $model->p_imges->extension);
		
		$article = new \app\models\product();
        $article -> p_content =$p_content;
		$article -> p_title =$p_title;
        $article -> p_imges ='images/'.$model->p_imges->name;
        $re=$article -> save();
    }*/
	//帖子详情
	public function actionSingle()
	{
		$this->layout="header";
		$id = $_GET['id'];
		$connection = \Yii::$app->db;
		$command = $connection->createCommand("SELECT * FROM travel_content where t_tid = '$id'");
		$post_arr = $command->queryAll();
		return $this->render('single.php');

	}
}