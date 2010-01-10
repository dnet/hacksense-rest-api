<?
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'doc'));
	Router::connect('/status', array('controller' => 'state_changes', 'action' => 'status'));
	Router::connect('/eeml_status', array('controller' => 'state_changes', 'action' => 'eeml_status'));
	Router::connect('/history', array('controller' => 'state_changes', 'action' => 'history'));
	Router::connect('/submit/*', array('controller' => 'state_changes', 'action' => 'submit'));
	Router::parseExtensions();
?>
