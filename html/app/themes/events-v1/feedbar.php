<?php 
/*
Template Name: Feedbar
*/
?>
        <?php if ( is_page('News - Cheshire Business Awards') ) { ?>
        <h1><?php the_title(); ?></h1> 
    <?php include_once(ABSPATH . WPINC . '/feed.php');
        $rss = fetch_feed('http://www.chesterchronicle.co.uk/tags/cheshire-business-awards/rss.xml');
        if (!is_wp_error( $rss ) ) : 
            $maxitems = $rss->get_item_quantity(5); 
            $rss_items = $rss->get_items(0, $maxitems); 
        endif;
        ?>
        <ul>
            <?php if ($maxitems == 0) echo '<li>Coming soon</li>';
            else
            foreach ( $rss_items as $item ) : ?>
            <li>
                <h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
                <?php echo $item->get_description(); ?>
                <small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small>
      </li>
            <?php endforeach; ?>
        </ul>
        
        <?php } elseif ( is_page(1110) ) { ?>
        <h1><?php the_title(); ?></h1> 
    <?php include_once(ABSPATH . WPINC . '/feed.php');
        $rss = fetch_feed('http://www.liverpoolecho.co.uk/topics/pride-of-merseyside/rss.xml');
        if (!is_wp_error( $rss ) ) : 
            $maxitems = $rss->get_item_quantity(5); 
            $rss_items = $rss->get_items(0, $maxitems); 
        endif;
        ?>
        <ul>
            <?php if ($maxitems == 0) echo '<li>Coming soon</li>';
            else
            foreach ( $rss_items as $item ) : ?>
            <li>
                <h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
                <?php echo $item->get_description(); ?>
                <small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small>
      </li>
            <?php endforeach; ?>
        </ul>
        
        <?php 
        # Echo Environment Awards
    } elseif ( is_page(1045) ) { ?>
        <h1><?php the_title(); ?></h1> 
    <?php include_once(ABSPATH . WPINC . '/feed.php');
        $rss = fetch_feed('http://www.liverpoolecho.co.uk/topics/echo-environment-awards/rss.xml');
        if (!is_wp_error( $rss ) ) : 
            $maxitems = $rss->get_item_quantity(5); 
            $rss_items = $rss->get_items(0, $maxitems); 
        endif;
        ?>
        <ul>
            <?php if ($maxitems == 0) echo '<li>Coming soon</li>';
            else
            foreach ( $rss_items as $item ) : ?>
            <li>
                <h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
                <?php echo $item->get_description(); ?>
                <small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small>
      </li>
            <?php endforeach; ?>
        </ul>
        
        
        <?php
        # Echo Environment Awards
         } elseif ( is_page('News - Examiner Business Awards') ) { ?> 

        <h1><?php the_title(); ?></h1> 
    <?php include_once(ABSPATH . WPINC . '/feed.php');
        $rss = fetch_feed('http://www.examiner.co.uk/topics/examiner-business-awards/rss.xml');
        if (!is_wp_error( $rss ) ) : 
            $maxitems = $rss->get_item_quantity(5); 
            $rss_items = $rss->get_items(0, $maxitems); 
        endif;
        ?>
        <ul>
            <?php if ($maxitems == 0) echo '<li>Coming soon</li>';
            else
            foreach ( $rss_items as $item ) : ?>
            <li>
                <h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
                <?php echo $item->get_description(); ?>
                <small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small>
      </li>
            <?php endforeach; ?>
        </ul>
                   <?php } elseif ( is_page(952) ) { ?> 

        <h1><?php the_title(); ?></h1> 
    <?php include_once(ABSPATH . WPINC . '/feed.php');
        $rss = fetch_feed('http://www.liverpooldailypost.co.uk/topics/regional-business-awards/rss.xml');
        if (!is_wp_error( $rss ) ) : 
            $maxitems = $rss->get_item_quantity(5); 
            $rss_items = $rss->get_items(0, $maxitems); 
        endif;
        ?>
        <ul>
            <?php if ($maxitems == 0) echo '<li>Coming soon</li>';
            else
            foreach ( $rss_items as $item ) : ?>
            <li>
                <h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
                <?php echo $item->get_description(); ?>
                <small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small>
      </li>
            <?php endforeach; ?>
        </ul>
           <?php } elseif ( is_page(1148) ) { ?> 

        <h1><?php the_title(); ?></h1> 
    <?php include_once(ABSPATH . WPINC . '/feed.php');
        $rss = fetch_feed('http://www.liverpoolecho.co.uk/topics/mum-of-the-year/rss.xml');
        if (!is_wp_error( $rss ) ) : 
            $maxitems = $rss->get_item_quantity(5); 
            $rss_items = $rss->get_items(0, $maxitems); 
        endif;
        ?>
        <ul>
            <?php if ($maxitems == 0) echo '<li>Coming soon</li>';
            else
            foreach ( $rss_items as $item ) : ?>
            <li>
                <h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
                <?php echo $item->get_description(); ?>
                <small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small>
      </li>
            <?php endforeach; ?>
        </ul>
           <?php } elseif ( is_page(1045) ) { ?> 

        <h1><?php the_title(); ?></h1> 
    <?php include_once(ABSPATH . WPINC . '/feed.php');
        $rss = fetch_feed('http://www.liverpoolecho.co.uk/topics/its-our-world/rss.xml');
        if (!is_wp_error( $rss ) ) : 
            $maxitems = $rss->get_item_quantity(5); 
            $rss_items = $rss->get_items(0, $maxitems); 
        endif;
        ?>
        <ul>
            <?php if ($maxitems == 0) echo '<li>Coming soon</li>';
            else
            foreach ( $rss_items as $item ) : ?>
            <li>
                <h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
                <?php echo $item->get_description(); ?>
                <small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small>
      </li>
            <?php endforeach; ?>
        </ul>
           <?php } elseif ( is_page(718) ) { ?> 

        <h1><?php the_title(); ?></h1> 
    <?php include_once(ABSPATH . WPINC . '/feed.php');
        $rss = fetch_feed('http://www.dailypost.co.uk/topics/carolau-llandudno/rss.xml');
        if (!is_wp_error( $rss ) ) : 
            $maxitems = $rss->get_item_quantity(5); 
            $rss_items = $rss->get_items(0, $maxitems); 
        endif;
        ?>
        <ul>
            <?php if ($maxitems == 0) echo '<li>Coming soon</li>';
            else
            foreach ( $rss_items as $item ) : ?>
            <li>
                <h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
                <?php echo $item->get_description(); ?>
                <small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small>
      </li>
            <?php endforeach; ?>
        </ul>
           <?php 
       
        } elseif ( is_page(866) ) { ?> 

        <h1><?php the_title(); ?></h1> 
    <?php include_once(ABSPATH . WPINC . '/feed.php');
        $rss = fetch_feed('http://www.liverpooldailypost.co.uk/topics/liverpool-post-leader-awards./rss.xml');
        if (!is_wp_error( $rss ) ) : 
            $maxitems = $rss->get_item_quantity(5); 
            $rss_items = $rss->get_items(0, $maxitems); 
        endif;
        ?>
        <ul>
            <?php if ($maxitems == 0) echo '<li>Coming soon</li>';
            else
            foreach ( $rss_items as $item ) : ?>
            <li>
                <h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
                <?php echo $item->get_description(); ?>
                <small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small>
      </li>
            <?php endforeach; ?>
        </ul>
           <?php } elseif ( is_page(1286) ) { ?> 

        <h1><?php the_title(); ?></h1> 
    <?php include_once(ABSPATH . WPINC . '/feed.php');
        $rss = fetch_feed('http://www.examiner.co.uk/topics/examiner-community-awards/rss.xml');
        if (!is_wp_error( $rss ) ) : 
            $maxitems = $rss->get_item_quantity(5); 
            $rss_items = $rss->get_items(0, $maxitems); 
        endif;
        ?>
        <ul>
            <?php if ($maxitems == 0) echo '<li>Coming soon</li>';
            else
            foreach ( $rss_items as $item ) : ?>
            <li>
                <h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
                <?php echo $item->get_description(); ?>
                <small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small>
      </li>
            <?php endforeach; ?>
        </ul>
           <?php } elseif ( is_page('achievement-wales-news') ) { ?> 

        <h1><?php the_title(); ?></h1> 
    <?php include_once(ABSPATH . WPINC . '/feed.php');
        $rss = fetch_feed('http://www.dailypost.co.uk/topics/achievement-wales/rss.xml');
        if (!is_wp_error( $rss ) ) : 
            $maxitems = $rss->get_item_quantity(5); 
            $rss_items = $rss->get_items(0, $maxitems); 
        endif;
        ?>
        <ul>
            <?php if ($maxitems == 0) echo '<li>Coming soon</li>';
            else
            foreach ( $rss_items as $item ) : ?>
            <li>
                <h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
                <?php echo $item->get_description(); ?>
                <small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small>
      </li>
            <?php endforeach; ?>
        </ul>
        <?php } else { ?>
        <aside id="sidebar" class="grid_4 omega" role="complementary">
        <p>Coming soon.</p>
        </aside>
        <?php } ?>