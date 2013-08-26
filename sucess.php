<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name" />
	<link rel="stylesheet" type="text/css" href="variant-stream.css" title="Variant Stream" media="screen,projection" />
	<title>PESIT Boys Hostel</title>



</head>
<body>
<div id="wrap">

	<div id="header">
		<div id="topmenu">
			<p>
			<strong class="hide">Main menu:</strong>
			<a class="active" href="Home.html"> Home</a><span class="hide"> | </span>
			<a href="Student.html">Student</a><span class="hide"> | </span>
			<a href="Admin.html">Admin</a><span class="hide"> | </span>
			<a href="Contact.html">Contact</a>
			</p>
		</div>
		
		<div id="title">
			<h1><a href="index.html">PESIT Boys Hostel</a></h1>
			<p class="slogan">A home away from home.</p>
		</div>
	</div>
		
	<!--
	<div id="content">
		<div id="feature">
			<img src="hostel.png" width="800" height="400"  />
		</div>
	-->
		
            
		
	         

	

</div>
</body>
</html>



<?php
session_start();
if(!$_SESSION['is_logged_in'])
{
header("location:main.html");
session_destroy();
}

echo "<p style='font:20px bold arial;' align='right'><a href='logout.php'> logout!</a></p>";

$username=$_GET["user"];
echo $username;
echo"click here to give your image\n";
//echo "<p><input type=\"button\"  value=\"GIVEIMG\" onclick=\"image()\"/>" ;


#echo"<form method=\"POST\"  action=\" \" >";
echo"Thanks for giving image ";
$user = urlencode($username);
echo "<br>".$user."<br>";
#echo '<p><a href="updatedb2.php?username=$myusername" ><input type="button"  value="Attendance"/></a></form>' ;
echo"<p style='color=blue;font:20px bold arial;'>click here to give attendance";
echo '<a href="updatedb2.php?user=', $user, '"><input type="button"  value="Attendance"/>';

?>

