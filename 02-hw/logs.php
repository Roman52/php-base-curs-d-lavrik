<?php
include_once ('model/logs.php');
$files = scandir('logs');
$logsFiles = array_filter($files, function($f){
	return isValidDate($f);
});
?>

<ul class="logs-list">
	<?php foreach ($logsFiles as $file) : ?>
		<li class="log-file"><a href="/log.php?date=<?=$file?>"><?=$file?></a></li>
	<?php endforeach; ?>
</ul>

<hr>
<a href="/index.php">Main page</a>