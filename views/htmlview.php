<!DOCTYPE html>
<html>
<head>

	<title><?= $title ?></title>
	
	<!-- load global css files -->
	<link rel="stylesheet" href="vendor/typography.css" />
	<link rel="stylesheet" href="vendor/js-html5.css" />
	
	<!-- add google analytics code -->	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-6435088-13");
	pageTracker._trackPageview();
	} catch(err) {}</script>
	
	<!-- load jquery from google cdn -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	
	<!-- load demo js -->
	<script src="history.js"></script>

</head>
<body>
	<header>This is a demo of the javascript History plugin in action</header>
	
	<article>
		<nav>
			<li><a href="index.php" title="Hello World">Hello World</a></li>
			<li><a href="dummy.php" title="Dummy Page">Dummy Page</a></li>
			<li><a href="code.php" title="The Code">The Code</a></li>
	
		</nav>
		
		<section id="content">
			<h1><?= $title ?></h1>
	
			<?= $content ?>
		</section>
	</article>
	<hr/>
	
	<footer>
		<p>This demo works in the following browsers:</p>
		<ul>
			<li>Firefox 4+ </li>
			<li>Chrome latest </li>
			<li>Safari latest </li>
		</ul>
		
		<a href="http://www.w3.org/html/logo/">
<img src="http://www.w3.org/html/logo/badge/html5-badge-h-performance.png" width="133" height="64" alt="HTML5 Powered with Performance &amp; Integration" title="HTML5 Powered with Performance &amp; Integration">
</a>
		
		<p>This demo was written by <a href="http://twitter.com/sydlawrence">@sydlawrence</a> from <a href="http://www.marmaladeontoast.co.uk">Marmalade on Toast</a>, for <a href="http://js-html5.com">js-html5.com</a></p>
	</footer>
	

</body>
</html>
