<?php
session_start();
//looks for the phpSESSINID cookie
//creates it if there are none
require "autoload.php";

$path = getcwd();
$path = preg_replace('/^.+\\\\htdocs\\\\/', '/', $path);
$path = str_replace('\\', '/', $path);
define("BASE", $path);

?>