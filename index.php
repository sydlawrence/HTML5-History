<?php
$title = "Hello World";
$content = "<p>Click on the links above. This is just a brief demo of the javascript History API, in action. Using jquery for the AJAX request.</p>
<p>Sed vel nisl. Vivamus pretium est non mauris. Fusce condimentum. Proin molestie. Vestibulum est. Morbi at metus. Nam nisl nulla, euismod at, vehicula nec, molestie vitae, enim. Donec euismod nulla a metus. Suspendisse venenatis metus dapibus dolor. Quisque euismod libero a est. Aliquam feugiat.</p>

<p>Nam elementum urna vel libero. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque quis sem nec tellus fermentum porttitor. Nulla facilisi. Nam hendrerit dolor sed leo. In tellus risus, feugiat eu, volutpat eu, pharetra eu, ante. Fusce auctor. Fusce sapien. Cras aliquam pretium quam.</p>

<p>Nullam egestas. Quisque cursus. Nam sem. Integer urna tortor, convallis eu, sagittis non, consectetuer ut, lorem. Praesent velit. Nam porttitor dui quis erat. Vestibulum ultricies, arcu nec blandit dignissim, quam velit convallis massa, vitae egestas sapien felis eu nulla. Mauris eget arcu convallis nunc mattis venenatis. Ut fermentum quam porttitor velit. Phasellus accumsan. Fusce ante. Integer ullamcorper. Nunc et lacus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam urna. Nunc posuere mattis velit. Nulla dolor lacus, pellentesque at, vehicula eget, tempus at, dui. Vivamus eleifend.</p>

";

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
	include('views/ajaxview.php');
else
	include('views/htmlview.php');
?>
