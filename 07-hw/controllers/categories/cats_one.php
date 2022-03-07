<?php
$id = (int) URL_PARAMS['id'];
$catInfo = getCategory($id);
$hasCat = $catInfo !== null;
$pageTitle = $post['name'] ?? 'Error';

if ($hasCat) {
	$pageContent = template('categories/v_cats_one', [
		'id' => $id,
		'cat' => $catInfo,
	]);
} else {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	$pageContent = template('errors/v_404');
}