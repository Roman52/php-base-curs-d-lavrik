<?php
$db = new PDO('mysql:host=localhost;dbname=php1simple', 'root', '');
$db->exec('SET NAMES UTF8');

$sql = "INSERT messages (name, text) VALUES (:name, :text)";
$query = $db->prepare($sql);

$params = [
    'name' => 'Admin',
    'text' => 'Delete all',
];

$query->execute($params);



/*
$name = 'Admin';
$text = 'Delete all!';

$query->bindParam(':name', $name);
$query->bindParam(':text', $text);
*/
