<?php
use yii\widgets\LinkPager;
?>
<style>
	.sea{
		margin-top: 50px; margin-left: 500px;
	}
</style>
<input id="city" class="sea" placeholder="请输入您要搜索的城市" style="height:32px;width:260px" type="text"><img onclick="searchs()" src="http://www.imgss.com/search.png" alt="">
<script src="js/jquery.js"></script>
<script type="text/javascript">
	function searchs(){
		var city=$("#city").val();
		$.get('index.php?r=travelaround/search',{city:city},function(msg){
			$("#list").html(msg);
		})
	}
</script>
<div class="buildings">
	<div class="container">
		<div class="buildings-top">
			<div class="building-one">
				<div class="latest-top">
				<h3>为你推荐12345678</h3>
				</div>
				<?php if (empty($row)): ?>
					暂时无法定位到你所在的城市，请查看其他推荐
				<?php endif ?>
			<?php foreach ($row as $k => $v): ?>
				<div class="col-md-3 building-left">
					<a href="index.php?r=viewspots/detail&season=1&s_id=<?php echo $v['t_id']; ?>"><img title="<?php echo $v['t_name']; ?>" src="http://<?php echo $v['t_p_img']; ?>" alt="" /></a>
					<a href="index.php?r=viewspots/detail&season=1&s_id=<?php echo $v['t_id']; ?>"><h4>   <?php echo $v['t_name']; ?></h4></a>
					<p><?php echo mb_strlen($v['t_content'], 'utf-8') > 50  ? mb_substr($v['t_content'], 0, 30 , 'utf-8').'....' : $v['t_content']; ?></p>
					<div class="build-btn">
						<a href="index.php?r=viewspots/detail&season=1&s_id=<?php echo $v['t_id']; ?>" class="hvr-shutter-out-horizontal">Know more</a>
					</div>
				</div>
				<?php endforeach ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<center>
<div>
<?php
	echo LinkPager::widget([
    	'pagination' => $pages,
		]);
?>
</div>
</center>
<div class="container">
		<div class="buildings-top">
			<div class="building-one">
			<div class="latest-top">
				<h3>酒店推荐</h3>
			</div>
			<?php foreach ($info as $k => $v): ?>
				<div class="col-md-3 building-left">
					<a href="index.php?r=hotel/hot_about&id=<?php echo $v['g_id'] ?>"><img title="<?php echo $v['g_name']; ?>" src="http://<?php echo $v['g_p_img2']; ?>" alt="" /></a>
					<a href="index.php?r=hotel/hot_about&id=<?php echo $v['g_id'] ?>"><h4>   <?php echo $v['g_name']; ?></h4></a>
					<p><?php echo mb_strlen($v['g_content'], 'utf-8') > 50  ? mb_substr($v['g_content'], 0, 30 , 'utf-8').'....' : $v['g_content']; ?></p>
					<div class="build-btn">
						<a href="index.php?r=hotel/hot_about&id=<?php echo $v['g_id'] ?>" class="hvr-shutter-out-horizontal">Know more</a>
					</div>
				</div>
				<?php endforeach ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<center>
<div>
<?php
	echo LinkPager::widget([
    	'pagination' => $page,
		]);
?>
</div>
</center>
<div class="container">
</div>