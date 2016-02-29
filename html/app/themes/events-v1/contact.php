<?php 
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
        
        <!-- start of #latest-projects -->
   	  	<section id="contact" class="clearfix"> 
        
        <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
        
        	<?php the_content(''); ?>
            
            <form id="commentForm" class="grid_12 suffix_4" action="<?php bloginfo('template_url'); ?>/scripts/php/email.php" method="post" enctype="multipart/form-data">
                <table class="horiz">
                    <tr>
                        <td>
                        <label for="cname">Full Name <sup>*</sup></label>
                        <br />
                        <input type="text" id="cname" name="name" class="input_largeLeft" minlength="2" />
                        </td>
                        <td>
                        <label for="cemail">Email <sup>*</sup></label>
                        <br />
                        <input type="text" id="cemail" name="email" class="input_large" placeholder="name@example.com" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="curl">Web Address</label>
                        <br />
                        <input type="text" id="curl" name="url" class="input_largeLeft" value="http://" />
                        </td>
                        <td>
                        <label for="ctel">Tel (phone)</label>
                        <br />
                        <input type="text" id="ctel" name="tel" class="input_large" />
                        </td>
                    </tr>
                </table>
                <p><label for="ccomment">Message <sup>*</sup></label></p>
                <p class="grid_12 suffix_4 alpha omega"><textarea id="ccomment" name="comment" rows="5" placeholder="Please write your message here..."></textarea></p>
                <p><input name="submit" type="submit" id="submit" value="Send Message" /></p>
            </form>
            
        <?php endwhile; ?>
        
        <?php query_posts('showposts=3'); ?> 
        <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        	<?php //get article_image (custome field) ?>
            <?php $image = get_post_meta($post->ID, 'portfolio_image', true); ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><figure id="post-<?php the_ID(); ?>" class="grid_4"><img src="<?php echo $image; ?>" width="220" height="286" alt="<?php the_title(); ?>" aria-describedby="capt<?php the_ID(); ?>" />
            <figcaption id="capt<?php the_ID(); ?>"><h2><?php the_title(); ?> <span>&raquo;</span></h2></figcaption>
            </figure></a>

		<?php endwhile; ?>
        <?php endif; ?>
        
        <?php wp_reset_query(); ?>
        
        <?php else : ?>
            <h2 class="center">Not Found</h2>
            <p class="center">Sorry, but you are looking for something that isn't here.</p>
            <?php include (TEMPLATEPATH . "/searchform.php"); ?>
        <?php endif; ?>
        <a href="#"><aside class="grid_4"><h3>View the full Portfolio <br />&raquo;</h3></aside></a>

		</section>
        <!-- end of #latest-projects -->
<?php get_footer(); ?>