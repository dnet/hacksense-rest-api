<table>
	<?= $html->tableHeaders(array('ID', 'Timestamp', 'Status')) ?>
	<? foreach($history as $elem): ?>
	<tr>
		<td class="uuid"><?= $elem['StateChange']['id'] ?></td>
		<td><?= $elem['StateChange']['when'] ?></td>
		<td class="<?= $elem['StateChange']['what'] ? 'open' : 'closed' ?>">
			<?= $elem['StateChange']['what'] ? 'Open' : 'Closed' ?>
		</td>
	</tr>
	<? endforeach; ?>
</table>
