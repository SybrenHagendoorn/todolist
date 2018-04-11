<?php

require(ROOT . "model/taskModel.php");

function TaskIndex() {
  render("todolist/index", array(
    'task' => getAlltasks()
  ));
}

function create() {
  render ('task/create');
}

function createSave()
{
	if (!createTask()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "home/index");
}

function editTask($id) {
  render("Task/edit", array(
    'task' => getTask($id)
  ));
}

function editSave() {
	if (!editTasks()) {
		header("Location:" . URL . "error/index");
		exit();
   }
	}

function delete($id){

	if (!deleteTasks($id)) {
		header("Location:" . URL . "error/index");
		exit();
  }
}
