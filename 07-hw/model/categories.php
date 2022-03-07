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

function addCategory(array $fields):int {
	$sql = "INSERT categories (name, url) VALUES (:cat_title, :cat_url)";
	dbQuery($sql, $fields);
	$db = dbInstance();

	return (int)$db->lastInsertId();
}

function removeCategory(int $categoryId):bool {
	$sql = "DELETE FROM categories WHERE id=$categoryId";
	$res = dbQuery($sql);

	if ($res->rowCount() === 0) {
		return false;
	}

	return true;
}

function updateCategory(array $fields, int $categoryId):bool {
	$sql = "UPDATE categories SET name=:cat_title, url=:cat_url
	        WHERE id=$categoryId";
	dbQuery($sql, $fields);

	return true;
}
