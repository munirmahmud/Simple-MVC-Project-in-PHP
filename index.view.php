<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
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


</body>
</html>