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

/**
 * Hotel Controller
 */

class HotelController extends Controller
{


	/**
	 * 酒店
	 */
	public function actionHotel()
	{
		$this->layout="header";

		$hotel = Yii::$app->db;

		//最热酒店
		$sql = $hotel->createCommand("SELECT * FROM gropshop WHERE g_del =1 ORDER BY g_num DESC ");
		$re = $sql->queryOne();
		// print_r($re);die;
		$re['g_content'] = substr($re['g_content'], 0,530);

		//热门城市
		$sql2 = $hotel->createCommand("SELECT * FROM city INNER JOIN click ON city.c_id = click.c_id ORDER BY c_num DESC LIMIT 8");
		$arr = $sql2->queryAll();

		//热门酒店
		$sql3 = $hotel->createCommand("SELECT * FROM gropshop WHERE g_money<701 and g_del =1 ORDER BY g_num DESC LIMIT 6");
		$result = $sql3->queryAll();
		// print_r($result);die;

		// $result['g_content'] = substr($result['g_content'], 0,200);

		return $this->render('news',['re'=>$re,'arr'=>$arr,'result'=>$result]);
	}


	/**
	 * 热门城市酒店详情
	 */
	public function actionHotel_about()
	{
		$this->layout = "header";

		$hotel = Yii::$app->db;
		$id = $_GET['id'];
		// echo $id;die;

		//城市信息
		$sql = $hotel->createCommand("SELECT * FROM city WHERE c_id = '$id'");
		$re = $sql->queryOne();

		//城市地区
		$sql2 = $hotel->createCommand("SELECT * FROM city WHERE c_pid = '$id'");
		$arr = $sql2->queryAll();

		//城市下的酒店
		$city_hotel = $hotel->createCommand("SELECT * FROM city INNER JOIN gropshop ON city.c_id = gropshop.c_id WHERE city.c_id = '$id' and gropshop.g_del = 1 ORDER BY gropshop.g_num DESC");
		$c = $city_hotel->queryAll();

		return $this->render('hotel_about',['re'=>$re,'arr'=>$arr,'c'=>$c]);
	}


	/**
	 * 酒店详情
	 */
	public function actionHot_about()
	{
		$this->layout = "header";
		$hotel = Yii::$app->db;
		$id = $_GET['id'];

		//酒店详情
		$sql = $hotel->createCommand("SELECT * FROM gropshop INNER JOIN grop_type ON gropshop.g_type_id = grop_type.t_id WHERE g_id = '$id'");
		$arr = $sql->queryAll();

		//地图坐标
		$coo = $hotel->createCommand("SELECT g_coordinate FROM gropshop WHERE g_id = '$id'");
		$c = $coo->queryOne();

		//热门城市
		$sql2 = $hotel->createCommand("SELECT * FROM city INNER JOIN click ON city.c_id = click.c_id ORDER BY c_num DESC LIMIT 8");
		$arr2 = $sql2->queryAll();

		return $this->render('hot_about',['arr'=>$arr,'arr2'=>$arr2,'c'=>$c]);
	}
}