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
$errInfo = $query->errorInfo();

if ($errInfo[0] !== PDO::ERR_NONE) {
    echo $errInfo[2];
    exit();
}

echo 'All done!';
