<h1>HackSense public REST API</h1>
<h2>/status</h2>
<p>Shows the current status of H.A.C.K. and the timestamp of the last change in
<?= $html->link('HTML', array('controller' => 'state_changes', 'action' => 'status')) ?>,
<?= $html->link('XML', array('controller' => 'state_changes', 'action' => 'status', 'ext' => 'xml')) ?>,
<?= $html->link('TXT', array('controller' => 'state_changes', 'action' => 'status', 'ext' => 'txt')) ?>,
<?= $html->link('CSV', array('controller' => 'state_changes', 'action' => 'status', 'ext' => 'csv')) ?>, and
<?= $html->link('RSS', array('controller' => 'state_changes', 'action' => 'status', 'ext' => 'rss')) ?>

formats.</p>
<h2>/history</h2>
<p>Shows the history of H.A.C.K. in
<?= $html->link('HTML', array('controller' => 'state_changes', 'action' => 'history')) ?>,
<?= $html->link('XML', array('controller' => 'state_changes', 'action' => 'history', 'ext' => 'xml')) ?>, and
<?= $html->link('CSV', array('controller' => 'state_changes', 'action' => 'history', 'ext' => 'csv')) ?>

formats.</p>
<p>Powered by <a href="http://cakephp.org/">CakePHP</a>, <a href="http://validator.w3.org/check?uri=referer">Valid XHTML</a>, <a href="http://validator.w3.org/feed/check.cgi?url=http%3A//vsza.hu/hacksense/status.rss">Valid RSS</a>, source code is available at <a href="http://github.com/dnet/hacksense-rest-api">GitHub</a></p>
<p>
<script type="text/javascript">
	var flattr_url = 'http://hspbp.org/hacksense';
</script>
<script src="http://api.flattr.com/button/load.js" type="text/javascript"></script>
<noscript>
<a href="http://flattr.com/thing/18357/HackSense" target="_blank">
<img src="http://api.flattr.com/button/button-static-50x60.png" title="Flattr this" border="0" /></a>
</noscript>
</p>
