<?php require('views/partials/header.php'); ?>

	<h1>Register User</h1>
	<form method="POST" action="/users">
		<input type="text" name="name" placeholder="Your Name">
		<input type="email" name="email" placeholder="Your Email">
		<button type="submit" name="submit">Submit</button>
	</form>

<?php require('views/partials/footer.php'); ?>