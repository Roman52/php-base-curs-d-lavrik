<?php
include_once ('model/logs.php');
$logs = getLogs();

echo '<pre>';
print_r($logs);
echo '</pre>';

echo memory_get_usage();

