<?php
 // Include de .po & .mo files
add_action('plugins_loaded', function(){
	$domain = 'bbwp-faq-languaje';
	$abs_rel_path = false;
	$plugin_rel_path = dirname(plugin_basename(__FILE__));
	
	load_plugin_textdomain($domain, $abs_rel_path, $plugin_rel_path);
});
?>