<?php
$title = "Hello World";
$content = "<p>This is the content</p>";



if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
	include('htmlview.php');
else
	include('ajaxview.php');
?>


