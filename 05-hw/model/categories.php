<?php
include_once ('model/categories.php');

function getCategories():array {
	$sql = "SELECT * FROM categories";
	$query = dbQuery($sql);

	return $query->fetchAll();
}
