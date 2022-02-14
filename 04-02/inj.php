<?php
$db = new PDO('mysql:host=localhost;dbname=php1simple', 'root', '');
$db->exec('SET NAMES UTF8');

$text = 'Hello 1'; // получили из $_POST
$id = (int)($_GET['id'] ?? '');

$sql = "UPDATE messages SET text='$text' WHERE id_message='$id'";
$db->exec($sql);
