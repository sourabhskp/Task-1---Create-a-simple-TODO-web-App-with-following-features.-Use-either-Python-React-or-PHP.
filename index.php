<?php
    //connect database
    $db = mysqli_connect('localhost','root','','todo');

    if (isset($_POST['submit'])) {
    	$task = $_POST['task']

       	mysqli_query($db, "INSERT INTO tasks (task) VALUES ('$task')");
    	header('location: index.php');

    }

?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Todo List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="heading">
		<h2>Todo List Application PHP MySql</h2>
	</div>

	<form method="POST" action="index.php">
		<input type="text" name="task" class="task_input">
		<button type="submit" class="add_btn" name="submit">Add Task</button>
	</form>

	<table>
		<thead>
			<tr>
				<th>N</th>
				<th>Task</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>1</td>
				<td class="task">This is first task placeholder</td>
				<td class="delete">
					<a href="#">x</a>
				</td>
			</tr>
		</tbody>

	</table>

</body>
</html>