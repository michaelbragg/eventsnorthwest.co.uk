<?php 
/*
Template Name: Home_Sidebar
*/
?>
<aside id="homebar" class="grid_6 omega pageWhite" role="complementary">
    
    <div id="recent-posts"><!-- start of #recent-posts -->
    <ul>
        <h3>News:</h3>
        <?php query_posts('showposts=3'); ?> 
        <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
        <?php endif; ?>
    </ul>
    </div><!-- end of #recent-posts -->
    
</aside>