<?php
include_once ('model/db.php');

function getArticles():array {
	$sql = "SELECT * FROM articles ORDER BY dt_add DESC";
	$query = dbQuery($sql);

	return $query->fetchAll();
}

function getArticle(int $article_id):array {
	$sql = "SELECT * FROM articles 
	        JOIN categories ON articles.category_id = categories.id 
	        WHERE article_id=$article_id";
	$query = dbQuery($sql);
	$post = $query->fetchAll();
	// по идее тут лучше заюзать ->fetch, но он возвращает array если есть статья или bool если нет. А у нас функция возвращать должна что то одно

	if (empty($post)) {
		return [];
	} else {
		return $post[0];
	}
}

function addArticle(array $fields):bool {
	$sql = "INSERT articles (title, content, category_id) VALUES (:title, :content, :categoryId)";
	dbQuery($sql, $fields);

	return true;
}

function removeArticle(int $article_id):bool {
	if (getArticle($article_id)) {
		$sql = "DELETE FROM articles WHERE article_id=$article_id";
		dbQuery($sql);

		return true;
	}

	return false;
}

function updateArticle(array $fields, int $articleId):bool {
	$sql = "UPDATE articles SET title=:title, content=:content, category_id=:categoryId 
	        WHERE article_id=$articleId";
	dbQuery($sql, $fields);

	return true;
}
