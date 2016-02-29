<!--from index.php-->

		<?php if ( is_front_page() ) {
            echo '<div class="clear">&nbsp;</div>';
            echo get_posts('$ID = 30');
            echo '<p class="grid_16">&raquo; <a href="';
            echo the_permalink();
            echo '" title="';
            echo the_title();
            echo '">Continue reading ';
            echo the_title();
            echo '</a></p>';
        } else {
            echo '<div class="clear">&nbsp;</div>';
            echo '<p class="postmetadata grid_12 suffix_4">';
            echo _e('Filed under&#58; ');
            echo the_category(', ');
            echo _e(' by ') ;
            echo the_author_meta('display_name');
            echo "<br />";
            echo comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;');
            echo edit_post_link('Edit', ' &#124; ', '');
            echo "</p>";
        } ?>
                               
        <?php endif; ?>