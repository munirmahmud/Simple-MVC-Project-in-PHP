<?php require('views/partials/header.php'); ?>

	<h1>ToDo Lists</h1>

	<ul>
		<?php foreach ($tasks as $task): ?>
			<li>
				<?php 
					if ($task->complete) {
						echo "<strike> $task->description</strike>";
					} else {
						echo $task->description;
					}
				?>
			</li>	
		<?php endforeach ?>		
	</ul>		

<?php require('views/partials/footer.php'); ?>