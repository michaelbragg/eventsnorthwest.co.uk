<?php 
/*
Template Name: Blog Home
*/
?>
<?php get_header(); ?>

        <div id="main" role="main"><!-- START MAIN -->

		<section id="post" class="prefix_1 grid_16 suffix_1"><!-- start of #posts -->
            
            <div class="grid_alpha grid_16 suffix_1 clearfix news">
				<?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div id="post-<?php the_ID(); ?>">
                        <h1 class="heading__main"><?php the_title(); ?></h1>
                        <?php the_content(''); ?>
                    </div>
                <?php endwhile; ?>
                <?php query_posts('showposts=5'); ?> 
                <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>"><!-- start of news excerpt -->
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        <?php the_excerpt(); ?>
                        <small>Posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>.</small>
                    </article><!-- end of news excerpt -->
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                <?php else : ?>
                    <h3>Not Found</h3>
                    <p>Sorry, but you are looking for something that isn't here.</p>
                    <?php include (TEMPLATEPATH . "/searchform.php"); ?>
                <?php endif; ?> 
            </div>
            <?php /*include ('post_sidebar.php');*/ ?>
            
        </section><!-- end of #posts -->
       
        </div><!-- END MAIN -->   
        
<?php include ('footer_fixed.php'); ?>