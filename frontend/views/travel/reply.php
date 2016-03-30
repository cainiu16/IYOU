 
	<div class="blog">
		<div class="container">
			<div class="blog-top">
				<div class="col-md-9 blog-left">
					<div class="blog-main">
						<a class="bg"><?= $list_arr['t_title']?></a>
					</div>								
					<div class="blog-main-one">
						<div class="blog-one blog-sng">
							<img src="http://<?= $list_arr['t_img']?>" alt="" width="200" height="500" />
							<p class="sngl"><?= $list_arr['t_content']?></p>
						</div>	
						<div class="comments cmt">
								<ul>
									<li><span class="bookmark"> </span><a href="#">回复(10)</a></li>
									<li><span class="clndr"> </span><p>发布时间</p></li>
									<li><span class="cmnt"> </span><a href="#">最后回复人</a></li>
								</ul>
						</div>	
					</div>	
					<div class="comment-list">
					
					<?php foreach($reply_arr as $key=>$val){ ?>
							<div class="comments cmt"><h5><?= $val['re_content']?></h5></div>
							<?php } ?>
						</div>
						<div class="content">
					 		<h3>评论</h3>
					 		<div class="contact-form">
								<form method="post" action="index.php?r=travel/reply">
									<textarea placeholder="Message" name="content"></textarea>
									<input type="hidden" value="<?= $list_arr['t_id']?>" name="t_id" />
									<input type="submit" value="评论"/>
				   				</form>
				   			</div>	
						</div>
				</div>
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
		</div>
	</div>
	<!--blog-->
	<!--read-->
	@stop

	