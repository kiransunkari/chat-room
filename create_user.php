<?php
session_start();
include('connection.php');
$name=$_POST['name'];

$contact=$_POST['contact'];
$username=$_POST['username'];
$password=md5($_POST['password']);
mysql_query("INSERT INTO member(mem_name, mem_contact, mem_uname, mem_pass)VALUES('$name','$contact', '$username', '$password')") or die(mysql_error());

mysql_close($con);
header('Location:index.html');
?>