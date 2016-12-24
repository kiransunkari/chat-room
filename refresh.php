<?php
$con = mysql_connect("localhost","root","kittu507");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("chat", $con);

$result = mysql_query("SELECT * FROM message ORDER BY id DESC");


while($row = mysql_fetch_array($result))
  {
	$row["message"] = strip_tags($row["message"]);
	$row["message"] = str_replace("=(","<img src=\"images/sad.gif\" alt=\"=(\"/>", $row["message"]);
	$row["message"] = str_replace(":(","<img src=\"images/sad.gif\" alt=\":(\"/>", $row["message"]);
	$row["message"] = str_replace(";(","<img src=\"images/cry.gif\" alt=\";(\"/>", $row["message"]);
	$row["message"] = str_replace(":@","<img src=\"images/mad.gif\" alt=\":@\"/>", $row["message"]);
	$row["message"] = ereg_replace(":)","<img src=\"images/smile.gif\" alt=\":)\"/>", $row["message"]);
	$row["message"] = ereg_replace("=)","<img src=\"images/smile.gif\" alt=\"=)\"/>", $row["message"]);
	$row["message"] = ereg_replace(":D","<img src=\"images/laugh.gif\" alt=\":D\"/>", $row["message"]);
	$row["message"] = ereg_replace(":d","<img src=\"images/laugh.gif\" alt=\":d\"/>", $row["message"]);
	$row["message"] = ereg_replace(":p","<img src=\"images/tongue.gif\" alt=\":p\"/>", $row["message"]);
	$row["message"] = ereg_replace(":P","<img src=\"images/tongue.gif\" alt=\":P\"/>", $row["message"]);
	$row["message"] = ereg_replace(":O","<img src=\"images/shocked.gif\" alt=\":O\"/>", $row["message"]);
	$row["message"] = ereg_replace(":o","<img src=\"images/shocked.gif\" alt=\":o\"/>", $row["message"]);
	$row["message"] = ereg_replace(";)","<img src=\"images/wink.gif\" alt=\";)\"/>", $row["message"]);
	$row["message"] = ereg_replace(":S","<img src=\"images/sick.gif\" alt=\":S\"/>", $row["message"]);
	$row["message"] = ereg_replace(":s","<img src=\"images/sick.gif\" alt=\":s\"/>", $row["message"]);
	$row["message"] = ereg_replace("8)","<img src=\"images/love.gif\" alt=\":s\"/>", $row["message"]);
	$row["message"] = ereg_replace(":/","<img src=\"images/half-frown.gif\" alt=\":s\"/>", $row["message"]);
	$row["message"] = ereg_replace(":roll:","<img src=\"images/roll.gif\" alt=\":roll:\"/>", $row["message"]);
  	echo '<p>'.'<span>'.$row['sender'].'</span>'. '&nbsp;&nbsp;' . $row['message'].'</p>'.'<span><div align=right><font face="italliano" 		size=1 color=grey >'.$row['timestampy'].'</font></div></span>';
  }

mysql_close($con);
?>
