<?
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'doc'));
	Router::connect('/status', array('controller' => 'state_changes', 'action' => 'status'));
	Router::connect('/history', array('controller' => 'state_changes', 'action' => 'history'));
	Router::parseExtensions();
?>
