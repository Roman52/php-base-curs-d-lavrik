<?php
declare(strict_types=1);

function editArticle(int $id, string $title, string $content): bool {
    $articles = getArticles();

    if (isset($articles[$id])) {
	    $articles[$id] = [
		    'id' => $id,
		    'title' => $title,
		    'content' => $content
	    ];
	    saveArticles($articles);

	    return true;
    }

    return false;
}

function articleExists(int $id): bool {
    $articles = getArticles();
    if (isset($articles[$id])) {
	    return true;
    }

    return false;
}

function getArticles(): array {
    return json_decode(file_get_contents('db/articles.json'), true);
}

function addArticle(string $title, string $content): bool {
    $articles = getArticles();

    $lastId = end($articles)['id'] ?? 0;
    $id = $lastId + 1;

    $articles[$id] = [
        'id' => $id,
        'title' => $title,
        'content' => $content
    ];

    saveArticles($articles);

    return true;
}

function removeArticle(int $id): bool {
    $articles = getArticles();

    if (isset($articles[$id])) {
	    unset($articles[$id]);
	    saveArticles($articles);

	    return true;
    }

    return false;
}

function saveArticles(array $articles): bool {
    file_put_contents('db/articles.json', json_encode($articles));

    return true;
}
