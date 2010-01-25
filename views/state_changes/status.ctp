<?=
	'<p><a href="http://hspbp.org/">H.A.C.K.</a> is currently <span class="' .
	($status['StateChange']['what'] ? 'open">open' : 'closed">closed') .
	'</span> since ' . $status['StateChange']['when'] . '</p>'
?>
