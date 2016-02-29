<?php 
/*
Template Name: Tabs
*/
?>
        <?php if ( is_page('template_clinic') ) { ?>
        <aside id="tabs" class="clearFix grid_16"><!-- START TABS -->
            <section class="grid_alpha grid_5 tab-Male">
            <h2>Male Hair Loss <span>Treatment</span></h2>
            <p>a short paragraph of text goes here to support call to action</p>
            <a href="#">Read more &raquo;</a> 
            </section>
            <section class="grid_6 tab-Female">
            <h2>Female Hair Loss <span>Treatment</span></h2>
            <p>a short paragraph of text goes here to support call to action</p>
            <a href="#">Read more &raquo;</a> 
            </section>
            <section class="grid_5 tab-Find grid_omega">
            <h2>Find your local hair growth centre</h2>
            <p>Just type your postcode;</p>
            <input name="clinic-search" type="text" size="15" maxlength="100"><br/>
            <a href="#"><span>Search &raquo;</span></a> 
            </section>
        </aside><!-- END TABS -->
        <?php } else { ?>
        <aside id="tabs" class="clearFix grid_16"><!-- START TABS -->
            <section class="grid_alpha grid_5 tab-Male">
            <h2>Male Hair Loss <span>Treatment</span></h2>
            <p>a short paragraph of text goes here to support call to action</p>
            <a href="#">Read more &raquo;</a> 
            </section>
            <section class="grid_6 tab-Female">
            <h2>Female Hair Loss <span>Treatment</span></h2>
            <p>a short paragraph of text goes here to support call to action</p>
            <a href="#">Read more &raquo;</a> 
            </section>
            <section class="grid_5 tab-Find grid_omega">
            <h2>Find your local hair growth centre</h2>
            <p>Just type your postcode;</p>
            <input name="clinic-search" type="text" size="15" maxlength="100"><br/>
            <a href="#"><span>Search &raquo;</span></a> 
            </section>
        </aside><!-- END TABS -->
        <?php } ?>