<?php 

/*

Sidebar/Heading

*/

?>

        <?php if ( is_single() ) { ?>

<!--        <header class="prefix_1 grid_14 suffix_1"><h1></h1>

        <ul>

            <li><a title="Entry Form" href="media/CBA_Form_2012.pdf">Entry Form</a></li>

            <li><a title="Categories &amp; Sponsors" href="cheshire-business-awards_category.html">Categories &amp; Sponsors</a></li>

            <li><a title="News" href="http://www.cheshirebusinessawards.co.uk">News</a></li>

            <li class="icon"><a class="eventButton-gallery" title="Event Gallery" href="cheshire-business-gallery.html"><span class="alt">Event Gallery</span></a></li>

            <li class="icon"><a class="eventButton-contact" title="Contact Events" href="mailto:enquiries@cheshirebusinessawards.co.uk"><span class="alt">Contact Events</span></a></li>

        </ul>

        </header>-->

        

        <?php } elseif ( is_page() ) { ?> 

        

        <?php

		$parent_title = get_the_title($post->post_parent);

		//echo $parent_title;

		$slug = basename(get_permalink($post->post_parent));

		?>        

        

	    <header id="eHeader" class="prefix_1 grid_14 suffix_1"><a href="http://www.eventsnorthwest.co.uk/<?php echo $slug; ?>" title="<?php echo the_title(); ?>">

        <h1><?php if($post->post_parent == 0) { 

			the_title(); 

		} else { 

			$parents = get_post_ancestors($post->ID); 

			echo apply_filters("the_title", get_the_title(end($parents))); } 

		?></h1></a>

        <ul>

            <li id="Mcategories"><a title="Entry Form and Prizes" href="<?php echo home_url(); ?>/<?php echo $slug;?>/<?php echo $slug;?>-entry-form/">Entry Form &amp; Prizes</a></li>

            <li id="Msponsors"><a title="Shortlist and Sponsors" href="<?php echo home_url(); ?>/<?php echo $slug;?>/<?php echo $slug;?>-shortlist-sponsors">Shortlist &amp; Sponsors</a></li>

            <li id="Mnews"><a title="News" href="<?php echo home_url(); ?>/<?php echo $slug;?>/<?php echo $slug;?>-news">News</a></li>
<?php
            
            $page = get_page_by_title( $parent_title . ' ' . 'gallery' );
$page_id = $page->ID;
            
 $publish_page = get_page( $page_id );
if ($publish_page->post_status == 'publish' ) { ?>
            <li id="Mgallery" class="icon"><a class="sprite icon__sidebar  icon__sidebar--gallery" title="Event Gallery" href="<?php echo home_url(); ?>/<?php echo $slug;?>/<?php echo $slug;?>-gallery"><span class="alt">Event Gallery</span></a></li><?php
	} else {
		
	}
?>

      <li id="Mcontact" class="icon"><a class="sprite icon__sidebar icon__sidebar--contact" title="Contact Events" href="<?php echo home_url(); ?>/<?php echo $slug;?>/<?php echo $slug;?>-contact"><span class="alt">Contact Events</span></a></li>

        </ul>

        </header>



        <?php } else { ?>

         <aside id="sidebar" class="grid_4 grid_omega" role="complementary">

            <p>Coming soon.</p>

        </aside>

        <?php } ?>