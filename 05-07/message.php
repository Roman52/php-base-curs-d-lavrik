<?php
include_once ('model/messages.php');
$id = (int) $_GET['id'] ?? '';

$message = getMessage($id);
$hasMsg = $message !== false;

if ($hasMsg) {
	include ('views/v_message.php');
} else {
	header('HTTP/1.1 404 Not Found');
	include ('views/errors/v_404.php');
}

