<?php

return (function(){
	$intGT0 = '[1-9]+\d*';

	return [
		// articles
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

		// categories
		[
			'test' => "/^cats-list\/?$/",
			'controller' => 'categories/cats_list',
		],
		[
			'test' => "/^cats\/($intGT0)\/?$/",
			'controller' => 'categories/cats_all_articles',
			'params' => ['id' => 1],
		],
		[
			'test' => '/^cats-add\/?$/',
			'controller' => 'categories/cats_add',
		],
		[
			'test' => "/^cats-delete\/($intGT0)\/?$/",
			'controller' => 'categories/cats_delete',
			'params' => ['id' => 1],
		],
		[
			'test' => "/^cats-edit\/($intGT0)\/?$/",
			'controller' => 'categories/cats_edit',
			'params' => ['id' => 1],
		],
		[
			'test' => "/^cat\/($intGT0)\/?$/",
			'controller' => 'categories/cats_one',
			'params' => ['id' => 1],
		],
	];
})();