<?php
$id = (int) URL_PARAMS['id'];
$categoryRemoved = removeCategory($id);
$pageTitle = 'Delete category';

if ($categoryRemoved) {
	$pageContent = template('categories/v_cats_delete');
} else {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	$pageContent = template('errors/v_error');
}