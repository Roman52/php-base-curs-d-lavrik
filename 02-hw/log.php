<?php
include_once ('model/logs.php');
$date = $_GET['date'] ?? '';
$logs = getLogs($date);
?>

<?php if ($logs) : ?>
	<table>
		<tr>
			<td>Time</td>
			<td>IP</td>
			<td>Url</td>
			<td>Ref Url</td>
		</tr>
		<?php foreach($logs as $log): ?>
			<tr>
				<td><?=$log['time']?></td>
				<td><?=$log['ip']?></td>
				<td>
					<?php $log['url'] = checkUrl($log['url']); ?>
					<?=$log['url']?>
				</td>
				<?php $log['ref-url'] = checkUrl($log['ref-url']); ?>
				<td><?=$log['ref-url']?></td>
			</tr>
		<?php endforeach; ?>
	</table>
<?php endif; ?>

<style>
	td {
		border: 1px solid #000;
		padding: .5rem 1rem;
	}
</style>

<hr>
<a href="/logs.php">All Logs</a>
<a href="/index.php">Main page</a>
