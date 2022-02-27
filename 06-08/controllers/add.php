<?php
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

$pageTitle = 'Add message';
$pageH1 = 'Add message';
$pageContent = template('messages/v_add', [
	'fields' => $fields,
	'validateErrors' => $validateErrors,
]);
