<?php
include_once ('model/messages.php');
include_once ('core/arr.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fields = extractFields($_POST, ['name', 'text']);
	$validateErrors = messagesValidate($fields);
	if (empty($validateErrors)) {
		addMessage($fields);
		header('Location: index.php');
		exit();
	}
} else {
    $fields = ['name' => '', 'text' => ''];
    $validateErrors = [];
}

include ('views/v_add.php');