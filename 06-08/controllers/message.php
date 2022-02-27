<?php
$id = (int) $_GET['id'] ?? '';

$message = getMessage($id);
$hasMsg = $message !== false;

if ($hasMsg) {
	$pageTitle = $message['name'];
	$pageH1 = 'One message';

	$pageLeft = template('messages/v_message_menu');
	$pageContent = template('messages/v_message', [
		'message' => $message,
	]);

	$pageTemplate = 'v_main2c';
} else {
	header('HTTP/1.1 404 Not Found');
	$pageContent = template('errors/v_404');
}

