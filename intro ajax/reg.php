<?PHP
	
	/*// set header content type
	header("Content-type: text/html; charset=utf-8");

	// connect database
	// localhost for local computer
	$con = mysql_connect('localhost','root','root');

	// select the database
	mysql_select_db('intro1');

	// set unicode
	mysql_query('set names utf8');*/

	require_once('connect.php');

	$username = $_POST['username'];

	// search the pointed username
	$sql = "select * from reg where username = '$username'";

	// 
	$query = mysql_query($sql);

	// if get, return the length, 0 means none
	if ( $query && mysql_num_rows($query) ) {

		echo "<script>alert('already')</script>";
		echo "<script>history.back();</script>";

	} else {

		$sql = "insert into reg(username) values('$username')";
		$query = mysql_query($sql);

		if ($query) {
			echo "<script>alert('register successful');</script>";
			echo "<script>window.location = 'intro1.html';</script>";
		}
	}















?>