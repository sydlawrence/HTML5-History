<?php
$title = "The Code";
$content = "<p>You can download the code from <a href=''>github</a></p>";


if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
	include('ajaxview.php');
else
	include('htmlview.php');
?>


