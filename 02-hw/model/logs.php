<?php
declare(strict_types=1);

function addLogs(string $ip, $currentUrl, $refUrl): bool {
	$currentDate = date('Y-m-d');
	$currentTime = date('H:i:s');
	$info = "$currentTime|$ip|$currentUrl|$refUrl" . PHP_EOL;
	file_put_contents("logs/$currentDate", $info, FILE_APPEND);

	return true;
}

function getLogs($date): array {
	$logsList= [];
	if (!empty($date) && file_exists("logs/$date")) {
		$lines = file("logs/$date");
		foreach ($lines as $line) {
			$logsList[] = logsStrToArr($line);
		}
	}
	
	return $logsList;
}

function logsStrToArr (string $str): array {
	$str = rtrim($str);
	$parts = explode('|', $str);
	return ['time' => $parts[0], 'ip' => $parts[1], 'url' => $parts[2], 'ref-url' => $parts[3]];
}

function checkUrl(string $url): string {
	if (preg_match("/'|AND|OR/", $url)) {
		$url = '<span style="color:red">' . $url . '</span>';
	}

	return $url;
}
