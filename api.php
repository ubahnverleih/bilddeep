<?php

$externURL = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/";  //$externURL = "http://localhost:8888/tests/imageproxy/"; 
$password = "CHANGEME"; //enter password for api here


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


/**
Copyright (c) 2012 ubahnverleih
Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

**/

?>