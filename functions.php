<?php

function getAllUsers() {
	global $db;
	$sql = "SELECT * FROM users";
	$query  = mysqli_query($db,$sql);
	$result = mysqli_fetch_all($query,MYSQLI_ASSOC);
	return $result;
	header('Location: index.php'); 
}

function deleteUser($id) {
	global $db;
	$sql = "DELETE FROM users WHERE id = $id";
	$query = mysqli_query($db,$sql);
	header('Location: index.php');
}


function updateUser($id) {
global $db;
$sql     = "SELECT * FROM users WHERE id = $id";
$query   = mysqli_query($db,$sql);
$result  = mysqli_fetch_assoc($query);// Vraca samo jedan red iz baze podataka i pretvara ga u assoc array!!!
require('update.view.php');
}