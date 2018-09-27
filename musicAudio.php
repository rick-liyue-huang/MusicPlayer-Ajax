<?php
	
	// import the 'connect.php' file
	require_once('connect.php');

	// the 'id' transfered from frontend
	$id = $_GET['id'];

	// just query all items from 'music_list' table
	$sql = "select * from music_list where id = '$id'";

	// get the results 
	$query = mysql_query($sql);

	// if the results exist, (means return the none 0 length)
	if($query && mysql_num_rows($query)) {

		// return to json type data, and only one item matched with $id
		echo json_encode(mysql_fetch_assoc($query));
	}









?>