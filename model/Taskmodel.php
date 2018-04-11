<?php

function getTask($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM task WHERE task_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));
	$db = null;
	return $query->fetch();
}

function getAllTasks() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM task";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function createTask()
{
	$taskdescription = isset($_POST['task_description']) ? $_POST['task_description'] : null;

	if (strlen($taskdescription) == 0) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO task(task_description) VALUES (:name)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $taskdescription,
  )
);

	$db = null;

	return true;
}

function deleteTasks($id = null)
{
	if (!$id) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "DELETE FROM task WHERE task_id =:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;

	return true;
}

function editTasks()
{
	$id = isset($_POST['task_id']) ? $_POST['task_id'] : null;
	$taskdescription = isset($_POST['task_description']) ? $_POST['task_description'] : null;

	if (strlen($id) == 0 || strlen($taskdescription) == 0) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "UPDATE task SET task_description = :task WHERE task_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':task' => $taskdescription,
		':id' => $id));

	$db = null;

	return true;
}
