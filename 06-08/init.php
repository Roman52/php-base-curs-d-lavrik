<?php
const BASE_URL = '/06-08/';

const DB_HOST = 'localhost';
const DB_NAME = 'php1simple';
const DB_USER = 'root';
const DB_PASS = '';

include_once ('core/arr.php');
include_once ('core/db.php');
include_once ('core/system.php');
include_once ('model/messages.php');

spl_autoload_register(function ($classname) {
	include_once (str_replace('\\', '/', $classname) . '.php');
});