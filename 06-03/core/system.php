<?php
function CheckControllerName(string $name):bool {
	return !!preg_match('/^[aA-zZ0-9_-]/');
}

function template(string $path, array $vars = []):string {
	$systemTemplateRendererInfofullPath = "views/$path.php";
	extract($vars);
	include ($systemTemplateRendererInfofullPath);

	return '';
}