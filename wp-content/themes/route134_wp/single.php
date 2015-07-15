<?php include('header.php'); ?>
	<div class="content-width clearfix">
		<div class="content-column">
			<div id="single">
				<div class="content-column-block">
					<?php if (have_posts()) : ?>
		      	<?php while (have_posts()) : the_post(); ?>
						<div id="pankuzu" class="border-btm-gray">
							ぱんくずリストが入ります。
						</div>
						<div class="post-headline clearfix border-btm-gray">
							<?php the_post_thumbnail( array(120,120) ); ?>
							<div class="right">
								<h2><?php the_title(); ?></h2>
								<p class="sub-title">
									<?php nskw_subtitle(); ?>
								</p>
							</div>
						</div>
						<div class="sns-area border-btm-gray">
							<p>snsが入ります。</p>
						</div>
						<div class="post-main">
							<?php the_content(); ?>
						</div>
						<!-- post-main end -->
						<?php
							$category = get_the_category();
							$cat_name = $category[0]->cat_name;
							$cat_slug = $category[0]->category_nicename;
						?>
						<div class="related-posts border-btm-gray">
							<h3>関連する記事</h3>
							<ul>
								<li class="media clearfix">
									<img src="">
									<div class="right">
										<h4>相模湾が一望できるシーサイドリゾートプール「大磯ロングビーチ...</h4>
										<p><span class="category category-<?php echo $cat_slug; ?>"><?php echo $cat_name ?></span>いろいろとアクティブなイベントが多い夏...</p>
									</div>
								</li>
							</ul>
						</div><!-- related-posts end -->
						<div class="sns-area border-btm-gray">
							<p>snsが入ります。</p>
						</div>
						<!-- sns-area end -->
						<div class="auther-meta clearfix">
							<img src="">
							<p class="auther">Kazuma Ueda</p>
						</div>
						<!-- auther-meta end -->
					<?php endwhile; else : ?>
					<?php endif; ?>
				</div>
				<!-- content-column-block end -->
			</div>
			<!-- single end -->
		</div>
	</div>
<?php include('footer.php'); ?>