<?php
session_start();	
include 'params.inc';

echo $hostname."<br><br>";

$_SESSION['uname'] = "jaydominic";
echo "Session=(".$_SESSION['uname'].")<br><br>";

echo "session is null = ".var_export($_SESSION['uname'])."<br><br>";

//phpinfo();

?>
