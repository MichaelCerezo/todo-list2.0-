<?php
	$task_id = strip_tags($_POST['id']);
	include('connect.php');
	$mysqli = new mysqli('localhost', 'root', 'root', 'todo2.0');

	if ($result = $mysqli->query("DELETE FROM tasks WHERE id='$task_id'")) {
	 	# code...
	 } 
?>