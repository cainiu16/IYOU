<?php
namespace backend\controllers;

use Yii;
use app\models\Admin;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\FirmAdminuser;
use app\models\Gropshop;
use app\models\GropType;
use app\models\Imgs;
use app\models\UploadForm;

class AdminController extends Controller
{
	public $enableCsrfValidation = false;
<<<<<<< HEAD
=======
	//后台登陆
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
	public function actionLogin()
	{
		$model = new Admin;
    	if ($_POST) {
    		$user = $_POST['users'];
    		$verify = $model->verify();
    		// print_r($verify);die;
    		if ($verify) {
    			$this->layout='header';
    			$session = Yii::$app->session;
    			if(!$session->isActive)
                {
                    $session->open();
                }
                $session->set('user',$user);
	    		return $this->render('index');  					
    		}else{
    			echo "<script>alert('用户名或密码错误');location.href='index.php?r=admin/login';</script>";
    		}
    	}else{
			$this->layout=false;
	    	return $this->render('sign-in');  					
    	}
	}
<<<<<<< HEAD
=======
	//后台退出
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
	public function actionRemove()
	{
		$session = Yii::$app->session;
		$name = $session->remove("user");
	}
<<<<<<< HEAD
=======
	//跳转主页面
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
	public function actionIndex()
	{
		$this->layout="header";
		$session = Yii::$app->session;
		$name = $session->get("user");
		if ($name) {
    		return $this->render('index');  			
		}else{
			echo "<script>alert('请登录');location.href='index.php?r=admin/login';</script>";
		}
	}
<<<<<<< HEAD
=======
	//显示admin列表
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
	public function actionAdmins()
	{
		$this->layout="header";
		$model = new Admin;
<<<<<<< HEAD
		$del = 1;
		$select = $model->selects($del);
		// print_r($select);die;
		return $this->render('admins',['select'=>$select]);  		
	}
=======

		 if (empty($_GET['page'])) {
           $page = 1;
        }else{
            $page = $_GET['page'];
        }

