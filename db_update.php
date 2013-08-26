
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
			<h1><a href="index.html">PES<font color="#FF0000">IT</font> Boys Hostel</a></h1>
			<p class="slogan">A home away from Home.</p>
		</div>
	</div>
		
	
</div>




<?php
session_start();
echo '<h4 style="font:20px bold arial;"><p align="right"><a href="logout.php"> logout!</a></p></h2>';
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="a"; // Mysql password
$db_name="hostel"; // Database name
$tbl_name="student"; // Table name
//echo'check';
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
if ((!$_POST['newpad']&&!$_POST['newlgad']&& !$_POST['sem']&& !$_POST['pass'])|| !$_POST['cpass']) 
{
	die('You did not complete all of the required fields');
}
else
{
 
 $padd=$_POST['newpad']; 
 $lgad=$_POST['newlgad']; 
 $sem=$_POST['sem'];
 $username=$_SESSION['user'];
// echo $padd;
 //echo $lgad;
 //echo $username;


$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
echo"test";
if($pass!="" && $cpass!="" && $pass==$cpass)
{

 $query2=mysql_query("UPDATE login SET password='$pass'  WHERE username='$username'");
 if($query2)
 {
 

  echo"<p style='color:blue;font:30px bold arial;'>pass word changed sucessfully"."<br /></p>";
 }
 else
 {

 echo"failure"."<br />";
 }
echo"<p style='color:blue;font:30px bold arial;'>password matched"."<br /></p>";
}
else 
{
  echo"<p style='color:blue;font:30px bold arial;'>password does not match"."<br /></p>";
}

if($padd!='' && $lgad!='' &&$sem!='')
 {
	$query=mysql_query("UPDATE student SET address='$padd', Lg_address='$lgad', sem='$sem' WHERE USN='$username'");
	if($query)
	{
		echo"<p style='color:blue;font:30px bold arial;'>Details are updated"."<br /></p>";
	}
	else
	{
		echo"<p style='color:blue;font:30px bold arial;'>Error occured"."<br /></p>";
	}
	
}

else if($padd=='' &&$sem=='' && $lgad!='')
{
	$query=mysql_query("UPDATE student SET Lg_address='$lgad' WHERE USN='$username'");

         if($query)
	{
		echo"<p style='color:blue;font:30px bold arial;'>Details are updated"."<br /></p>";
	}
	else
	{
		echo"<p style='color:blue;font:30px bold arial;'>Error occured"."<br /></p>";
	}
	

}
else if($padd!=''&&$sem==''&& $lgad=='')
{
 $query=mysql_query("UPDATE student SET address='$padd' WHERE USN='$username'");

 if($query)
	{
		echo"<p style='color:blue;font:30px bold arial;'>Details are updated"."<br /></p>";
	}
	else
	{
		echo"<p style='color:blue;font:30px bold arial;'>Error occured"."<br /></p>";
	}
	


}

else if($padd==''&& $sem!=''&& $lgad=='')
{
 $query=mysql_query("UPDATE student SET sem='$sem' WHERE USN='$username'");

 if($query)
	{
		echo"<p style='color:blue;font:30px bold arial;'>Details are updated"."<br /></p>";
	}
	else
	{
		echo"<p style='color:blue;font:30px bold arial;'>Error occured"."<br /></p>";
	}
	

}


}

?>

</body>
</html>
