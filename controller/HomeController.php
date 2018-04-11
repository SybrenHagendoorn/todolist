<?php

require(ROOT . "model/ListModel.php");

function index()
{
	render("home/index", array('list' => getAllLists()));
}