        $connection = Yii::$app->db;
		$pagesize = 3;//每页显示条数
        //查询数据库中一共有多少条数据
        $postCount = $model->find()->where('a_del=1')->count();
        $countpage = ceil($postCount/$pagesize);//总页数
        $limit2 = ($page-1)*$pagesize;//偏移量
        $del = 1;
        $select = $model->selects($del,$limit2,$pagesize);
  		return $this->render('admins',['select'=>$select,'page'=>$page,'countpage'=>$countpage]);  		
	}
	//管理员删除
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
	public function actionA_del()
	{
		$this->layout="header";
		$model = new Admin;
<<<<<<< HEAD
=======
		$session = Yii::$app->session;
		$name = $session->get("user");
		if ($name=="admin") {
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
		$id = $_GET["id"];
		$type = $_GET['type'];
		$del = $model->del($id,$type);
		if ($del) {
			echo "<script>location.href='index.php?r=admin/admins';</script>";
		}else{
			echo "<script>alert('失败');location.href='index.php?r=admin/admins';</script>";
		}
<<<<<<< HEAD
=======
	}else{
		echo "<script>alert('不好意思，权限不够');location.href='index.php?r=admin/admins';</script>";
	}

>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
	}
	public function actionMima_upda()
	{
		$this->layout = "header";
		$model = new Admin;
<<<<<<< HEAD
=======
		$session = Yii::$app->session;
		$name = $session->get("user");
		if ($name=="admin") {
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
		if ($_POST) {
			$id = $_POST['id'];
			$upda_mima = $model->upda_mima($id);
			// print_r($upda_mima);die;
			if ($upda_mima==1) {
			echo "<script>alert('成功');location.href='index.php?r=admin/admins';</script>";
		}else{
			echo "<script>alert('失败');location.href='index.php?r=admin/mima_upda&id='+$id;</script>";
		}

		}else{
			$id = $_GET["id"];
			$select = $model->sele($id);
			return $this->render("admins_mima",['select'=>$select]);
		}
<<<<<<< HEAD
	}
=======

	}
}
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
	public function actionA_upda()
	{
		$this->layout = "header";
		$model = new Admin;
<<<<<<< HEAD
=======
		$session = Yii::$app->session;
		$name = $session->get("user");
		if ($name=="admin") {
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
		if ($_POST) {
			$updates = $model->updates();
			if ($updates) {
			echo "<script>alert('成功');location.href='index.php?r=admin/admins';</script>";
		}else{
			echo "<script>alert('失败');location.href='index.php?r=admin/a_upda&id='+$id';</script>";
		}
		}else{
			$id = $_GET["id"];
			$select = $model->sele($id);
			return $this->render("admins_upda",['select'=>$select]);
		}
<<<<<<< HEAD
=======
		}else{
		echo "<script>alert('不好意思，权限不够');location.href='index.php?r=admin/admins';</script>";
	}
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
	}
	public function actionA_add()
	{
		$this->layout="header";
		$model = new Admin;
		if ($_POST) {
			$add = $model->adds();
			// print_r($add);die;
			if ($add) {
				echo "<script>alert('成功');location.href='index.php?r=admin/admins';</script>";
			}else{
				echo "<script>alert('失败');location.href='index.php?r=admin/a_add';</script>";
			}
		}else{
			return $this->render('admins_add');
		}
	}
	//admin离职页显示
	public function actionA_hui()
	{
		$this->layout="header";
		$model = new Admin;
<<<<<<< HEAD
		$del = 0;
		$select = $model->selects($del);
		// print_r($select);die;
		return $this->render('admins',['select'=>$select]);  
=======
				 if (empty($_GET['page'])) {
           $page = 1;
        }else{
            $page = $_GET['page'];
        }

        $connection = Yii::$app->db;
		$pagesize = 3;//每页显示条数
        //查询数据库中一共有多少条数据
        $postCount = $model->find()->where('a_del=0')->count();
        $countpage = ceil($postCount/$pagesize);//总页数
        $limit2 = ($page-1)*$pagesize;//偏移量
        $del = 0;
        $select = $model->selects($del,$limit2,$pagesize);
		return $this->render('admins',['select'=>$select,'page'=>$page,'countpage'=>$countpage]);    
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
	}





		public function actionJiudian(){
		$this->layout="header";
		$connection = Yii::$app->db;
         if (empty($_GET['page'])) {
           $page = 1;
        }else{
            $page = $_GET['page'];
        }
        $pagesize = 2;//每页显示条数
        //查询数据库中一共有多少条数据
        $command = $connection->createCommand('SELECT COUNT(*) FROM gropshop');   
        $postCount = $command->queryScalar();//查询标量值/计算值：queryScalar();
        $countpage = ceil($postCount/$pagesize);//总页数
        $limit2 = ($page-1)*$pagesize;//偏移量
        $command = $connection->createCommand("SELECT * FROM gropshop limit $limit2,$pagesize");
       //执行查询的sql语句,查询返回多行：
        $arr = $command->queryAll();
        //返回结果信息
        return $this->render('jiudian',['arr'=>$arr,'page'=>$page,'countpage'=>$countpage]);
		


		// $connection = Yii::$app->db;
		// $command = $connection->createCommand("SELECT * FROM gropshop ");
		// $posts = $command->queryAll();
		// return $this->render('jiudian',['arr'=>$posts]);
	}
	public function actionJiudiandel(){
		$this->layout="header";
		  $model = NEW Gropshop;
		  $id = $_GET['id'];
		  $gropshopupdt1 = $model->gropshopupdt($id);
		  //print_r($gropshopupdt1);die;
		//$connection = Yii::$app->db;
		//$del = $connection->createCommand("update gropshop set g_del='0' where g_id='$id'")->execute();
	
		if($gropshopupdt1){
				echo "<script> alert('删除成功');location.href='index.php?r=admin/jiudian' </script>";
            	//return $this->render('youqing');
		}else{
				echo "<script> alert('删除失败');location.href='index.php?r=admin/jiudian' </script>";
            	//return $this->render('youqing');
		}
	}
	public function actionJiudianimg(){
		// $this->layout="header";
		// $connection = Yii::$app->db;
		// $id =$_GET['id'];
  //        if (empty($_GET['page'])) {
  //          $page = 1;
  //       }else{
  //           $page = $_GET['page'];
  //       }
  //       $pagesize = 2;//每页显示条数
  //       //查询数据库中一共有多少条数据
  //       $command = $connection->createCommand('SELECT COUNT(*) FROM gropshop');   
  //       $postCount = $command->queryScalar();//查询标量值/计算值：queryScalar();
  //       $countpage = ceil($postCount/$pagesize);//总页数
  //       $limit2 = ($page-1)*$pagesize;//偏移量
  //       $command = $connection->createCommand("SELECT * FROM gropshop WHERE g_id='$id' limit $limit2,$pagesize");
  //      //执行查询的sql语句,查询返回多行：
  //       $arr = $command->queryAll();
  //       //返回结果信息
  //       return $this->render('jiudianimg',['arr'=>$arr,'page'=>$page,'countpage'=>$countpage]);


		$this->layout="header";
		$id =$_GET['id'];
		$model = new Gropshop;
		$jiudianimg = $model->jiudianimg($id);
		//print_r($jiudianimg);die;
		//echo "<script> alert($id); </script>";
		//$connection = Yii::$app->db;
		//$command = $connection->createCommand("SELECT * FROM gropshop WHERE g_id='$id'");
		return $this->render('jiudianimg',['arr'=>$jiudianimg]);
	}
	public function actionJiudianadd(){
		$this->layout="header";
		 $connection = Yii::$app->db;
		 $command = $connection->createCommand("SELECT * FROM grop_type ");
		 $posts = $command->queryAll();

		//echo "<script> alert('ok'); </script>";die;
		return $this->render('jiudianadd',['arr'=>$posts]);
	}
	public function actionJiudianadd1(){
		// $this->layout="header";
		// //$id =$_GET['id'];
		// $model = new Gropshop;
		// $jiudianadd = $model->jiudianadd1();
		@$g_name = $_POST['g_name'];
		@$g_money = $_POST['g_money'];
		$this->layout="header";
		$connection = Yii::$app->db;
		$command = $connection->createCommand("SELECT * FROM grop_type ");
		
	}
