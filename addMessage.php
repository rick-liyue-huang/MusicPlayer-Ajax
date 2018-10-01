<?php

	require_once('connect.php');

	$mid = $_POST['mid'];
	$text = htmlspecialchars($_POST['text']);

	$sql = "insert into message_list(mid, text) values($mid, '$text' )";
	// $sql = "insert into message_list(mid, text) values($mid, now() )";

	$query = mysql_query($sql);

	if($query) {

		echo '{"code": "1", "message": "'.$text.'"}';
	} else {
		echo '{"code: "0", "message": "hehe"}';
	}















?>