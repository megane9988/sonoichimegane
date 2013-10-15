<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	<div class="entry-info">
		<header class="entry-header">			
<?php if ( is_singular()) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
<?php endif; // is_singular() ?>
		</header><!-- .entry-header -->
<?php if( !is_page() )  : ?>
		<footer class="entry-meta">
			<span><?php the_time( get_option( 'date_format' ) ); ?>　<?php the_category(', '); ?></span>
		</footer><!-- .entry-meta -->
<?php elseif( is_page() && is_user_logged_in() ) : ?>
<?php endif; ?>
	</div>
<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( '<span class="mod-readMore">Read more</span>', 'sonoichi' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sonoichi' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	<?php edit_post_link( __( '(Edit)', 'sonoichi' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
<?php endif; ?>
</article><!-- #post -->
