<?php


	/*header("Content-type: text/html; charset=utf-8");
	$con = mysql_connect('localhost', 'root', 'root');
	mysql_select_db('intro1');
	mysql_query('set names utf8');*/

	require_once('connect.php');

	// $username = $_POST['username']; 
	$username = $_REQUEST['username'];
	
	$sql = "select * from reg where username = '$username' ";
	$query = mysql_query($sql);

	if($query && mysql_num_rows($query)) {

		echo '{"code": 0, "message": "already"}';
	} else {

		echo '{"code": 1, "message": "can register"}';
	}













?>