<form method="get" id="searchform" role="search" action="<?php echo esc_url(home_url('/')); ?>">
	<div class="searchleft">
		<input type="text" value="" placeholder="<?php _e('Search','avis-lite'); ?>" name="s" id="searchbox" class="searchinput"/>
	</div>
    <div class="searchright">
    	<input type="submit" class="submitbutton" value=" " /><i class="fa fa-search"></i>
    </div>
    <div class="clearfix"></div>
</form>