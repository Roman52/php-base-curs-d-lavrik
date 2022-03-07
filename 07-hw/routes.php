<?php

return (function(){
	$intGT0 = '[1-9]+\d*';

	return [
		[
			'test' => '/^$/',
			'controller' => 'articles/all',
		],
		[
			'test' => '/^add\/?$/',
			'controller' => 'articles/add',
		],
		[
			'test' => "/^delete\/($intGT0)\/?$/",
			'controller' => 'articles/delete',
			'params' => ['id' => 1],
		],
		[
			'test' => "/^edit\/($intGT0)\/?$/",
			'controller' => 'articles/edit',
			'params' => ['id' => 1],
		],
		[
			'test' => "/^article\/($intGT0)\/?$/",
			'controller' => 'articles/one',
			'params' => ['id' => 1],
		],
		[
			'test' => "/^categories\/($intGT0)\/?$/",
			'controller' => 'categories/all',
			'params' => ['id' => 1],
		],
	];
})();