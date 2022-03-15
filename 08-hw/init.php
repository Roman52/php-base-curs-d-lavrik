<?php
const HOST = 'http://localhost:8080';
const BASE_URL = '/php1/07-hw/';

const DB_HOST = 'localhost';
const DB_NAME = 'blog1';
const DB_USER = 'root';
const DB_PASS = '';

include_once ('core/db.php');
include_once ('core/validate.php');
include_once ('core/arr.php');
include_once ('core/system.php');
include_once('model/articles.php');
include_once('model/categories.php');
