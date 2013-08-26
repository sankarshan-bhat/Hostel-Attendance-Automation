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
		
	
        
   


</div>
<?php
session_start();
//$_SESSION['is_logged_in'] = 0;
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="a"; // Mysql password
$db_name="hostel"; // Database name
$tbl_name="login"; // Table name

// Connect to server and select databse.
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
#$mysubcode=$_POST['mysubcode'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
#$mysubcode = stripslashes($mysubcode);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
#$mysubcode = mysql_real_escape_string($mysubcode);

#$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword' and sub='$mysubcode'";
$sql="SELECT username,password,usertype FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
//$count=mysql_num_rows($result);
//$result = mysql_query($con,"SELECT * FROM login WHERE username='$myusername' AND password='$mypassword'");
$_SESSION['is_logged_in'] = 0;
$count=mysql_num_rows($result);

// mysql_num_row is counting table row


if (mysql_error($con))
{
   die(mysql_error($con));
}
if($count== 1)
{
	
	$_SESSION['is_logged_in'] = 1;
	
	$row = mysql_fetch_array($result);
	
	if ( $row['usertype'] == 'student')
	{
		//echo"inside student";
		header("location:choose.php?username=$myusername");	
	}
	
	else 
	
	{
		echo" u dont have permission to aceess";

	}
	
}




else 
{

echo "Wrong Username or Password";
//header("location:Student.html");

// Register $myusername, $mypassword and redirect to file "login_success.php"


}

mysql_close($con);

?>

</body>
</html>
