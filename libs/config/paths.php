<?php
session_start();
define('URL', 'http://'.$_SERVER['HTTP_HOST']);
define('URL_IMAGE', 'http://quantriankhanh:81/public/images');
$dirtionary = realpath($_SERVER['DOCUMENT_ROOT']); 
$dirtionary = str_replace("webankhanh", "quantriankhanh", $dirtionary);
define('DIR_IMAGE', $dirtionary.'/public/images');
?>
