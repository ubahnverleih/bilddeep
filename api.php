<?php

$externURL = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/";  //$externURL = "http://localhost:8888/tests/imageproxy/"; 
$password = "hypermagic"; //enter password for api here


$url = $_GET['url'];
$p = $_GET['p'];

if ($password == $p){

	$fileextension = explode(".", basename($url));
	$fileextension = end($fileextension);
	$internurl = md5($url).".".$fileextension;
	$filename = $internurl;
	$data = file_get_contents($url);
	file_put_contents('./img/'.$filename, $data);
	
	echo($externURL."img/".$internurl);
} else {
	die ("access denied");
}

?>