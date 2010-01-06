<?=
	'H.A.C.K. is currently ' .
	($status['StateChange']['what'] ? 'open' : 'closed') .
	' since ' . $status['StateChange']['when']
?>
