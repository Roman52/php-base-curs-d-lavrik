<?php
$messages = getMessages();

$isTable = ($_GET['view'] ?? '') === 'table';
$template = $isTable ? 'messages/v_index_table' : 'messages/v_index';

$pageTitle = 'All messages';
$pageContent = template($template, [
	'messages' => $messages,
]);
