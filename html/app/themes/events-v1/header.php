<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->

<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->

<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

  <meta charset="utf-8">

  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>

		<?php

        if (is_home()) {

            echo bloginfo('name');

        } elseif (is_404()) {

            echo '404 Not Found';

        } elseif (is_category()) {

            echo 'Category:'; wp_title('');

        } elseif (is_search()) {

            echo 'Search Results';

        } elseif ( is_day() || is_month() || is_year() ) {

            echo 'Archives:'; wp_title('');

        } elseif (is_single()) {

            echo the_title(''); '| www.eventsnorthwest.co.uk';

        } elseif (is_page()) {

            echo wp_title('');

        } else {

            echo wp_title('');

        }

        ?>

    </title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

    <!--<meta name="HandheldFriendly" content="True">

    <meta name="MobileOptimized" content="320">-->

	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">

    <meta http-equiv="cleartype" content="on">


	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link href="http://www.eventsnorthwest.co.uk/humans.txt" rel="author" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>


	<?php wp_get_archives('type=monthly&format=link'); ?>

	<?php wp_head(); ?>

    

    <meta name="google-site-verification" content="OwF1jradrH4JeKVn4JaiSjEfQVIojEoywlGRYPc9Amw" />

    <link rel="shortcut icon" href="http://www.eventsnorthwest.co.uk/favicon.png" />

<!--[if lte IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <!--[if IE]>

     <style type="text/css">

         .timer { display: none !important; }

         div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }

    </style>

	<![endif]-->

<script type="text/javascript">

var togglestate='visible';

function toggleNav(){

	if(togglestate=='visible'){

	jQuery('#navigation').slideUp( 'fast' );

	jQuery('#mobNav').removeClass('downMob').addClass('upMob');

	togglestate = 'hidden';

	} else {

	jQuery('#navigation').slideDown( 'fast' );

	togglestate = 'visible';

	jQuery('#mobNav').removeClass('upMob').addClass('downMob');

	}

};

function detectNav(){

	viewportW = jQuery(window).width();

	console.log(viewportW);

	console.log('togglestate is - ' + togglestate);

	if( (viewportW <= 556)&&(togglestate='visible')){

		toggleNav();

	} 

	if((viewportW >= 557 ) && (togglestate = 'hidden')){

		toggleNav();

		}

}

jQuery(document).ready(detectNav);

jQuery(window).resize( detectNav);

</script> 

<script>  

jQuery(document).ready(function($) {

  $('#nav ul li').hover(
    function () {
      //show its submenu
      $('ul:first', this).css('display', 'block');
    }, 
    function () {
      //hide its submenu
      $('ul:first', this).css('display', 'none'); 
    }
  );

});

</script>

<script>

(function( $ ){

  var mainNav = mainNav || {};
  
  //  Default Configs
  mainNav.config = {

  };

  //  Set all li with child as closed
  mainNav.init = function(config) {
    
    // provide for custom configuration via init()
    if (config && typeof(config) === 'object') {
      $.extend(sectionNav.config, config);
    }
    
    $('#js-navicon').on('click', mainNav.toggleNav);
    
  }
  
  mainNav.toggleNav = function() {
    $('#menu-main-menu').toggleClass('ss_visible');
  }
  
  //  OnLoad
  $(document).ready(function() {

    // To extend the default config settings
    // pass a object as an argument for the init function
    // eg. mainNav.init({ 'parent': '#js-section-nav'});
    mainNav.init();

  });

})( jQuery );

</script>

</head>

<body>

<div id="page-wrap" class="container_16"> <!-- START GRID -->



    
    
    <header class="header__main">
  
  <div id="branding"><a href="http://www.eventsnorthwest.co.uk" title="Awards, Exhibitions, Event Management, Staging &amp; Av, Filming."><img src="<?php bloginfo('template_url'); ?>/images/Events-North-West-Logo.png" width="220" height="24" alt="Events North West - Event Management, Awards, Exhibitions, Staging and Av, Filming"></a></div>

  
  <div id="nav">
<div class="text">Menu</div>
<div class="navicon ms_hidden ls_hidden" id="js-navicon" >
<span></span>
<span></span>
<span></span>
</div>
    <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
  </div>
  
</header><!-- END HEADER -->