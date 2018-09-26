<?php
	
	// import the 'connect.php' file
	require_once('connect.php');

	// just query 'name' and 'musicName' item from 'music_list' table
	$sql = "select name, musicName from music_list";

	// get the results 
	$query = mysql_query($sql);

	// if the results exist, (means return the none 0 length)
	if($query && mysql_num_rows($query)) {

		// fetch (traverse) the result and store them in data array
		while($row = mysql_fetch_assoc($query)) {
			$data[] = $row;
		}

		// return to json type data.
		echo json_encode($data);
	}









?>