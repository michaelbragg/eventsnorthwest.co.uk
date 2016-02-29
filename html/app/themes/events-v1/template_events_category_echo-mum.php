<?php 

/*

Template Name: Events Category (Mum of the Year)

*/

?>

<?php get_header(); ?>

        

        <div id="main" role="main"><!-- START MAIN -->

		<?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" class="eventPage">

                <?php get_sidebar('echo-mum'); ?>

                <div id="post" class="prefix_1 grid_16 suffix_1 clearfix">

                <?php the_content(''); ?>

                </div>

            </article>

        <?php endwhile; ?>

        <?php endif; ?>     

        </div><!-- END MAIN -->    

        

<?php include ('footer_fixed.php'); ?>