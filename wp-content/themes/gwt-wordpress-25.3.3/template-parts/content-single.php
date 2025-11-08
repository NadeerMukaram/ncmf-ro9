<?php
/**
 * The template part for displaying single posts
 *
 * @package GWT
 * @since Government Website Template 2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<!-- entry-content -->
	<div class="entry-content">
	<h1 class="entry-title" style="margin-bottom:40px; border-bottom: 2px solid #000; padding-bottom: 5px;"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<?php gwt_wp_posted_on(); ?>
			<p></p>
		</div>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gwt_wp' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	
</article>
