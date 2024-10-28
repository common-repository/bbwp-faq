<?php
/**
 * Proper way to enqueue scripts and styles
 * from: http://codex.wordpress.org/Function_Reference/wp_enqueue_style
 */
add_action( 'wp_enqueue_scripts', function(){
	$dir = plugin_dir_path( __FILE__ );

	if (is_dir($dir))
	{
		if ($dh = opendir($dir))
		{
			while (($file = readdir($dh)) !== false)
			{
				if (strpos($file, 'js') !== false)
				{
					$styleName = 'bbwp-'.str_replace('.', '-', $file);
					wp_enqueue_script( $styleName, plugins_url($file, __FILE__), array(), '1.0.0', true );
				}
			}
			closedir($dh);
		}
	}
});
?>