<?php
include_once ('model/db.php');

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
	// первый способ - проверить есть ли статья сделав доп запрос к базе.
	/*
	if (getArticle($article_id)) {
		$sql = "DELETE FROM articles WHERE article_id=$article_id";
		dbQuery($sql);

		return true;
	}

	return false;
	*/

	// второй способ - не делать доп запрос к базе, использовать PDO
	$sql = "DELETE FROM articles WHERE article_id=$article_id";
	$res = dbQuery($sql);

	if ($res->rowCount() === 0) {
		return false; // не удалилась статья
	}

	return true;
}

function updateArticle(array $fields, int $articleId):bool {
	$sql = "UPDATE articles SET title=:title, content=:content, category_id=:categoryId 
	        WHERE article_id=$articleId";
	dbQuery($sql, $fields);

	return true;
}
