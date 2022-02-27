<?php
$cname = $_GET['c'] ?? 'index';
$path = "controllers/$cname.php";

include_once ($path);
