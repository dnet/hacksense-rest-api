<?=
	$rss->item(array(), array(
		'title' => 'H.A.C.K. has ' .
			($status['StateChange']['what'] ? 'opened' : 'closed'),
		'guid' => $status['StateChange']['id'],
		'pubDate' => $status['StateChange']['when'],
	));
?>
