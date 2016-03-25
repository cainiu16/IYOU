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
use app\models\Message;
use yii\web\UploadedFile;
use yii\data\Pagination;
use app\models\Extension;
class UserController extends Controller
{
    public $layout='header';
    //显示修改页面
	public function actionIndex()
	{
        $request=Yii::$app->request;
        //接受修改ID
        $id=$request->get('id');
        //根据ID查对应的数据
        $data=Message::findOne($id);
        //print_r($data);die;
        return $this->render('index',['model'=>$data]);
	}
    //修改用户信息
    public function actionUserinfo(){
        $model=new Message;
        $request=Yii::$app->request;
        $post=$request->post('Message');
        //print_r($post);die;
        if ($request->isPost) {
            $model->m_img = UploadedFile::getInstance($model, 'm_img');

            if ($model->m_img && $model->validate()) {
                $model->m_img->saveAs('uploads/' . $model->m_img->baseName . '.' . $model->m_img->extension);
                $post['m_img']='uploads/'.$model->m_img;
            }else{
                unset($post['m_img']);
            }
            $m_sex=$request->post('m_sex');
            $post['m_sex']=$m_sex[0];
            $model=Message::findOne($request->post('u_id'));
            //print_r($model);die;
            foreach($post as $k=>$v){
                $model->$k=$v;
            }
            //$model->isNewRecord=false;
            //print_r($model);die;
            if($model->save()){
                echo "ok";
                //$this->redirect(array('/data/user'));
            }else{
                echo "no";
            }
        }
    }
    //推荐好友
    public function actionTui(){
        //开启session
        $session=Yii::$app->session;
        $session->open();
        //获取session_id，根据ID查我推广的人
        $id=$session['u_id'];
        $query = Extension::find()->where(['extension.u_id' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(),'defaultPageSize'=>1]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        //print_r($models);die;
        return $this->render('tui',[
        'models' => $models,
         'pages' => $pages,
    ]);
    }
    //我的收藏
    public function actionCollection(){
        $session=Yii::$app->session;
        $session->open();
        $id=$session['u_id'];
        //根据session_id获取我收藏的景点
        $query = (new \yii\db\Query())->select(['travel.t_name','travel.t_p_img','travel.t_content'])->from('collect')->where('collect.u_id='.$id)->join('LEFT JOIN','travel','travel.t_id=collect.t_id');
        $pages = new Pagination(['totalCount' => $query->count(),'defaultPageSize'=>1]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('collect',[
            'models' => $models,
            'pages' => $pages,
        ]);
    }
    //积分商城
    public function actionMall(){
        $data=(new \yii\db\Query())
            ->select(['present.p_id','present.p_name','present.p_name','present.p_jf','picture.p_img'])
            ->from('present')
            ->join('LEFT JOIN','picture','picture.p_id=present.p_img_p')
            ->where("p_num > 0")
            ->limit(6)
            ->all();
        //print_r($data);die;
        return $this->render('mall',['data'=>$data]);
    }
    //积分商城详细兑换页面
    public function actionDetail(){
        return $this->render('user/detail');
    }
    //认证邮箱
    public function actionAuthemail(){
        $request=Yii::$app->request;
        echo $request->get('id');
        return $this->render('authemail');
    }
}