<?php
/*
Template Name: Event - Shankly (Sidebar)
*/
?>
  <?php if ( is_single() ) { ?>

  <?php } elseif ( is_page() ) { ?>

  <?php
  $parent_title = get_the_title($post->post_parent);

  $slug = basename(get_permalink($post->post_parent));
  ?>

  <header id="eHeader" class="prefix_1 grid_14 suffix_1">
  <a href="<?php echo home_url(); ?>/<?php echo $slug; ?>" title="<?php echo the_title(); ?>">
  <h1><?php if($post->post_parent == 0) {
    the_title();
  } else {
    $parents = get_post_ancestors($post->ID);
    echo apply_filters("the_title", get_the_title(end($parents))); }
  ?></h1></a>
    <ul>
      <li id="Mcategories"><a title="Buy Tickets" href="<?php echo home_url(); ?>/<?php echo $slug;?>/<?php echo $slug; ?>-tickets">Buy Tickets</a></li>
      <li id="Msponsors"><a title="Event Details" href="<?php echo home_url(); ?>/<?php echo $slug;?>/<?php echo $slug;?>-details">Event Details</a></li>
      <li id="Mnews"><a title="News" href="<?php echo home_url(); ?>/<?php echo $slug;?>/<?php echo $slug;?>-news">News</a></li>
      <li id="Mgallery" class="icon"><a class="sprite icon__sidebar  icon__sidebar--gallery" title="Event Gallery" href="<?php echo home_url(); ?>/<?php echo $slug;?>/<?php echo $slug;?>-gallery"><span class="alt">Event Gallery</span></a></li>
      <li id="Mcontact" class="icon"><a class="sprite icon__sidebar icon__sidebar--contact" title="Contact Events" href="<?php echo home_url(); ?>/<?php echo $slug;?>/<?php echo $slug;?>-contact"><span class="alt">Contact Events</span></a></li>
    </ul>
  </header>

  <?php } else { ?>
  <aside id="sidebar" class="grid_4 grid_omega" role="complementary">
    <p>Coming soon.</p>
  </aside>
  <?php } ?>