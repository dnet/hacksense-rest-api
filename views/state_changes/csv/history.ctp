ID;Timestamp;Status
<?
	foreach($history as $elem) {
		$sc = $elem['StateChange'];
		print("{$sc['id']};{$sc['when']};{$sc['what']}\n");
	}
?>
