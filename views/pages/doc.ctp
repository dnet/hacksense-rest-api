<h1>Hacksense public REST API</h1>
<h2>/status</h2>
<p>Shows the current status of H.A.C.K. and the timestamp of the last change in
<?= $html->link('HTML', array('controller' => 'state_changes', 'action' => 'status')) ?>,
<?= $html->link('XML', array('controller' => 'state_changes', 'action' => 'status', 'ext' => 'xml')) ?>,
<?= $html->link('TXT', array('controller' => 'state_changes', 'action' => 'status', 'ext' => 'txt')) ?>,
<?= $html->link('CSV', array('controller' => 'state_changes', 'action' => 'status', 'ext' => 'xml')) ?>, and
<?= $html->link('RSS', array('controller' => 'state_changes', 'action' => 'status', 'ext' => 'xml')) ?>

formats.</p>
<h2>/history</h2>
<p>Shows the history of H.A.C.K. in
<?= $html->link('HTML', array('controller' => 'state_changes', 'action' => 'status')) ?>,
<?= $html->link('XML', array('controller' => 'state_changes', 'action' => 'status', 'ext' => 'xml')) ?>, and
<?= $html->link('CSV', array('controller' => 'state_changes', 'action' => 'status', 'ext' => 'xml')) ?>

formats.</p>
<p>Powered by <a href="http://cakephp.org/">CakePHP</a>, <a href="http://validator.w3.org/check?uri=referer">Valid XHTML</a>, <a href="http://validator.w3.org/feed/check.cgi?url=http%3A//vsza.hu/hacksense/status.rss">Valid RSS</a>, source code is available at <a href="http://github.com/">GitHub</a></p>
