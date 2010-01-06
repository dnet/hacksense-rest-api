<?=
	'<p><a href="http://hspbp.org/">H.A.C.K.</a> is currently <b style="color: #' .
	($status['StateChange']['what'] ? '0a0">open' : 'f00">closed') .
	'</b> since ' . $status['StateChange']['when'] . '</p>'
?>
