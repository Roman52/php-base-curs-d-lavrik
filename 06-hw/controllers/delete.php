<?php
include_once('model/articles.php');
$id = (int)($_GET['id'] ?? '');

$postRemoved = removeArticle($id);

if ($postRemoved) {
	include ('views/v_delete.php');
} else {
	include ('views/errors/v_error.php');
}

