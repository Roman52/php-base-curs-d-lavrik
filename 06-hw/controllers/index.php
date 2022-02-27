<?php
include_once('model/articles.php');
$articles = getArticles();

include ('views/v_index.php');
