
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
//echo $_SESSION['user'];
echo "<p align='right'><a href=\"logout.php\"> logout!</a></p>";
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="a"; // Mysql password
$db_name="hostel"; // Database name
//$tbl_name="Vendors"; // Table name
// Connect to server  and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
if (!$_POST['ldate']||!$_POST['ltime']|| !$_POST['edate']|| !$_POST['etime']) 
{
	die('You did not complete all of the required fields');
}

$bdate=$_POST['ldate'];
$edate=$_POST['edate'];
$ltime=$_POST['ltime'];
$etime=$_POST['etime'];

//echo $place."<br />";
$noofdays=$edate-$bdate+1;
$b=$noofdays;
#echo $bdate;
$day=$my_t[bdate];
$username=$_SESSION['user'];
$count=0;
$var=False;
$qury=mysql_query("INSERT INTO lg2 (USN, StartDate,EndDate,btime,etime)
	VALUES ('$username', '$bdate', '$edate','$ltime','$etime')");
if($qury)
{
	
   $var=True;

}
else
{
die('error : ' . mysql_error());
}
while($noofdays!=0)
  {
	$query=mysql_query("UPDATE finalattendance SET value='2' WHERE USN='$username' AND Date='$bdate'");
	if($query)
	{
		$b=$b-1;		
		
	}
	$bdate=$bdate+1;
	$noofdays=$noofdays-1;
	
  }

//echo $b."<br />";
//echo $var."<br />";

if($var==False && $b!=0)
{
	die('error : ' . mysql_error());
	echo "<p style='font:30px bold arial;'><br> error occured</p>";
	
}
	else if ($b==0 && $var==true)
	{
		echo "<p style='color:blue;font:30px bold arial;'><br> lg updated....</p>";
	
		
	}

?>

</body>
</html>
