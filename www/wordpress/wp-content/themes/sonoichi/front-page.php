<?php get_header(); ?>
	<div class="mod-pageContent main-img<?php echo rand(1, 3); ?>">
		<div class="mod-pageContent-inner">
			<div class="mod-pageContent-wrapper">
				<!-- <div class="main-img-text">
					<h1>
						今企業において<br>色彩戦略が必要です。
					</h1>
				</div>	 -->
				<div id="content" role="main">
					<div class="front-news">
						<h1>最新のお知らせ</h1>
						<ul>
							<?php if ( have_posts() ) : ?>
								<?php while ( have_posts() ) : the_post(); ?>
									<a href="<?php the_permalink(); ?>" rel="bookmark">
										<li>
											<span><?php the_time( get_option( 'date_format' ) ); ?></span>
											<?php the_title(); ?>
										</li>
									</a>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
					<?php dynamic_sidebar( 'front-page-1' ); ?>
				</div><!-- #content -->
			</div>
		</div>
	</div>
	<!--/mod-pageContent-->
	<?php get_footer(); ?>