//酒店修改
	public function actionJiudianupdt(){
		$this->layout="header";
		$connection = Yii::$app->db;
        $id = $_GET['id'];
        $select = $connection->createcommand("SELECT * FROM gropshop WHERE g_id='$id'");
        $post1 = $select->queryOne();
        //print_r($post);die;
        //echo "<script> alert($id) </script>";
        return $this->render('jiudianupdt',['post1'=>$post1]);
	}
	//酒店修改完成
	public function actionJiudianupdt2(){
		$this->layout="header";
		$connection = Yii::$app->db;
        @$g_name= $_POST['g_name'];
        //echo $mingcheng;
        @$g_money= $_POST['g_money'];
        @$g_content= $_POST['g_content'];
        // @$g_p_img= $_POST['g_p_img'];
        // @$g_p_img2= $_POST['g_p_img2'];
        // @$g_p_img3= $_POST['g_p_img3'];
        @$g_place= $_POST['g_place'];
        @$g_coordinate= $_POST['g_coordinate'];
        @$id = $_POST['id'];
        //echo $wangzhi;
        $connection->createCommand("update gropshop set g_name='$g_name',g_money='$g_money',g_content='$g_content',g_place='$g_place',g_coordinate='$g_coordinate' where g_id='$id'")->execute();
        //print_r($re);die;
        echo "<script> alert('修改成功');location.href='index.php?r=admin/jiudian'; </script>";
	}








	public function actionLunbo()
	{
		$this->layout="header";
        //实例化轮播图表
        $model = new Imgs();
        //调用model层的查询方法
        $info = $model->sel();
<<<<<<< HEAD
		return $this->render('lunbo',['info'=>$info]);
=======
        //调用分页方法
        // $fy = $model->fenye();
        // $page = $fy['page'];
        // $content = $fy['content'];
		// return $this->render('lunbo',['info'=>$info,'page'=>$page,'content'=>$content]);

		$connection = Yii::$app->db;
         if (empty($_GET['page'])) {
           $page = 1;
        }else{
            $page = $_GET['page'];
        }
        $pagesize = 2;//每页显示条数
        //查询数据库中一共有多少条数据
        $command = $connection->createCommand('SELECT COUNT(*) FROM imgs');   
        $postCount = $command->queryScalar();//查询标量值/计算值：queryScalar();
        $countpage = ceil($postCount/$pagesize);//总页数
        $limit2 = ($page-1)*$pagesize;//偏移量
        $command = $connection->createCommand("SELECT * FROM imgs where i_del=1 limit $limit2,$pagesize");
       //执行查询的sql语句,查询返回多行：
        $arr = $command->queryAll();
        //返回结果信息
        return $this->render('lunbo',['arr'=>$arr,'page'=>$page,'countpage'=>$countpage]);
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
	}
	//首页的最热景点展示管理
	public function actionZuire()
	{
		$this->layout="header";
		return $this->render('zuire');
	}
	//轮播图执行移除 状态的改变不是物理移除
	public function actionDel()
	{
		//接收传来移除的ID
		$id = $_GET['id'];
        //实例化轮播图表	
        $model = new Imgs();
        //调用model层的查询方法
        $info = $model->del();
	}
	//轮播图执行修改
	public function actionSave()
	{
		$this->layout="header";
<<<<<<< HEAD
		return $this->render('xiu');
	}
	//轮播图执行修改方法
	public function actionUpload(){
        $this->layout="header";	
        $models = new Imgs();
		$model = new UploadForm();
       if (Yii::$app->request->isPost) {
       	// print_r($_FILES['UploadForm']['name']['file']);die;
        $model->file = UploadedFile::getInstance($model,'i_img');
        if ($model->file && $model->validate()) {
            $model->file->saveAs('www.imgss.com/' . $model->file->baseName . '.' . $model->file->extension);
				$i_imgs = $_FILES['UploadForm']['name']['file'];
				$i_img = './www.imgss.com/'.$i_imgs;
				// echo $ads_picture;die;
				$i_b_times = $_POST['i_b_times'];
				$i_e_times = $_POST['i_e_times'];
				$i_content = $_POST['i_content'];
				$i_desc = $_POST['i_desc'];
				$models-> i_b_times = $i_b_times;	
				$models-> i_e_times = $i_e_times;
				$models-> i_content = $content;
				$models-> i_desc = $i_desc;
				$arr = $models->save();
				if($arr){
					echo "<script>alert('上传成功');location.href='index.php?r=admin/lunbo';</script>";
				}else{
					echo "<script>alert('上传失败');location.href='index.php?r=admin/lunbo';</script>";
				}

        }
    }

      return $this->render('upload', ['model' => $model,'info'=>$info]);	
	}
