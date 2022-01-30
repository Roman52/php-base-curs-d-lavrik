<?php

$files = scandir('images');

/*
 * это мы вручную прошли по файлам директории

$images = [];
foreach($files as $f){
	if(is_file("images/$f") && preg_match('/.*\.jpg$/', $f)){
		$images[] = $f;
	}
}
*/

// а можно делать с пом встроеных php функций.
$images = array_filter($files, function($f){
    return is_file("images/$f") && preg_match('/.*\.jpg$/', $f);
});

echo '<pre>';
print_r($images);
echo '</pre>';
?>

<div class="gallery">
    <?php foreach ($images as $image) : ?>
        <img src="images/<?=$image?>" alt="" width="100">
    <?php endforeach; ?>
</div>
