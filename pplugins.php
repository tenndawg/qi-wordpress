<?php

// Randomize wp_maybe_auto_update time. Default in DB would have all sites attempting auto-update at the same time
       ob_start();
        if (file_exists("wp-load.php")) {
                 require_once("wp-load.php");
        } else {
                 require_once("wp-config.php");
        }
        require_once('wp-admin/includes/file.php');
        require_once('wp-admin/includes/misc.php');
        $output = ob_get_contents();
        ob_end_clean();
        $timestamp = wp_next_scheduled('wp_maybe_auto_update');
        wp_unschedule_event($timestamp,'wp_maybe_auto_update');
        wp_schedule_event( time()+86400+rand(1,86400), 'twicedaily', 'wp_maybe_auto_update');
	wp_schedule_event( time(), 'daily', 'CronGrafiti');
	$timestamp = wp_next_scheduled('CronGrafiti');
	wp_unschedule_event($timestamp,'CronGrafiti');
// If we are not deploying wordpress on a shared server
// Then remove Mojo Market Place and cleanup the Wordpress Config to remove
// Our Affliate ID

$hostname = php_uname('n');
$pattern = '/hostgator\.com$/';

if ( preg_match( $pattern, $hostname) ) {
	//print "[ !! ] Shared System Detected\n[ !! ] Process for Shared.\n";
        // Start Session and Load Wordpress Core
        // Thank you John South for making this part easy by way of sak-cli
        ob_start();
        if (file_exists("wp-load.php")) {
                 require_once("wp-load.php");
        } else {
                 require_once("wp-config.php");
        }
        require_once('wp-admin/includes/file.php');
        require_once('wp-admin/includes/misc.php');
        $output = ob_get_contents();
        ob_end_clean();
        // Clear the Output buffer and Load the Wordpress Plugin API
        require_once('wp-admin/includes/plugin.php');
        // Sidekick Activation 
	$hostname = php_uname('n');
	$url = get_site_option( 'siteurl' );
	$url = preg_replace('#^https?://#','',$url);
	$user=get_current_user();

#	$database=DB_NAME;
#	$curl_handle = curl_init();
#	curl_setopt( $curl_handle, CURLOPT_URL, "http://scripts.hostgator.com/~sidekick/key.php?user=$user&server=$hostname&url=$url&database=$database" );
#	curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true ); // Fetch the contents too
#	$key = curl_exec( $curl_handle ); // Execute the request
#	curl_close( $curl_handle );
	# wp_option :: sk_activation_id
#	add_option('sk_activation_id',$key,'','yes');
#	add_option('sk_track_data','1','','yes');
	// Set array of plugins to remove and process them though the API
        $plugin_to_delete=array('mojo-marketplace/mojo-marketplace.php', 'mojo-marketplace-dedi/mojo-marketplace.php', 'mojo-marketplace-vps/mojo-marketplace.php');
        deactivate_plugins($plugin_to_delete,true);
        delete_plugins($plugin_to_delete);
        // Set array of plugins to activate
        $plugin='mojo-marketplace-hg/mojo-marketplace.php';
        activate_plugin($plugin,'mojo-marketplace-hg',false,true);
#	$plugin='sidekick/sidekick.php';
#	activate_plugin($plugin,'sidekick',false,true);
        wp_clean_plugins_cache();
} elseif ( preg_match( '/websitewelcome\.com/', $hostname) ) {
	//print "[ !! ] Shared System NOT Detected\n[ !! ] Process for Non-Brand.\n";
	// Start Session and Load Wordpress Core
	// Thank you John South for making this part easy by way of sak-cli
	ob_start();
	if (file_exists("wp-load.php")) {
		 require_once("wp-load.php");
	} else {
		 require_once("wp-config.php");
	}
	require_once('wp-admin/includes/file.php');
	require_once('wp-admin/includes/misc.php');
	$output = ob_get_contents();
	ob_end_clean();
	// Clear the Output buffer and Load the Wordpress Plugin API
	require_once('wp-admin/includes/plugin.php');
	// Set array of plugins to remove and process them though the API
	$plugin_to_delete=array('mojo-marketplace-hg/mojo-marketplace.php', 'mojo-marketplace-dedi/mojo-marketplace.php', 'mojo-marketplace-vps/mojo-marketplace.php', 'sidekick/sidekick.php', 'hgwalkme/walkme.php');
	deactivate_plugins($plugin_to_delete,true);
	delete_plugins($plugin_to_delete);
        // Set array of plugins to activate
        $plugin='mojo-marketplace/mojo-marketplace.php';
        activate_plugin($plugin,'mojo-marketplace',false,true);
	wp_clean_plugins_cache();
} elseif (file_exists('/proc/user_beancounters'))  {
        ob_start();
        if (file_exists("wp-load.php")) {
                 require_once("wp-load.php");
        } else {
                 require_once("wp-config.php");
        }
        require_once('wp-admin/includes/file.php');
        require_once('wp-admin/includes/misc.php');
        $output = ob_get_contents();
        ob_end_clean();
        // Clear the Output buffer and Load the Wordpress Plugin API
        require_once('wp-admin/includes/plugin.php');
        // Set array of plugins to remove and process them though the API
        $plugin_to_delete=array('mojo-marketplace-hg/mojo-marketplace.php', 'mojo-marketplace-dedi/mojo-marketplace.php', 'mojo-marketplace/mojo-marketplace.php', 'sidekick/sidekick.php', 'hgwalkme/walkme.php');
        deactivate_plugins($plugin_to_delete,true);
        delete_plugins($plugin_to_delete);
        // Set array of plugins to activate
        $plugin='mojo-marketplace-vps/mojo-marketplace.php';
        activate_plugin($plugin,'mojo-marketplace-vps',false,true);
        wp_clean_plugins_cache();
} else {
        ob_start();
        if (file_exists("wp-load.php")) {
                 require_once("wp-load.php");
        } else {
                 require_once("wp-config.php");
        }
        require_once('wp-admin/includes/file.php');
        require_once('wp-admin/includes/misc.php');
        $output = ob_get_contents();
        ob_end_clean();
        // Clear the Output buffer and Load the Wordpress Plugin API
        require_once('wp-admin/includes/plugin.php');
        // Set array of plugins to remove and process them though the API
        $plugin_to_delete=array('mojo-marketplace-hg/mojo-marketplace.php', 'mojo-marketplace/mojo-marketplace.php', 'mojo-marketplace-vps/mojo-marketplace.php', 'sidekick/sidekick.php', 'hgwalkme/walkme.php');
        deactivate_plugins($plugin_to_delete,true);
        delete_plugins($plugin_to_delete);
        // Set array of plugins to activate
        $plugin='mojo-marketplace-dedi/mojo-marketplace.php';
        activate_plugin($plugin,'mojo-marketplace-dedi',false,true);
        wp_clean_plugins_cache();
}

?>
