<?php 
/*
Post_Sidebar
*/
?>
<?php if ( is_single() ) { ?>

    	<aside id="sidebar" class="grid_4 grid_omega" role="complementary">
            
            <div id="meta" class="meta"><!-- start of #meta -->
            <small>This entry was posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> by <?php the_author(); ?> and is filed under <?php the_category(', ') ?>.</small>
            </div><!-- end of #meta -->
            
            <div id="categories" class="meta"><!-- start of #categories -->
            <ul>
            	<h3>Event Categories:</h3>
				<?php wp_list_categories('orderby=name&title_li=') ?>
            </ul>
            </div><!-- end of #categories -->
            
            <div id="recent-posts" class="meta"><!-- start of #recent-posts -->
            <ul>
            	<h3>Recent Event Posts:</h3>
                <?php query_posts('showposts=3'); ?> 
                <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
                <?php endif; ?>
			</ul>
            </div><!-- end of #recent-posts -->
            
            <div id="tags"><!-- start of #tags -->
            <small><strong>Tags:</strong> <?php wp_tag_cloud('smallest=10&largest=10') ?></small>
            </div><!-- end of #tags -->
            
        </aside>
<?php } elseif (is_archive()  or is_category() ) { ?>
    	<aside id="sidebar" class="grid_4 grid_omega" role="complementary">
            
           
            
            <div id="categories" class="meta"><!-- start of #categories -->
            <ul>
            	<h3>Event Categories:</h3>
				<?php wp_list_categories('orderby=name&title_li=') ?>
            </ul>
            </div><!-- end of #categories -->
            
            <div id="recent-posts" class="meta"><!-- start of #recent-posts -->
            <ul>
            	<h3>Recent Event Posts:</h3>
                <?php query_posts('showposts=3'); ?> 
                <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
                <?php endif; ?>
			</ul>
            </div><!-- end of #recent-posts -->
            
            <div id="tags"><!-- start of #tags -->
            <small><strong>Tags:</strong> <?php wp_tag_cloud('smallest=10&largest=10') ?></small>
            </div><!-- end of #tags -->
            
        </aside>
<?php } elseif ( is_page() ) { ?> 

        <aside id="sidebar" class="grid_4 grid_omega" role="complementary">
          
            <div id="categories" class="meta"><!-- start of #categories -->
            <ul>
                <h3>Event Categories:</h3>
                <?php wp_list_categories('orderby=name&title_li=') ?>
            </ul>
            </div><!-- end of #categories -->
                        
            <div id="recent-posts" class="meta"><!-- start of #recent-posts -->
            <ul>
                <h3>Recent Event Posts:</h3>
                <?php query_posts('showposts=3'); ?> 
                <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            </div><!-- end of #recent-posts -->
            
            <div id="tags" class="meta"><!-- start of #tags -->
            <small><strong>Tags:</strong> <?php wp_tag_cloud('smallest=10&largest=10') ?></small>
            </div><!-- end of #tags -->
        
        </aside>
        
<?php } else { ?>

        <aside id="sidebar" class="grid_4 grid_omega" role="complementary">
        <p>Coming soon.</p>
        </aside>
        
<?php } ?>