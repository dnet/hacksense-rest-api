<?= $html->docType(); ?>
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head> 
		<title>HackSense</title> 
		<?= $html->charset() . $html->meta('rss', '/status.rss') . $html->css('hacksense') ?>
		<script type="text/javascript">
		/* <![CDATA[ */
			(function() {
				var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
				s.type = 'text/javascript';
				s.async = true;
				s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
				t.parentNode.insertBefore(s, t);
			})();
		/* ]]> */</script>
	</head>
	<body> 
		<?= $content_for_layout ?>
	</body>
</html>
