<?php

// соединение с бд
$db = new PDO('mysql:host=localhost;dbname=php1simple', 'root', '');
$db->exec('SET NAMES UTF8');
$sql = "INSERT messages (name, text) VALUES ('user', 'привет!')";
$db->exec($sql);
