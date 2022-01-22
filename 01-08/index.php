<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') :
	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);
	$dt = date('Y-d-m H:i:s');
	$mainBody = "$dt\n$phone\n$name";

	mail('test@test.com', 'Subject', $mainBody);
else :

endif;

echo $_SERVER['REQUEST_METHOD'];
echo '<pre>';
print_r($_POST);
echo '</pre>';
?>

<form method="post">
	Name:
	<input type="text" name="name">
	<br>
	Phone:
	<input type="text" name="phone">
	<br>
	<button>Send</button>
</form>
