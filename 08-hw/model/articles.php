<?php
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
	$sql = "INSERT articles (title, content, category_id, user_id) VALUES (:title, :content, :categoryId, :userId)";
	dbQuery($sql, $fields);
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

function getCategoryArticles($catId):array {
	$sql = "SELECT * FROM articles WHERE category_id=$catId ORDER BY dt_add DESC";
	$query = dbQuery($sql);

	return $query->fetchAll();
}
