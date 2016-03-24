<div class="buildings">
	<div class="container">
		<div class="buildings-top">
			<div class="building-one">
				<div class="latest-top">
				<h3>为你推荐</h3>
				</div>
			<?php foreach ($arr as $k => $v): ?>
				<div class="col-md-3 building-left">
					<a href="index.php?r=travelaround/detial&id=<?php echo $v['t_id']; ?>"><img title="<?php echo $v['t_name']; ?>" src="http://www.image.com/<?php echo $v['t_p_img']; ?>" alt="" /></a>
					<a href="index.php?r=travelaround/detial&id=<?php echo $v['t_id']; ?>"><h4>   <?php echo $v['t_name']; ?></h4></a>
					<p><?php echo mb_strlen($v['t_content'], 'utf-8') > 50  ? mb_substr($v['t_content'], 0, 30 , 'utf-8').'....' : $v['t_content']; ?></p>
					<div class="build-btn">
						<a href="index.php?r=travelaround/detial&id=<?php echo $v['t_id']; ?>" class="hvr-shutter-out-horizontal">Know more</a>
					</div>
				</div>
				<?php endforeach ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
	<div class="container">
		<div class="buildings-top">
			<div class="building-one">
			<div class="latest-top">
				<h3>其他推荐</h3>
			</div>
			<?php foreach ($row as $k => $v): ?>
				<div class="col-md-3 building-left">
					<a href="index.php?r=travelaround/detial&id=<?php echo $v['t_id']; ?>"><img title="<?php echo $v['t_name']; ?>" src="http://www.image.com/<?php echo $v['t_p_img']; ?>" alt="" /></a>
					<a href="index.php?r=travelaround/detial&id=<?php echo $v['t_id']; ?>"><h4>   <?php echo $v['t_name']; ?></h4></a>
					<p><?php echo mb_strlen($v['t_content'], 'utf-8') > 50  ? mb_substr($v['t_content'], 0, 30 , 'utf-8').'....' : $v['t_content']; ?></p>
					<div class="build-btn">
						<a href="index.php?r=travelaround/detial&id=<?php echo $v['t_id']; ?>" class="hvr-shutter-out-horizontal">Know more</a>
					</div>
				</div>
				<?php endforeach ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!--buildings-->
	<!--read-->
