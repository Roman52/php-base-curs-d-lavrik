<?php
function getCategory($catId):?array {
	$sql = "SELECT * FROM categories WHERE id=$catId";
	$query = dbQuery($sql);
	$category = $query->fetch();

	return $category === false ? null : $category;
}

function getCategories():array {
	$sql = "SELECT * FROM categories";
	$query = dbQuery($sql);

	return $query->fetchAll();
}

function getCategoryArticles($catId):array {
	$sql = "SELECT * FROM articles WHERE category_id=$catId ORDER BY dt_add DESC";
	$query = dbQuery($sql);

	return $query->fetchAll();
}
