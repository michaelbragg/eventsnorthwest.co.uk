<?php 

/*

Template Name: Event - Shankly (Details)

*/

?>

<?php get_header(); ?>

        

        <div id="main" role="main"><!-- START MAIN -->

		<?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" class="eventPage">

                <?php get_template_part( 'event-templates/template_event_shankly-sidebar' ); ?>

                <div id="post" class="prefix_1 grid_16 suffix_1 clearfix pageWhite">

                <?php the_content(''); ?>

                </div>

            </article>

        <?php endwhile; ?>

        <?php endif; ?>     

        </div><!-- END MAIN -->    

        

<?php include ('footer_fixed.php'); ?>