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
use app\models\Travelaround;


class TravelaroundController extends Controller
{
	public function actionIndex()
	{
		header("content-type:text/html;charset=utf-8");
		//根据ip查询用户当前
		$ad_api_url='http://api.k780.com:88/?app=ip.get&appkey=17358&sign=691de9160c83f75c9d397d26409cb714&format=json';//返回的是json格式的   如果ip不写的的话就默认是本地联网所在地的IP
<<<<<<< HEAD
		@$info = file_get_contents($ad_api_url);
		// print_r($info);die;
		@$infos = json_decode($info);//返回来的是对象
		// print_r($infos);die;
		@$area = $infos->result->att;//因为返回来的是对象  中国,北京    所以我们调用下面的数据的时候用'->';
		@$citys = explode(',',$area);//将城市单独弄出来
		@$city = $citys['1'];
		//将我们获得的城市 方式系统变量中 以便以后方便使用
		@$_CFG['city'] = $city;
=======
		$info = file_get_contents($ad_api_url);
		// print_r($info);die;
		$infos = json_decode($info);//返回来的是对象
		// print_r($infos);die;
		$area = $infos->result->att;//因为返回来的是对象  中国,北京    所以我们调用下面的数据的时候用'->';
		$citys = explode(',',$area);//将城市单独弄出来
		$city = $citys['1'];
		//将我们获得的城市 方式系统变量中 以便以后方便使用
		$_CFG['city'] = $city;
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
		// echo $city;die;
		$this->layout="header";
		//实例化model层
		$model=new Travelaround();
		//获取当前所在城市的id 根据id查看当前城市的景点
		$city=$model->select_city($city);
		$id=$city['c_id'];
<<<<<<< HEAD
		//显示城市定位时景色图片
		$arr=$model->select_all($id);
		// print_r($arr);die;
		$pages=$arr['pages'];
		$info=$arr['info'];
		// print_r($info);die;
		//显示城市定位时相应的酒店
		$hotel=$model->select_hotel($id);
		$page=$hotel['pa'];
		$row=$hotel['info'];
		// print_r($row);die;
    	return $this->render('index',['pages'=>$pages,'arr'=>$info,'city'=>$city,'hotel'=>$hotel,'page'=>$page,'row'=>$row]);	
=======
		//显示未进行查询时景色图片
		header("content-type:text/html;charset=utf-8");
		$arr=$model->select_all($id);
		// print_r($arr);die;
		//查询其他推荐景点
		$row=$model->select_else();
		// print_r($row);die;
    	return $this->render('index',['arr'=>$arr,'city'=>$city,'row'=>$row]);  	
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
	}
	//查看了解更多
	public function actionDetial(){
		$this->layout="header";
		$request = Yii::$app->request;
		//接收id
		$id = $request->get('id'); 
		//查询这条信息详情
		$model=new Travelaround();
		$arr=$model->detial($id);
		return $this->render('detial',['arr'=>$arr]);
	}
<<<<<<< HEAD
	//根据用户搜索的城市搜索景点
	public function actionSearch(){
		//接收搜索框的值
		$city=$_GET['city'];
		$model=new Travelaround();
		//搜索景点
		$arr=$model->search($city);
		$page=$arr['pages'];
		$row=$arr['info'];
		// print_r($row);die;
		//搜索酒店
		$hotel=$model->sea_hotel($city);
		$pages=$hotel['pages'];
		$info=$hotel['info'];
		// print_r($info);die;
		$this->layout=false;
		return $this->render('search',['arr'=>$arr,'hotel'=>$hotel,'pages'=>$page,'row'=>$row,'page'=>$pages,'info'=>$info]);
	}
=======
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
}