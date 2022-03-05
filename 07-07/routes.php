<?php

return (function(){
	$intGT0 = '[1-9]+\d*';
	$normUrl = '[0-9aA-zZ_-]+';

	return [
		[
			'test' => '/^$/',
			'controller' => 'messages/all'
		],
		[
			'test' => '/^add\/?$/',
			'controller' => 'messages/add'
		],
		[
			'test' => '/^contacts\/?$/',
			'controller' => 'contacts'
		],
		[
			'test' => "/^message\/($intGT0)\/?$/",
			'controller' => 'messages/one',
			'params' => ['id' => 1]
		],
		[
			'test' => "/^catalog\/($normUrl)\/($normUrl)\/?$/",
			'controller' => 'catalog/product',
			'params' => ['cid' => 1, 'pid' => 2]
		]
	];
})();