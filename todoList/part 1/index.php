<?php

	include('classes/todoController.php');

	if(isset($_POST['submit-todo'])){
		$todo = $_POST['todo'];

		$todoAdd = new TodoController();
		echo $todoAdd->addTodo($todo);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>php tut</title>
</head>
<body>
	<h1 class="heading">Todos</h1>
	<form action="" method="post" id="todoForm">
		<input type="text" name="todo" placeholder="Enter your todo..." required/>
		<input type="submit" name="submit-todo" value="ADD" form="todoForm"/>
	</form>

	<!-- show todos -->

</body>
</html>
