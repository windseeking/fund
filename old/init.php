<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require_once('functions/functions.php');
require_once('system/config.php');
require_once('vendor/autoload.php');
require_once('classes/language.php');

session_start();

$language = get_language();
$lang = new Language($language);

require_once('system/data.php');

$con = get_connection($database_config);

