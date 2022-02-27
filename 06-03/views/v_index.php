<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<header>
		<div class="logo">
			<div class="logo__title">Logo</div>
			<div class="logo__subtitle">About the website</div>
		</div>
	</header>
	<main>
		<h1>Chat</h1>
		<a href="index.php?c=add">Add</a>
		<a href="index.php?view=table"> | View as Table</a>
		<hr>
		<br>
		<div>
			<?php foreach($messages as $message): ?>
				<div>
					<strong><?=$message['name']?></strong>
					<em><?=$message['dt_add']?></em>
					<div><?=$message['text']?></div>
					<a href="index.php?c=message&id=<?=$message['id_message'];?>">Read More</a>
					<hr>
				</div>
			<?php endforeach; ?>
		</div>
	</main>
	<footer>
		&copy; WebisteName
	</footer>
</body>
</html>
