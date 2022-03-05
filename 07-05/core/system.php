<?php
function template(string $path, array $vars = []):string {
	$systemTemplateRendererInfofullPath = "views/$path.php";
	extract($vars);
	ob_start();
	include ($systemTemplateRendererInfofullPath);

	return ob_get_clean();
}

function parseUrl(string $url, array $routes):array {
	$res = [
		'controller' => 'errors/e404',
		'params' => [],
	];

	foreach ($routes as $route) {
		if (preg_match($route['test'], $url)) {
			$res['controller'] = $route['controller'];
			break;
		}
	}

	return $res;
}