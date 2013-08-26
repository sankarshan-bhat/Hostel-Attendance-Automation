<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name" />
	<link rel="stylesheet" type="text/css" href="variant-stream.css" title="Variant Stream" media="screen,projection" />
	<title>Student Option</title>
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
		
	
</div>


<?php
session_start();
echo '<h4 style="font:20px bold arial;"><p align="right"><a href="logout.php"> logout!</a></p></h2>';

if(!$_SESSION['is_logged_in'])
{
header("location:Home.html");
session_destroy();
}
$username=$_GET["user"];
$_SESSION['authority']=$username;
echo $username;

echo"<p style='font:40px arial,sans-serif;color:blue'><span style='color:green;font:40px arial,sans-serif;'>Click here to check absentees  options <br /></p>";

echo"<div align='center' bgcolor='black' >"; 

echo '<p><a href="absentop.html?user=', $user, '"><input type="button" style="height: 25px;color:green; width: 150px" value=" Absentees options"/></a>';

echo"<p style='color:blue;font:30px bold arial'><span style='color:purple;font:40px arial,sans-serif;'>Click here to check LG options<br /></p>";

echo '<p><a href="lgop.html?user=', $user, '"><input type="button" style="height: 25px;color:purple; width: 150px"  value=" LG students options"/></p></a>';

echo"<p style='color:blue;font:30px bold arial;'><span style='color:blue;font:40px arial,sans serif;'>Click here to change student details<br /></p>";

echo '<p><a href="changestudent.html?user=', $user, '"/><input type="button" style="height: 35px;color:blue; width: 150px" value="Change student details"/></p></a>';

echo"<p style='color:red;font:30px bold arial;'><span style='color:red;font:40px arial,sans serif;'>Click here to add a new student<br /></p>";

echo '<p><a href="addstudent.html?user=', $user, '"/><input type="button" style="height: 35px;color:red; width: 150px" value="Add New Entry"/></p></a>';

echo"</div>";


?>
</body>
</html>

