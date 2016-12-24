<?php
if(isset($_POST['submit']))
{
date_default_timezone_set('Asia/Kolkata');
$times = date("F j, Y, g:i a");

$con = mysql_connect("localhost","root","kittu507");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("chat", $con);
		$message=$_POST['message'];
		$sender=$_SESSION['uname'];
		mysql_query("INSERT INTO message(message, sender,timestampy)VALUES('$message', '$sender','$times')");
}



?>
