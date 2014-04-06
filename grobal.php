<?php
$options = array(
		'cacheDir' => './cache/',
		'writeControl' => 'true',
		'readControl' => 'true',
		'fileNameProtection' => false,
		'readControlType' => 'md5'
);
$cache = new Cache_Lite_Output($options);