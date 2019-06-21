<?php require('app/views/partials/header.php'); ?>

	<h1>All User Lists</h1>

	<table border="1" width="600">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Registration Date</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $user): ?>
				<?php $regDate = new DateTime($user->created); ?>
			<tr>
				<td><?= $user->id;?></td>
				<td><?= $user->first_name . ' ' . $user->last_name;?></td>
				<td><?= $user->email;?></td>
				<td><?= $regDate->format('d M Y');?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>		

<?php require('app/views/partials/footer.php'); ?>