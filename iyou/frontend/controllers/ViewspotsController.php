<?php
/**
 * Created by PhpStorm.
 * module:景点
 * User: wangnana
 * Date: 2016/3/24
 * Time: 14:40
 */

namespace frontend\controllers;


use app\models\Travel;
use yii\base\Controller;

class ViewspotsController extends Controller
{
    /**
     *显示主页
     */
    public function actionIndex()
    {
        $this->layout="header";
        $model = new Travel();
        //轮播图（点击量最高前六张）
        $pots = $model->searchsix();
        //最好的时节
        $season = $model->seasons();
        $page = $season['page'];
        $info = $season['info'];
        //最热的城市
        $citys = $model->hotcity();
        return $this->render('magazine',['spots'=>$pots,'season'=>$info,'page'=>$page]);
    }
}