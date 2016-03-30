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
		$command = $connection->createCommand('SELECT * FROM travels order by t_id desc limit 7');
		$post_arr = $command->queryAll();
		//print_r($post_arr);die;
		$connection = \Yii::$app->db;
		$command = $connection->createCommand('SELECT * FROM user');
		$user_one = $command->queryOne();
		return $this->render('blog',['post_arr'=>$post_arr,'model'=>$model,'user_one'=>$user_one]);
	}
	//景点上传
    public function actionUpload()
    {
		$title = $_POST['title'];
		$content = $_POST['content'];
		$date = date('Y-m-d ',time());
        $model = new Travels();
		$model->t_img = UploadedFile::getInstance($model, 't_img');
		$arr=$model->t_img->saveAs('../../frontend/web/images/'.$model->t_img->baseName . '.' . $model->t_img->extension);
		$article = new \app\models\Travels();
        $article -> t_content =$content;
		$article -> t_title =$title;
		$article -> t_times =$date;
        $article -> t_img ='images/'.$model->t_img->name;
        $re=$article -> save();
		if($re) {
			echo "<script>alert('发表成功');location.href='index.php?r=travel/travel'</script>";
		}
    }
	//帖子详情
	public function actionSingle()
	{
		$this->layout="header";
		$id = $_GET['id'];
		$connection = \Yii::$app->db;
		$command = $connection->createCommand("SELECT * FROM travels where t_id = '$id'");
		$post_arr = $command->queryOne();
		$command = $connection->createCommand("SELECT * FROM reply where t_id = '$id' limit 5");
		$reply_arr = $command->queryAll();
		return $this->render('single.php',['list_arr'=>$post_arr,'reply_arr'=>$reply_arr]);

	}
	public $enableCsrfValidation = false;
	public function actionReply()
	{
		$this->layout="header";
		$content = $_POST['content'];
		$t_id = $_POST['t_id'];
		$connection = \Yii::$app->db;
		$re = $connection->createCommand()->insert('reply', [
		're_content' => $content,
		't_id' => $t_id,
		])->execute();
		$command = $connection->createCommand("SELECT * FROM travels where t_id = '$t_id'");
		$post_arr = $command->queryOne();
		$command = $connection->createCommand("SELECT * FROM reply where t_id = '$t_id' order by re_id desc limit 5");
		$reply_arr = $command->queryAll();
		return $this->render('reply.php',['list_arr'=>$post_arr,'reply_arr'=>$reply_arr]);
		//history.go(0);
		//print_r($re);
		
		//echo "<script>alert('评论成功');location.href='index.php?r=travel/single & id = $t_id'</script>";
		//echo "<a href='index.php?r=travel/single?id=$t_id'>评论成功</a>";
		
	}
}