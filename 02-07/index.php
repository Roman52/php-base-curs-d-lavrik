<?php
declare(strict_types=1);
include_once ('model/gallery.php');

$files = scandir('images');
$images = array_filter($files, function($f){
    return is_file("images/$f") && checkImageName($f);
});
?>

<div class="gallery">
    <?php foreach ($images as $image) : ?>
        <img src="images/<?=$image?>" alt="" width="100">
    <?php endforeach; ?>
</div>
