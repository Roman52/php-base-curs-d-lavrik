<?php
function template(string $path, array $vars = []):string {
	$systemTemplateRendererInfofullPath = "views/$path.php";
	extract($vars);
	ob_start();
	include ($systemTemplateRendererInfofullPath);

	return ob_get_clean();
}
