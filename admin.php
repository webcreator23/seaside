<?php
	session_start();
?>
<html>
  <head>
    <title>Seaside Manila Admin Page</title>
  </head>
  <body>
<?php
	/*
	echo "user_id=".$_SESSION['user_id']."<br>";
	echo "user_name=".$_SESSION['user_name']."<br>";
	echo "sid=".$_SESSION['sid']."<br>";
	*/
?>
		<table border=1 cellpadding=3 cellspacing=0 align="center" width=600>
			<tr>
				<td align="left"><b>Seaside Manila Admim Console</b></td>
				<td align="right">Welcome,&nbsp;&nbsp;<b><?php echo $_SESSION['user_name']; ?></b></td>
			</tr>
		</table>
		<br><br><br>
		<table border=1 cellpadding=3 cellspacing=0 align=center width=400>
			<tr>
				<td align="center"><b>MENU OPTIONS</b></td>
			</tr>
			<tr>
				<td align="center"><a href="price_edit.php">Edit Wet Market Items / Prices</a></td>
			</tr>
			<tr>
				<td align="center"><a href="logout.php">Log-Off</a></td>
			</tr>
		</table>
  </body> 
</html>

