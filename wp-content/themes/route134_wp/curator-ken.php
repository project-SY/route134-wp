<?php
/*
Template Name:curator-ken
*/
?>
<?php include('header.php'); ?>
	<div class="content-width clearfix">
		<div class="content-column">
			<div id="curator">
				<div class="content-column-block">
					<div id="pankuzu" class="border-btm-gray">
						ぱんくずリストが入ります。
					</div>
					<div class="curator-headline-info clearfix">
						<img src="<?php bloginfo('template_url'); ?>/images/pic-curator-thumbnail-ken.png">
						<div class="right">
							<h2>Ken Sayama</h2>
							<p>
								キュレーターのトップページの説明を行います。キュレーターのトップページの説明を行います。キュレーターのトップページの説明を行います。キュレーターのトップページの説明を行います。キュレーターのトップページの説明を行います。キュレーターのトップページの説明
							</p>
						</div>
					</div>
				</div>
				<!-- content-column-block end -->
				<ul class="post-list">
				<?php query_posts('&posts_per_page=9&paged='.$paged); ?>
				<?php while (have_posts()) : the_post();?>
				<?php $author_id = $post->post_author; ?>
				<?php if ($author_id==3) : ?>
					<a href="<?php the_permalink(); ?>">
						<li>
							<?php the_post_thumbnail('medium'); ?>
							<h5 class="post-title"><?php echo mb_substr(get_the_title(), 0, 33); ?></h5>
							<p class="sub_title"><?php mb_substr_nskw_subtitle(35); ?></p>
							<div class="bottom">
								<?php
									$category = get_the_category();
									$cat_id   = $category[0]->cat_ID;
									$cat_name = $category[0]->cat_name;
									$cat_slug = $category[0]->category_nicename;
								?>
								<span class="category category-<?php echo $cat_slug; ?>"><?php echo $cat_name ?></span>
								<?php echo get_avatar(get_the_author_id(), 15); ?>
								<span><?php echo the_author_nickname(); ?></span>
							</div>
						</li>
					</a>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				</ul>
			</div>
			<!-- curator end -->
		</div>
		<!-- content-column end -->
	</div>
<?php include('footer.php'); ?>
