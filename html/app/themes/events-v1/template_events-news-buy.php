<?php 
/*
Template Name: Events News (buy)
*/
?>
<?php get_header(); ?>
        
        <div id="main" role="main"><!-- START MAIN -->
		<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" class="eventPage">
                <?php get_sidebar('buy'); ?>
                <div id="post" class="prefix_1 grid_14 suffix_1 clearfix news">
                    <div class="grid_alpha grid_8 suffix_1">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(''); ?>
                    </div>
                    <div class="grid_4 suffix_1 grid_omega">
					<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <?php echo $image[0]; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>      
        <?php endif; ?>     
        </div><!-- END MAIN -->        
        
<?php get_footer(); ?>