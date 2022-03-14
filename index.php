<?php
ini_set('display_errors', 1);

session_start();

define('ROOT', dirname(__FILE__, 1));
//include_once(ROOT . '/components/functions.php');
include_once(ROOT . '/components/Autoload.php');

$functions = new Functions;
$functions->run();
