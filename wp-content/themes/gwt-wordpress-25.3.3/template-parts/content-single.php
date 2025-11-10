<?php
/**
 * The template part for displaying single posts
 * @package GWT
 * @since Government Website Template 2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <div class="entry-content">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        
        <div class="entry-meta">
            <?php gwt_wp_posted_on(); ?>
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

<style>
.entry-content {
    padding: 2rem;
    line-height: 1.6;
}

.entry-title {
    margin: 0 0 1.5rem 0;
    padding-bottom: 1rem;
    border-bottom: 2px solid #e0e0e0;
    font-size: 2rem;
}

.entry-meta {
    margin-bottom: 2rem;
    color: #666;
    font-size: 0.9rem;
}

.entry-content p {
    margin-bottom: 1.5rem;
}

.page-links {
    margin: 2rem 0;
    padding: 1rem;
    background: #f5f5f5;
}
</style>