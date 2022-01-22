<div class="form">
	<form class="appForm" method="post">
		Name:<br>
		<input type="text" name="name"><br>
		Phone:<br>
		<input type="text" name="phone"><br>
		<button>Send</button>
		<p class="err"></p>
	</form>
</div>
<script>
	let form = document.querySelector('.appForm');
	let errorBox = document.querySelector('.err');

	form.addEventListener('submit', function (e) {
		e.preventDefault();

		let formData = new FormData(form);

		fetch('01-09/send.php', {
			method: 'POST',
			body: formData
		})
		.then(response => response.json())
		.then(data => {
			if (data.res) {
				form.innerHTML = 'Your app is done!';
			} else {
				errorBox.innerHTML = data.error;
			}
		});
	});
</script>