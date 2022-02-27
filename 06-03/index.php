<?php
include_once ('core/system.php');

$html = template('/base/v_main', [
	'title' => 'test',
	'content' => 'content',
]);

