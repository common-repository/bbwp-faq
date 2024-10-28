<?php
/*
Plugin Name: BBWP FAQ
Plugin URI: http://bbustamante.com
Description: Preguntas frecuentes (FAQ) mediante Custom Post de Wordpress
Version: 1.1
Date: March 21, 2014
Author: Be&ntilde;at Bustamante
Author URI: http://bbustamante.com/
License: GPL
*/

// CREATE DE FOLDER ARRAY

$bbwpfolder = array(
	"functions",
	"js",
	"languages",
	"style",
	"util"
	);

// OPEN FOLDERS

$countcarpetas = count($bbwpfolder);
for ($i=0;$i<$countcarpetas;$i++)
{
	$dir = plugin_dir_path( __FILE__ ) . '/' . $bbwpfolder[$i];

	if (is_dir($dir))
	{
		if ($dh = opendir($dir))
		{
			while (($file = readdir($dh)) !== false)
			{
				if (strpos($file, 'php') !== false)
				{
					// INCLUDE FILES
					include (plugin_dir_path( __FILE__ ) . '/' . $bbwpfolder[$i] . '/' . $file);
				}
			}
			closedir($dh);
		}
	}
}
?>