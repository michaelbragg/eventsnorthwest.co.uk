<?php 
/*
Template Name: Single
*/
?>
<?php get_header(); ?>

        <div id="main" role="main"><!-- START MAIN -->

		<section id="post" class="prefix_1 grid_16 suffix_1"><!-- start of #posts -->
            
            <div class="alpha grid_16 suffix_1 clearfix news">
            	<aside style="margin-bottom:48px;"><p><a href="http://www.eventsnorthwest.co.uk/blog/">&laquo; Events North West Blog Home</a></p></aside>
				<?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>">
                        <h1 class="heading__main"><?php the_title(); ?></h1>
                        <?php the_content(''); ?>
                    </article>
                    <aside class="metaStart">
<!-- start of #meta -->
                    <small style="border:none;"><?php previous_post_link(); ?><br /><?php next_post_link(); ?></small>
        			</aside><!-- end of #meta -->
                <?php endwhile; ?>
                <?php else : ?>
                    <h3>Not Found</h3>
                    <p>Sorry, but you are looking for something that isn't here.</p>
                    <?php include (TEMPLATEPATH . "/searchform.php"); ?>
                <?php endif; ?>
            </div>
            <?php /* include ('post_sidebar.php'); */ ?>
            
        </section><!-- end of #posts -->
       
        </div><!-- END MAIN -->  
                   
<?php include ('footer_fixed.php'); ?>