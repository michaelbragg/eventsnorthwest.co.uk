<?php /*
*/ ?>
<?php get_header(); ?>

        <div id="main" role="main"><!-- START MAIN -->

		<section id="post" class="prefix_1 grid_14 suffix_1"><!-- start of #posts -->
            
            <div class="alpha grid_8 suffix_1 clearfix news">
                <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>"><!-- start of news excerpt -->
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        <?php the_excerpt(); ?>
                        <small>Posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>.</small>
                    </article><!-- end of news excerpt -->
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php include ('post_sidebar.php'); ?>
            
        </section><!-- end of #posts -->
       
        </div><!-- END MAIN -->   
        
<?php get_footer(); ?>