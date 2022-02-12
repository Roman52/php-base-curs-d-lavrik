<?php
include_once ('model/logs.php');
$date = $_GET['date'] ?? '';

if (!hasLog($date)) {
	exit('Не корректная дата');
}
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
			<tr <?php if (!isValidUrl($log['url'])) echo 'style="color:red;"'; ?>>
				<td><?=$log['time']?></td>
				<td><?=$log['ip']?></td>
				<td><?=$log['url']?></td>
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
