<?php
session_start();
if (empty($_SESSION['sid'])) {
	// no session exists yet
?>
	<br><br><br><br><br><br>
	<center>
		<b>You must sign-in to access the admin webpage. &nbsp;Click on the Sign-In button below to login.</b>
		<br>
		<br>
		<br>
		<input type="button" value="&nbsp;&nbsp;Sign-in&nbsp;&nbsp;" onclick="javascript:location.href='login.html';">
	</center>
<?php
	exit();
}

include 'params.inc';

// echo "item_desc=".$_REQUEST['item_desc'][1][1];
// echo "item_desc=".$_REQUEST['item_price'][2][1];

// Create connection
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");

//select a database to work with

$selected = mysql_select_db($dbname, $dbhandle)
  or die("Could not select ".$dbname);

//update the records

//--------------------------- LEFT COLUMN WET MARKET PRICES ------------------------

for($rownum=1; $rownum<=21; $rownum++) {
	$result = mysql_query("UPDATE sm_prices SET item_desc = '".$_REQUEST['item_desc'][1][$rownum]."', item_price = '".$_REQUEST['item_price'][1][$rownum]."', date_modified = NOW(), user_id = ".$_SESSION['user_id']." WHERE col_num = 1 AND row_num = ".$rownum);
	if(! $result )
	{
		die("Could not update data [1][".$rownum."]: " . mysql_error());
	}
}

//--------------------------- RIGHT COLUMN WET MARKET PRICES ------------------------

for($rownum=1; $rownum<=25; $rownum++) {
	$result = mysql_query("UPDATE sm_prices SET item_desc = '".$_REQUEST['item_desc'][2][$rownum]."', item_price = '".$_REQUEST['item_price'][2][$rownum]."', date_modified = NOW(), user_id = ".$_SESSION['user_id']." WHERE col_num = 2 AND row_num = ".$rownum);
	if(! $result )
	{
		die("Could not update data [2][".$rownum."]: " . mysql_error());
	}
}

//close the connection
mysql_close($dbhandle);

?>
<html>
  <head>
    <title>Seaside Manila Admin Page</title>
  </head>
  <body>
	<br><br><br><br><br>
	<center>
		<b>The Wet Market page has been updated.</b>
		<br>
		<br>
		<input type="button" value="&nbsp;&nbsp;Continue&nbsp;&nbsp;" onclick="javascript:location.href='admin.php?frompage=EDITPRICE';">
	</center>
  </body> 
</html>
