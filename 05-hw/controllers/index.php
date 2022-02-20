<?php
include_once('model/messages.php');
$messages = getMessages();

$isTable = ($_GET['view'] ?? '') === 'table';
$template = $isTable ? 'v_index_table' : 'v_index';

include("views/$template.php");

