<?php
session_start();
$con=mysqli_connect("localhost","root","","hec");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/HEC/');
define('SITE_PATH','http://localhost/HEC/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/image/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/image/');
?>