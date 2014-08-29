<?php
include 'params.inc';
if (isset($_SESSION)) {
	session_destroy();
}
?>
<html>
  <head>
    <title>Seaside Manila Admin Page</title>
  </head>
  <body>
	<br><br><br><br><br><br>
	<center>
		<b>You are now logged out. &nbsp;You can now close this window or click on the Sign-In button to login again.</b>
		<br>
		<br>
		<br>
		<input type="button" value="&nbsp;&nbsp;Sign-in&nbsp;&nbsp;" onclick="javascript:location.href='login.html';">
	</center>
  </body> 
</html>
