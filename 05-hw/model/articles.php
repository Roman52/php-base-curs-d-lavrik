<?php
include_once ('core/db.php');

function getArticles():array {
	$sql = "SELECT * FROM articles ORDER BY dt_add DESC";
	$query = dbQuery($sql);

	return $query->fetchAll();
}

function getArticle(int $article_id):?array {
	$sql = "SELECT * FROM articles 
	        JOIN categories ON articles.category_id = categories.id 
	        WHERE article_id=$article_id";
	$query = dbQuery($sql);
	$post = $query->fetch();

	return $post === false ? null : $post ;
}

function addArticle(array $fields):int {
	$sql = "INSERT articles (title, content, category_id) VALUES (:title, :content, :categoryId)";
	dbQuery($sql, $fields);
	//получить id последней добавленной статьи
	$db = dbInstance();

	return (int)$db->lastInsertId();
}

function removeArticle(int $article_id):bool {
	$sql = "DELETE FROM articles WHERE article_id=$article_id";
	$res = dbQuery($sql);

	if ($res->rowCount() === 0) {
		return false;
	}

	return true;
}

function updateArticle(array $fields, int $articleId):bool {
	$sql = "UPDATE articles SET title=:title, content=:content, category_id=:categoryId
	        WHERE article_id=$articleId";
	dbQuery($sql, $fields);

	return true;
}


function validateFields(array &$fields):array {
	$errors = [];
	$titleLen = mb_strlen($fields['title'], 'UTF-8');
	$contentLen = mb_strlen($fields['content'], 'UTF-8');

	if ($titleLen < 2) {
		$errors[] = 'Имя не короче 2 символов';
	}

	if ($contentLen < 10 || $contentLen > 140) {
		$errors[] = 'Текст от 10 до 140 символов';
	}

	$fields['title'] = htmlspecialchars($fields['title']);
	$fields['content'] = htmlspecialchars($fields['content']);
	$fields['categoryId'] = (int) $fields['categoryId'];

	return $errors;
}
