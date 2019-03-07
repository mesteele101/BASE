<?php
	$current_php_version = phpversion();
	$version = explode(".", $current_php_version);
	/* account for x.x.xXX subversions possibly having text like 4.0.4pl1 */
	if ( is_numeric(substr($version[2], 1, 1)) ) 
		$version[2] = substr($version[2], 0, 2);
	else
		$version[2] = substr($version[2], 0, 1);
	print "$version[0].$version[1].$version[2]\n";
?>