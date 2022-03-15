<main>
	<ul class="cats-list">
		<?php foreach ($cats as $cat) : ?>
			<li>
				<a href="<?=BASE_URL?>cat/<?=$cat['id']?>"><?=$cat['name']?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</main>