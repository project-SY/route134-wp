<?php
/*
Template Name:category-fashion
*/
?>
<?php include('header.php'); ?>
	<div class="content-width clearfix">
		<div class="content-column">
			<div id="category">
				<div class="content-column-block">
					<div id="pankuzu">
						ぱんくずリストが入ります。
					</div>
					<img class="category-thum" src="<?php bloginfo('template_url'); ?>/images/pic-lifestyle-kv.jpg" alt="">
					<p class="discription">
						湘南のファッション湘南のファッション湘南のファッション湘南のファッション湘南のファッション
					</p>
				</div>
				<!-- content-column-block end -->
				<h2>ファッションの記事一覧</h2>
				<ul class="post-list">
				<?php query_posts('cat=5&posts_per_page=9&paged='.$paged); ?>
				<?php while (have_posts()) : the_post();?>
					<a href="<?php the_permalink(); ?>">
						<li>
							<?php the_post_thumbnail('medium'); ?>
							<h5 class="post-title"><?php echo mb_substr(get_the_title(), 0, 33); ?></h5>
							<p class="sub_title"><?php mb_substr_nskw_subtitle(35); ?></p>
							<p class="bottom">
								<span class="category category-fashion">ファッション</span>
								<img class="auther" src="">
								<span>Kazuma Ueda</span>
							</p>
						</li>
					</a>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				</ul>
			</div>
			<!-- category end -->
		</div>
		<!-- left-column end -->
	</div>
<?php include('footer.php'); ?>