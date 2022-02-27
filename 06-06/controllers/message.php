<?php
include_once ('model/messages.php');
$id = (int) $_GET['id'] ?? '';

$message = getMessage($id);
$hasMsg = $message !== false;

if ($hasMsg) {
	$content = template('messages/v_message', [
		'message' => $message,
	]);

	$left = template('messages/v_message_menu');

	$pageTitle = $message['name'];
	$pageContent = template('base/v_con2col', [
		'left' => $left,
		'content' => $content,
		'title' => 'One Message',
	]);
} else {
	header('HTTP/1.1 404 Not Found');
	$pageContent = template('errors/v_404');
}

