<?php 

/*

Template Name: Home

*/

?>
<?php get_header(); ?>

<div id="main" role="main">
<!-- START MAIN -->

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="post" class="home prefix_1 grid_16 suffix_1 pageWhite clearfix">
  <article id="post-<?php the_ID(); ?>"><!-- start of #post -->
    
    <?php the_content(''); ?>
  </article>
  <!-- end of #post --> 
  
</div>
<?php endwhile; ?>
<?php endif; ?>
<div class="home-column home prefix_1 grid_16 suffix_1 clearfix right hide-gallery">
  <?php if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( '6177' ); ?>

</div>
<div class="home-column home prefix_1 grid_16 suffix_1 clearfix">
  <?php if ( !function_exists('dynamic_sidebar') || 
!dynamic_sidebar('Home Left Column') ) : ?>
  <?php endif; ?>
</div>
<div class="home-column home prefix_1 grid_16 suffix_1 clearfix right">
  <?php if ( !function_exists('dynamic_sidebar') || 
!dynamic_sidebar('Home Right Column') ) : ?>
  <?php endif; ?>
</div>

</div>

<!-- END MAIN -->

<?php include ('footer_fixed.php'); ?>