=======
		$model = new Imgs();
		$id = $_GET['id'];
		//根据修改的ID进行查询对应的信息
		$info = $model->sel2($id);
		return $this->render('xiu',['model'=>$model,'id'=>$id,'info'=>$info]);
	}
	//轮播图执行修改方法
	public function actionUpload(){
		$this->layout="header";
		$model = new Imgs();
		$id = $_POST['id'];
        $b = $model->i_img = UploadedFile::getInstance($model, 'i_img');
        if($b){
            $arr=$model->i_img->saveAs('./../../images/'.$model->i_img->baseName . '.' . $model->i_img->extension);
            $i_img = 'www.imgss.com/'.$model->i_img->name;
            $update = $model->upda($i_img);
        }else{
                $i_img = "";
                $update = $model->upda($i_img);
        }
        if ($update) {
                echo "<script>alert('成功');location.href='index.php?r=admin/lunbo';</script>";
            }else{
                echo "<script>alert('错误');location.href='index.php?r=admin/save';</script>";
            }

	}
	//执行添加调用页面
	public function actionAdd()
	{
		$this->layout="header";	
		$model = new Imgs();	
		return $this->render('add',['model'=>$model]);
	}
	//执行添加方法
	public function actionDoadd()
	{
		$this->layout="header";
		$model = new Imgs();
		//上传的图片处理
        $b = $model->i_img = UploadedFile::getInstance($model, 'i_img');
            $arr=$model->i_img->saveAs('./../../images/'.$model->i_img->baseName . '.' . $model->i_img->extension);
            $i_img = 'www.imgss.com/'.$model->i_img->name;
            $update = $model->doadd($i_img);
        if ($update) {
                echo "<script>alert('成功');location.href='index.php?r=admin/lunbo';</script>";
            }else{
                echo "<script>alert('错误');location.href='index.php?r=admin/add';</script>";
            }
	}



>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7

}