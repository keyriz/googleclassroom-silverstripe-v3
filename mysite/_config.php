<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLDatabase',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'dbbt_silverstripe_v3',
	'path' => ''
);

// Set the site locale
i18n::set_locale('en_US');
