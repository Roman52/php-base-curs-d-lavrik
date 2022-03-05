<?php
$left = template('contacts/v_menu');
$content = template('contacts/v_main');

$pageTitle = 'Contacts';
$pageContent = template('base/v_con2col', [
	'left' => $left,
	'content' => 'Content Contacts',
	'title' => 'Contacts',
]);