<?php
declare(strict_types=1);

function addLogs(): bool {
	$currentDate = date('Y-m-d');
	$currentTime = date('H:i:s');

	$info = [
		'time' => $currentTime,
		'ip' => $_SERVER['REMOTE_ADDR'],
		'url' => $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
		'ref-url' => $_SERVER['HTTP_REFERER'],
	];

	file_put_contents("logs/$currentDate", json_encode($info) . PHP_EOL, FILE_APPEND);

	return true;
}

function getLogs($date): array {
	$logsList= [];

	$lines = file("logs/$date");
	foreach ($lines as $line) {
		$logsList[] = json_decode(rtrim($line), true);
	}

	return $logsList;
}

function hasLog(string $date): bool {
	return (bool) isValidDate($date) && file_exists("logs/$date");
}

function isValidDate(string $date): bool {
	return (bool) preg_match('/^\d{4}-\d{2}-\d{2}$/', $date);
}

function isValidUrl(string $url): bool {
	return (bool) preg_match('/^[aA-zZ0-9_\-?=\/&\.\:]*$/', $url);
}
