<?php
/**
 * @package GWT
 * @since Government Website Template 2.0
 */
?>

<div class="post-box">
	<article id="post-<?php the_ID(); ?>" <?php post_class('callout secondary'); ?>>
		
		<?php 
			$content_class = 'large-12';
			if(has_post_thumbnail()) : 
				$content_class = 'large-9';
				echo '<div class="post-thumbnail-wrapper">';
				the_post_thumbnail( 'medium', array( 'class' => 'thumbnail post-thumbnail') );
				echo '</div>';
			endif;

			if (has_post_thumbnail() && is_active_sidebar('left-sidebar') && is_active_sidebar('right-sidebar')) :
				$content_class = 'large-8';
			endif;
		?>
		
		<div class="entry-wrapper <?php echo $content_class; ?> medium-12 small-12">
			<!-- entry-header -->
			<header class="entry-header">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				
				<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta">
						<?php gwt_wp_posted_on(); ?>
					</div>
				<?php endif; ?>
			</header>

		
			<!-- entry-summary entry-content -->
			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div>
			<?php else : ?>
				<div class="entry-content">
					<?php the_excerpt(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'gwt_wp' ),
							'after'  => '</div>',
						) );
					?>
				</div>
			<?php endif; ?>
			
			<!-- Read More Button -->
			<div class="read-more-wrapper">
				<a href="<?php the_permalink(); ?>" class="read-more-btn">
					Read More
					<svg class="btn-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none">
						<path d="M8 0L6.59 1.41L12.17 7H0V9H12.17L6.59 14.59L8 16L16 8L8 0Z" fill="currentColor"/>
					</svg>
				</a>
			</div>
			
			<!-- footer entry-meta -->
			<footer class="entry-meta">
				<?php if ( 'post' == get_post_type() ) : ?>
				<?php endif; ?>
			</footer>
		</div>
	</article>
</div>
