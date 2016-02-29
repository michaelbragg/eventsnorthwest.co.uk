<?php 
/*
Template Name: 2 Column
*/
?>
<?php get_header(); ?>
        
        <section id="feature-wrap" class="clearfix"><!-- START FEATURE -->
            <div id="feature" class="clearfix">
            <div class="competition">
                <div class="grid_8 suffix_8">
                <h1>Halo Elite, Hair loss treatment giveaway!</h1>
                <a href="#" class="button green" title="Hair Growth Information"><span>Enter Competition &raquo;</span></a>
                </div>
            </div>
            <div class="baldness">
                <div class="grid_8 suffix_8">
                <h1>Hair Growth treatment for hair loss and baldness</h1>
                <a href="#" class="button green" title="Hair Growth Information"><span>Click for Hair Growth &raquo;</span></a>
                </div>
            </div>
        </div>
        </section><!-- END FEATURE -->
        
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
        <?php
		//detect amount of content to split into columns
		$numchars = strlen($post->post_content);
		$content = wordwrap($post->post_content, $numchars/2+2, "{{break}}");
		$content = split("{{break}}", $content);
		?>
        <div class="clearfix">&nbsp;</div>
        
        <div id="main" role="main" class="grid_16 noSidebar"><!-- START MAIN -->
			
            <article id="post-<?php the_ID(); ?>"><!-- start of #post -->
            	<div class="alpha grid_7 suffix_1"><?php echo apply_filters('the_content', $content[0]); ?></div>
                <div class="grid_7 suffix_1 omega"><?php echo apply_filters('the_content', $content[1]); ?></div>
            </article><!-- end of #post -->
            
		</div><!-- END MAIN -->
        
		<?php endwhile; ?>
        <?php endif; ?>
        
<?php get_footer(); ?>
