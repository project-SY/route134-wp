<?php include('header.php'); ?>
<div class="headline content-width clearfix">
	<!-- content-column-->
	<div class="content-column">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<a href="<?php the_permalink(); ?>" class="headline-new-post left">
			<img class="headline-thumbnail" src="<?php bloginfo('template_url'); ?>/images/pic-headline-thumbnail-01.png" height="180" width="360" alt="">
			<h4>
				<?php the_title(); ?>
			</h4>
			<p>
				<?php nskw_subtitle(); ?>
			</p>
			<div class="category-info">
				<div class="category-type lifestyle">
					<h6>グルメ</h6>
				</div>
				<div class="category-author">
					<img src="./images/icon-index-author-thumbnail.png" height="15" width="15" alt="">
					<h5>Ken Sayama</h5>
				</div>
			</div>
		</a>
	<?php endwhile; else : ?>
		<div class="post">
			<h2>記事はありません</h2>
			<p>お探しの記事は見つかりませんでした。</p>
		</div>
	<?php endif; ?>
	</div>
	<!-- content-column end-->
	<!--sidebar-column-->
	<div class="sidebar-column">
		<div id="sidebar">
			<div id="weather-area" class="sidebar-column-block">
				<time>
					<?php
						print date("n/j");
						print '<br />';
						print date("(D)");
					?>
				</time>
				<!--weather api area -->
				<div class="weather-api-area">
				</div>
				<!--weather api area end -->
			</div>
			<div id="pick-up-content" class="sidebar-column-block">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/pic-pick-up-img.png" alt=""></a>
			</div>
		</div>
	</div>
	<!--sidebar-colmun end-->
</div>
<div class="instragram-area">
	<div class="inner content-width clearfix">
		<h4>湘南ライフをInstragramでシェア</h4>
		<ul>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/pic-instragram-01.png" alt=""></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/pic-instragram-02.png" alt=""></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/pic-instragram-03.png" alt=""></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/pic-instragram-04.png" alt=""></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/pic-instragram-05.png" alt=""></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/pic-instragram-06.png" alt=""></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/pic-instragram-07.png" alt=""></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/pic-instragram-08.png" alt=""></a></li>
		</ul>
		<div class="instragram-area-info">
			<a href="" style="margin-right: 20px;"><i class="fa fa-camera"></i>See&nbsp;More&nbsp;?</a>
			<a href=""><i class="fa fa-heart"></i>あなたも写真を投稿しませんか？</a>
		</div>
	</div>
</div>
<div class="index-new-posts">
	<div class="inner content-width clearfix">
		<h4>最新の記事</h4>
		<ul>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('medium'); ?>
						<h5><?php echo mb_substr(get_the_title(), 0, 33); ?></h5>
						<p class="sub_title"><?php mb_substr_nskw_subtitle(35); ?></p>
						<div class="category-info clearfix">
							<div class="category-type lifestyle">
								<h6>ライフスタイル</h6>
							</div>
							<div class="category-author">
								<img src="<?php bloginfo('template_url'); ?>/images/icon-index-author-thumbnail.png" height="15" width="15" alt="">
								<h6>Ken Sayama</h6>
							</div>
						</div>
					</a>
				</li>
			<?php endwhile; else : ?>
				<div class="post">
					<h2>記事はありません</h2>
					<p>お探しの記事は見つかりませんでした。</p>
				</div>
			<?php endif; ?>
		</ul>
	</div>
</div>

<?php include('footer.php'); ?>