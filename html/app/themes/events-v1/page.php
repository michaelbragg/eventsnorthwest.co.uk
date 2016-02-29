<?php 

/*

Template Name: Page

*/

?>

<?php get_header(); ?>



    <div id="main" role="main"><!-- START MAIN -->

    <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <div id="post" class="prefix_1 grid_16 suffix_1 clearfix">

            <article id="post-<?php the_ID(); ?>"><!-- start of #post -->

                <?php the_content(''); ?>

            </article><!-- end of #post -->

        </div>

    <?php endwhile; ?>

    <?php endif; ?>

    </div><!-- END MAIN -->       

        

<?php include ('footer_fixed.php'); ?>

