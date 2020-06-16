<?php
	
	include('dbConnect.php');
	class TodoModel extends DbConnect{

		protected function addTodoDb($todo){
			$date = date('y-m-d H-m-sa');
			$sql = "INSERT INTO todos(todoName,createdDate) value(?,?)";

			$stmt = $this->connect()->prepare($sql);
			$result = $stmt->execute([$todo,$date]);

			return $result;
		}

	}

?>