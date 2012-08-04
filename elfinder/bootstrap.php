<?php

Autoloader::add_core_namespace('Elfinder');

Autoloader::add_classes(array(
	/**
	 * Elfinder classes.
	 */
	'Elfinder\\Elfinder'							=> __DIR__.'/classes/elFinder.php',
	'Elfinder\\ElFinderConnector'					=> __DIR__.'/classes/elFinderConnector.php',
	'Elfinder\\elFinderVolumeDriver'				=> __DIR__.'/classes/elFinderVolumeDriver.php',
	'Elfinder\\elFinderVolumeLocalFileSystem'		=> __DIR__.'/classes/elFinderVolumeLocalFileSystem.php',
	'Elfinder\\elFinderVolumeMySQL'					=> __DIR__.'/classes/elFinderVolumeMySQL.php',
	
));