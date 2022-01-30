<?php
function addLogs(string $ip, $currentUrl, $refUrl = null): bool {
	$currentDate = date('Y-m-d');
	$currentTime = date('H:i:s');
	$info = "$currentTime|$ip|$currentUrl|$refUrl" . PHP_EOL;
	file_put_contents("logs/$currentDate", $info, FILE_APPEND);

	return true;
}

function getLogs(): array {
	$currentDate = date('Y-m-d');
	$lines = file("logs/$currentDate");
	$logsList= [];
	foreach ($lines as $line) {
		$logsList[] = logsStrToArr($line);
	}

	return $logsList;
}

function logsStrToArr (string $str): array {
	$str = rtrim($str);
	$parts = explode('|', $str);
	return ['time' => $parts[0], 'ip' => $parts[1], 'url' => $parts[2], 'ref-url' => $parts[3]];
}


