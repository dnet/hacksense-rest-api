<table>
	<?= $html->tableHeaders(array('ID', 'Timestamp', 'Status')) ?>
	<? foreach($history as $elem): ?>
	<tr>
		<td><?= $elem['StateChange']['id'] ?></td>
		<td><?= $elem['StateChange']['when'] ?></td>
		<td>
			<b style="color: #<?= $elem['StateChange']['what'] ? '090">Open' : 'f00">Closed' ?>
			</b>
		</td>
	</tr>
	<? endforeach; ?>
</table>
