<?php
$title = "The Code";
$content = "<p>You can download the code from <a href='https://github.com/sydlawrence/HTML5-History'>github</a></p>";


if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
	include('views/ajaxview.php');
else
	include('views/htmlview.php');
?>


