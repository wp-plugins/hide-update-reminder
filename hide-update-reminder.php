<?php
/*
Plugin Name: Hide Update Reminder
Plugin URI: http://www.stuffbysarah.net/wordpress-plugins/remove-update-reminder/
Description: Allows you to remove the upgrade Nag screen from view for Editors and below
Author: Sarah G
Version: 1.0
Author URI: http://www.stuffbysarah.net/
*/

add_action('admin_init', 'run_chk_usr_lvl');

function run_chk_usr_lvl($matches) {
	global $userdata;
	if ($userdata->user_level < 10) :
		add_action('admin_head', 'rem_nag_style');
	endif;
}

//styling options page
function rem_nag_style() {
	?>
<style type="text/css" media="screen">
	#update-nag { display: none; }
</style>
<?php
}
?>