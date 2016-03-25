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
class DataController extends Controller
{
	public function actionIndex()
	{
		$this->layout="header";
    	return $this->render('index');  	
	}
	public function actionScenic()
	{
		$this->layout="header";
		return $this->render('magazine');
	}
	public function actionRim()
	{
		$this->layout="header";
		return $this->render('strange-buildings');

	}
	public function actionTravel()
	{
		$this->layout="header";		
		return $this->render('blog');
	}
	public function actionHotel()
	{
		$this->layout="header";		
		return $this->render('news');		
	}
	 //个人中心
    public function actionUser(){
        $this->layout="header";
        $session=Yii::$app->session;
        $session->open();
        $session['u_id']=1;
        //判断是否登陆，未登录跳转到登陆页面
        if($session['u_id'] ==''){
            $this->redirect(array('/login/login'));
        }
        //获取登录id
        $id=$session['u_id'];
        //根据查用户信息
        $data=(new \yii\db\Query())
            ->from('message')
            ->where(['u_id' => $id])
            ->one();
        //根据id查兑换商品
        $goods=(new \yii\db\Query())
            ->from('goods_log')
            ->join('LEFT JOIN','goods','goods.g_id=goods_log.g_id')
            ->where(['goods_log.u_id' => $id])
            ->all();
        //print_r($goods);die;
        return $this->render('user',['data'=>$data,'goods'=>$goods]);
    }
   
}