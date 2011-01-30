<?php
$title = "Dummy Page";
$content = "<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam sit amet elit vitae arcu interdum ullamcorper. Nullam ultrices, nisi quis scelerisque convallis, augue neque tempor enim, et mattis justo nibh eu elit. Quisque ultrices gravida pede. Mauris accumsan vulputate tellus. Phasellus condimentum bibendum dolor. Mauris sed ipsum. Phasellus in diam. Nam sapien ligula, consectetuer id, hendrerit in, cursus sed, leo. Nam tincidunt rhoncus urna. Aliquam id massa ut nibh bibendum imperdiet. Curabitur neque mauris, porta vel, lacinia quis, placerat ultrices, orci.</p>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In lectus nisl, porttitor eget, fermentum et, viverra a, odio. Sed semper. Praesent vulputate nibh eget nisi. Sed ligula. Aenean vehicula posuere neque. Nam nibh lectus, laoreet non, convallis sed, vulputate consectetuer, enim. Pellentesque arcu. Vestibulum consequat nisi a ipsum vulputate vehicula. Aliquam lacus diam, ultricies vel, interdum eget, posuere non, tellus. Donec vel ligula. Sed felis.</p>";

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
	include('views/ajaxview.php');
else
	include('views/htmlview.php');
?>