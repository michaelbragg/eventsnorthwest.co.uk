</div> 

<!-- END GRID -->

<footer id="footer" class="footerGallery clearfix"> <!-- START FOOTER -->

    <section>

    <small class="floatLeft"><a href="http://www.trinitymirror.com/" title="Trinity Mirror"><img src="<?php bloginfo('template_url'); ?>/images/trinity-logo-grey.png" alt="Trinity Mirror"></a><br />
    </small>

    <small class="floatRight">T: <a href="tel:01513253214">(+44)151 472 2571</a> <!--<a href="http://www.eventsnorthwest.co.uk/contact-events-north-west/" title="Email">Contact Events North West </a><br /><a href="http://www.eventsnorthwest.co.uk/terms-conditions">Terms &amp; Conditions</a>--> 

<!--<a href="http://www.eventsnorthwest.co.uk/privacy-policy">Privacy Policy</a> - <a href="http://www.eventsnorthwest.co.uk/cookie-policy">Cookies</a>--></small>

    </section>

</footer> 

<!-- END FOOTER -->

<!-- JAVASCRIPT -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.fitvids.js">
</script>

<script>
$('#post').fitVids();
console.log("test: ");
</script>

<!-- scripts concatenated and minified via ant build script-->

<script defer src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>

<script defer src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

<!-- end scripts -->



<script>

	var _gaq=[['_setAccount','UA-16150508-3'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID

	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;

	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';

	s.parentNode.insertBefore(g,s)}(document,'script'));

</script>

<?php wp_footer(); ?>

</body>

</html>