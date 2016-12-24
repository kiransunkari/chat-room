<?php
//connect to MySQL; note weve used our own parameters- you should use
//your own for hostname, user, and password
$connect = mysql_connect("localhost", "root", "kittu507") 
or die("check your server connection.<p>Error". "Description :".mysql_error());
//create the main database if it doesnt already exist
$create = mysql_query("CREATE DATABASE IF NOT EXISTS chat")
or die(mysql_error());
//make sure our recently created database is the active one
mysql_select_db("chat");
//create "movie" table
$chat = "CREATE TABLE IF NOT EXISTS message (
  PRIMARY KEY (id),
  id int(11) NOT NULL AUTO_INCREMENT,
  message text NOT NULL,
  sender varchar(30) NOT NULL,
  timestampy varchar(100) NOT NULL
  ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ";
$results = mysql_query($chat)
or die (mysql_error());
$testdata= "INSERT INTO message (id, message, sender) VALUES
(1, 'helo', 'argie'),
(2, 'hi', 'wewew'),
(3, 'helo', 'argie'),
(4, 'helo', 'argie'),
(5, '(=^_^=)', 'wewew'),
(6, 'helo', 'argie')";
$results = mysql_query($testdata)
or die (mysql_error());
echo "Chat Database successfully created!";
?>















