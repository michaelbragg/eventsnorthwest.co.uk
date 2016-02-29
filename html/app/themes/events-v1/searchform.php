<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div>
	<p class="grid_12 alpha"><input type="text" class="input_largeLeft" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15" /></p>
	<p><input name="submit" type="submit" id="searchsubmit" value="Search" /></p>
</div>
</form>
