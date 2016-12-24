<?php
if($_POST['submit']=="Register")
header('Location:register.php');
session_start();
   //connecting to database
include('connection.php');

 

   //Retrieving data from html form

   $username = $_POST['username'];

   $password = $_POST['password'];

 print_r($_POST);
   //for mysql injection (security reasons)

   $username = mysql_real_escape_string($username);

   $password = mysql_real_escape_string($password);
   $password=md5($password);
echo $username;
echo $password;
 

   //checking if such data exist in our database and display result

   $login = mysql_query("select * from member where mem_uname = '$username' and

   mem_pass = '$password'");

   if(mysql_num_rows($login) == 1) {
   
$_SESSION['auth']=1;
$data=mysql_fetch_array($login) or die(mysql_error());
$_SESSION['uname']=$data['mem_name'];
header ('Location: chatmain.php');


   }

   else {

      echo "Username and Password does not Match";

   }

?>

 

