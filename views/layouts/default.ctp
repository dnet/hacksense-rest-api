<?= $html->docType(); ?>
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head> 
		<title>HackSense</title> 
		<?= $html->charset() . $html->meta('rss', '/status.rss') ?>
		</head> 
	<body> 
		<?= $content_for_layout ?>
	</body>
</html>
