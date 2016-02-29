<?php 
/*
Template Name: Events Gallery
*/
?>
<?php get_header(); ?>
<?php
  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href='$url' class='eventButton-return' title='Return to the previous page' class='returnButton'><span class='alt'>Return to the previous page</span></a>";
?>

        <div id="main" role="main"><!-- START MAIN -->
                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="thumbnails"><?php the_content(''); ?><div id="pointer"></div></article>
				<?php endwhile; ?>
                <?php endif; ?>
        </div><!-- END MAIN -->     

<?php include ('footer_gallery.php'); ?>