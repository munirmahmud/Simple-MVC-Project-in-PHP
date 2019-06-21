<?php require('app/views/partials/header.php'); ?>

	<h1>Register User</h1>
	<form method="POST" action="/insert-user">
		<input type="text" name="first_name" placeholder="First Name">
		<input type="text" name="last_name" placeholder="Last Name">
		<input type="email" name="email" placeholder="Your Email">
		<button type="submit" name="submit">Submit</button>
	</form>

<?php require('app/views/partials/footer.php'); ?>