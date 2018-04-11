<?php

require(ROOT . "model/ListModel.php");

function listIndex() {
  render("todolist/index", array(
    'list' => getAllLists()
  ));
}

function create() {
  render ('list/create');
}

function createSave()
{
	if (!createList()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "home/index");
}

function edit($id) {
  render("list/edit", array(
    'list' => getList($id)
  ));
}

function editSave() {
	if (!editlists()){
		header("Location:" . URL . "error/index");
		exit();
  }
}

function delete($id){

	if (!deletelists($id)) {
		header("Location:" . URL . "error/index");
		exit();
  }
}
