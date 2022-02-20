<?php
include_once ('core/db.php');

function getMessages():array {
    $sql = "SELECT * FROM messages ORDER BY dt_add DESC";
    $query = dbQuery($sql);

    return $query->fetchAll();
}

function addMessage(array $fields):bool {
    $sql = "INSERT messages (name, text) VALUES (:name, :text)";
    dbQuery($sql, $fields);

    return true;
}

function messagesValidate(array $fields):array {
	$errors = [];
	$nameLen = mb_strlen($fields['text'], 'UTF-8');
	$textLen = mb_strlen($fields['text'], 'UTF-8');

	if ($nameLen < 2) {
		$errors[] = 'Имя не короче 2 символов';
	}

	if ($textLen < 10 || $textLen > 140) {
		$errors[] = 'Текст от 10 до 140 символов';
	}

	return $errors;
}