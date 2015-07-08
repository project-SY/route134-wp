<?php include('header.php'); ?>
	<div class="content-width clearfix">
		<div class="content-column">
			<div id="single">
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
					<div class="related-posts border-btm-gray">
					<h3>関連する記事</h3>
					<ul>
						<li class="media clearfix">
							<img src="">
							<div class="right">
								<h4>相模湾が一望できるシーサイドリゾートプール「大磯ロングビーチ...</h4>
								<p><span class="category">ライフスタイル</span>いろいろとアクティブなイベントが多い夏...</p>
							</div>
						</li>
						<li class="media clearfix">
							<img src="">
							<div class="right">
								<h4>相模湾が一望できるシーサイドリゾートプール「大磯ロングビーチ...</h4>
								<p><span class="category">ライフスタイル</span>いろいろとアクティブなイベントが多い夏...</p>
							</div>
						</li>
						<li class="media clearfix">
							<img src="">
							<div class="right">
								<h4>相模湾が一望できるシーサイドリゾートプール「大磯ロングビーチ...</h4>
								<p><span class="category">ライフスタイル</span>いろいろとアクティブなイベントが多い夏...</p>
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
					<div class="post">
						<h2>記事はありません</h2>
						<p>お探しの記事は見つかりませんでした。</p>
					</div>
				<?php endif; ?>
			</div>
			<!-- single end -->
		</div>
	</div>
<?php include('footer.php'); ?>