<?php
define("APP_PATH", "./"); 
header("Content-Type:text/html; charset=utf-8");   
require_once('vendor/Twig/Autoloader.php');
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem(APP_PATH . 'template');
$twig = new Twig_Environment($loader);