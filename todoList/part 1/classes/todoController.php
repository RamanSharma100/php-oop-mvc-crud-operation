<?php

		include('todoModel.php');
		class TodoController extends TodoModel{

			public function addTodo($todo){
				return $this->addTodoDb($todo);
			}

		}

?>