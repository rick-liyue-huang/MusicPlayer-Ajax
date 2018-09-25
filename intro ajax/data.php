<?php

	require_once('connect.php');


	$sql = "delete from reg where username = 'a' ";

	$query = mysql_query($sql);$query = mysql_query($sql);

	$sql = "update reg set username = 'bb' where id = 5 ";
	$query = mysql_query($sql);

	$sql = "select * from reg";
	$query = mysql_query($sql);


	// print_r(mysql_num_rows($query)); // how many items
	// print_r($query);
 	/*$row = mysql_fetch_row($query);

 	print_r($row);

 	$row = mysql_fetch_row($query);

 	print_r($row);
*/
 	// while($row = mysql_fetch_row($query)) {
 	// 	print_r($row); // output all the items by index
 	// }

 	// while($row = mysql_fetch_assoc($query)) {
 	// 	print_r($row); // output all items by key-value
 	// }

 	// while($row = mysql_fetch_array($query)) {
 	// 	print_r($row); // output by array
 	// }

 	// while($row = mysql_fetch_object($query)) {
 	// 	print_r($row); // output by object
 	// }

 	// while($row = mysql_fetch_assoc($query)) {
 	// 	print_r($row['username']);
 	// }

 	// while($row = mysql_fetch_object($query)) {
 	// 	print_r($row -> username);
 	// }

 	while($row = mysql_fetch_assoc($query)) {
 		$data[] = $row;
 	}
 	$data = json_encode($data);
 	// print_r($data);
 	echo $data;










?>