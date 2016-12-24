<?php 
//error_reporting(0);
session_start();
if(!($_SESSION['auth']==1))
header('Location:index.html');
include('save.php');

?>
<!DOCTYPE html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cse chat room-kiran</title>
<script language="javascript" src="jquery-1.2.6.min.js"></script>
<script language="javascript" src="jquery.timers-1.0.0.js"></script>
<script type="text/javascript">




$(document).ready(function(){
   var j = jQuery.noConflict();
	j(document).ready(function()
	{
		j(".refresh").everyTime(1000,function(i){
			j.ajax({
			  url: "refresh.php",
			  cache: false,
			  success: function(html){
				j(".refresh").html(html);
			  }
			})
		})
		
	});
	
   j('.refresh').css({color:"green"});

});
</script>
<style type="text/css">
      @import url("default.css");
    </style>

</head>
<body bgcolor="#EEEEE" font-face="tahoma">
<div id="header"><font size="4" color=white>Welcome cse - Public Chat Room</font></div>
<br>
<br>

<form method="POST" name="chat" action="">
<div id="uname" ><?php echo $_SESSION['uname']  ?></div>

<div class="refresh">
<?php
include('refresh.php');
?>

</div>
<input name="message" type="text" id="textb" autocomplete="off"/>
<input name="submit" type="submit" value="Chat" id="post_button" />
</form>
<br>


</body>
<footer>

<div id="rules" align="left"><font color=grey>
Chat Rules :
<p>1. Character limit is 256 per message.
<p>2. If you want to include a single qoute or double qoute, precede it with a forward slash- \ 
</font>
<a href="logout.php">Logout!</a>
</div>
<p>By kittu - 2013</p>
</footer>
</html>
