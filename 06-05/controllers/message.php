<?php
include_once ('model/messages.php');
$id = (int) $_GET['id'] ?? '';

$message = getMessage($id);
$hasMsg = $message !== false;

if ($hasMsg) {
	$pageTitle = $message['name'];
	$pageContent = template('v_message', [
		'message' => $message,
	]);
} else {
	header('HTTP/1.1 404 Not Found');
	$pageContent = template('errors/v_404');
}

