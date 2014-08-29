<?php
include 'params.inc';
session_start();

/// check the supplied login credentials

//echo "un=".$_REQUEST['un']."<br>";
//echo "pw=".$_REQUEST['pw']."<br>";


// Create connection
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db($dbname, $dbhandle)
  or die("Could not select ".$dbname);

//execute the SQL query and return a specific record
$strsql = "SELECT * FROM sm_users WHERE user_name = '".$_REQUEST['un']."' AND user_pass = PASSWORD('".$_REQUEST['pw']."');";
//echo "strsql=".$strsql."<br><br>";

$result = mysql_query($strsql);
//echo "result=".$result."<br>";

$row = mysql_fetch_array($result);
//echo "user_id=".$row['user_id']."<br>";

if ($row == false) {
	//echo "You shall not pass!";
	
	//close the connection
	mysql_close($dbhandle);
?>
	<br><br><br><br><br><br>
	<center>
		<b>Invalid user name or password. &nbsp;Click on the Sign-In button below to return to the login page.</b>
		<br>
		<br>
		<br>
		<input type="button" value="&nbsp;&nbsp;Sign-in&nbsp;&nbsp;" onclick="javascript:location.href='login.html';">
	</center>
<?php

} else {
	//echo "Please come in!";

	$_SESSION['user_id'] = $row['user_id'];
	$_SESSION['user_name'] = $row['user_name'];
	$_SESSION['sid'] = session_id();

	//echo $_SESSION['user_id']."<br>";
	//echo $_SESSION['user_name']."<br>";
	//echo $_SESSION['sid']."<br>";

	//close the connection
	mysql_close($dbhandle);

	header('Location:  http://www.seasidemanila.com/admin.php');
}

?>
