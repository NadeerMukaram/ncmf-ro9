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

<style>
.post-box {
    margin-bottom: 2rem;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.post-box article {
    padding: 1.5rem;
    border-radius: 3px;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    border: 1px solid #e1e8ed;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    display: flex;
    gap: 1.5rem;
    align-items: flex-start;
}

.post-box:hover article {
    transform: translateY(-6px);
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    border-color: #3da448;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9ff 100%);
}

.post-thumbnail-wrapper {
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    border-radius: 8px;
    overflow: hidden;
    flex-shrink: 0;
    width: 180px; /* Fixed width for consistency */
}

.post-thumbnail {
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    width: 100%;
    height: 120px; /* Fixed height */
    object-fit: cover; /* Ensures image covers the area without distortion */
}

.post-box:hover .post-thumbnail {
    transform: scale(1.05);
}

.entry-wrapper {
    flex: 1;
    transition: all 0.4s ease;
}

.entry-title a {
    text-decoration: none;
    color: #2c3e50;
    transition: all 0.3s ease;
    position: relative;
}

.entry-title a:hover {
    color: #007bff;
}

.entry-title a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -4px;
    left: 0;
    background: linear-gradient(90deg, #007bff, #0056b3);
    transition: width 0.3s ease;
}

.entry-title a:hover::after {
    width: 100%;
}

.entry-meta {
    margin-bottom: 1rem;
    color: #6c757d;
    font-size: 0.9rem;
}

.entry-content {
    margin-bottom: 1.5rem;
    line-height: 1.7;
    color: #495057;
}

.read-more-wrapper {
    margin-top: 1.5rem;
}

.read-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: linear-gradient(135deg, #3da448, #0056b3);
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 500;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
    position: relative;
    overflow: hidden;
}

.read-more-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.5s ease;
}

.read-more-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 123, 255, 0.3);
    color: white;
}

.read-more-btn:hover::before {
    left: 100%;
}

.btn-arrow {
    transition: transform 0.3s ease;
}

.read-more-btn:hover .btn-arrow {
    transform: translateX(3px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .post-box article {
        padding: 1rem;
        flex-direction: column;
        gap: 1rem;
    }
    
    .post-thumbnail-wrapper {
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }
    
    .post-thumbnail {
        height: 150px;
        width: 100%;
    }
    
    .read-more-btn {
        padding: 0.6rem 1.2rem;
        font-size: 0.9rem;
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .post-thumbnail-wrapper {
        width: 100%;
        max-width: none;
    }
    
    .post-thumbnail {
        height: 120px;
    }
}
</style>