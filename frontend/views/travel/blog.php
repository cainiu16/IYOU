	<div class="blog">
		<div class="container">
			<div class="blog-top">
			<?php foreach($post_arr as $key=>$val){ ?>
				<div class="col-md-9 blog-left">
					<div class="blog-main">
						<a href="single.html" class="bg" color="red"><?= $val['t_title']?></a>
						<p>回复<a href="#">(10)</a></p>
					</div>
					
					<div class="blog-main-one">
						<div class="blog-one">
							<div class="col-md-5 blog-one-left">
<<<<<<< HEAD
								<a href="index.php?r=travel/single&id=<?= $val['t_id']?>"><img src="http://<?= $val['t_img']?>" alt="" width="70" height="270" /></a>
							</div>
							<div class="col-md-7 blog-one-left">
								<p>
								<?php echo mb_strlen($val['t_content'],'utf-8')>50?mb_substr($val['t_content'],0,50,'utf-8').'……':$val['t_content'];?>
=======
								<a href="single.html"><img src="<?= $val['t_img']?>" alt="" /></a>
							</div>
							<div class="col-md-7 blog-one-left">
								<p><!-- <?php echo substr($val['t_content'],120)?> -->
									<?= $val['t_content']?>
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
								</p>
							</div>
							<div class="clearfix"></div>
						</div>	
						<div class="comments">
								<ul>
									<li><span class="bookmark"> </span><a href="#" title="作者"><?= $user_one['u_name'] ?></a></li>
									<li><span class="clndr"> </span><a href="">最后回复人</a></li>
									<li><span class="cmnt"> </span><a href="#">最后回复时间</a></li>
								</ul>
								<div class="b-btn">
									<a href="index.php?r=travel/single&id=<?= $val['t_id']?>" class="hvr-shutter-out-horizontal">查看详情</a>
								</div>
								<div class="clearfix"></div>
						</div>	
					</div>
					</div>
					<?php } ?>
			<div class="col-md-3 blog-right">
					<div class="categories">
						<h3>CATEGORIES</h3>
						<ul>
							<li><a href="#">Aenean tortor orci</a></li>
							<li><a href="#">Duis bibendum pellentesquev</a></li>
							<li><a href="#">Quisque pharetra semper</a></li>
							<li><a href="#">Cras condimentum risus</a></li>
							<li><a href="#"> Quisque id erat sapien</a></li>
						</ul>
					</div>
				</div>
				
				<div class="clearfix"></div>
			</div>
			<div class="pagination">
				<nav>
  					<ul class="pager">
    							<li><a href="#">Previous</a></li>
    							<li><a href="#">Next</a></li>
  					</ul>
				</nav>
			</div>
		</div>
		<div class="categories">
<center>
<font color="red">发表新帖</font><br />
<table width="50%">

	<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	?>

<<<<<<< HEAD
	<?= Html::beginForm('index.php?r=travel/upload' , 'post' , ['enctype' => 'multipart/form-data']) ?>
	帖子标题：<input type="text" name='title' /><br />
	景点展示：<?= Html::activeFileInput($model, 't_img')?>
	帖子内容：<textarea name="content" id="" cols="30" rows="10"></textarea><br />
	<input type="submit" value="发表帖子" />

	<?= Html::endForm(); ?>
=======
	<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
	帖子标题：<input type="text" name='title' /><br />
	景点展示：<?= $form->field($model, 't_img')->fileInput() ?>
	帖子内容：<textarea name="content" id="" cols="30" rows="10"></textarea><br />
	<button>发表帖子</button>

	<?php ActiveForm::end() ?>
>>>>>>> fb805c144cd0ec2d734d881f9f921039a329c3d7
</form>
</table>
</center>
	</div>
	</div>

	<!--blog-->
	<!--read-->
