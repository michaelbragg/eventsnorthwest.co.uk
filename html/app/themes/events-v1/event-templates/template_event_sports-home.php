<?php

/*

Template Name: Event - Echo Sports (Home)

*/

?>

<?php get_header(); ?>



  <div id="main" role="main"><!-- START MAIN -->

  <?php if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" class="eventPage">

	<?php get_template_part( 'event-templates/template_event_sports-sidebar' ); ?>

        <div id="post" class="prefix_1 grid_16 suffix_1 clearfix">

        <aside class="grid_alpha grid_4 suffix_1 asideEvent"><img class="alignnone size-full wp-image-141" title="<?php the_title(); ?> Awards logo" src="<?php the_field('logo');?>" /><br />

<hr />

<p>Dates for your diary</p>

<?php the_field('dates'); ?>

<p>Contact us:<br /> <a href="mailto:<?php the_field('contactAddress'); ?>">Click to Email</a><br /> Call: <?php the_field('telephone'); ?></p>

<p>Follow us <a href="http://twitter.com/#!/<?php the_field('twittername'); ?>">@<?php the_field('twittername');?></a></p>

</aside>

<section>

<div class="grid_12">

<blockquote id="bannerTitle"><?php the_field('banner');?> </blockquote>

<?php if (has_post_thumbnail() ){ the_post_thumbnail('events');} ?>

        <?php the_content(); ?>

        </div>

      </article>

    <?php endwhile; ?>

    <?php endif; ?>

    </div><!-- END MAIN -->



<?php include ('footer_fixed.php'); ?>