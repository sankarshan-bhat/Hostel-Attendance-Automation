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
<center>
<?php
session_start();
echo '<h4 style="font:20px bold arial;"><p align="right"><a href="logout.php"> logout!</a></p></h2>';
$con = mysql_connect("localhost","root","a");
if (!$con)
  {

  die('Could not connect: ' . mysql_error());
  
}

mysql_select_db("hostel", $con);
$date=$_POST['day'];
#$result = mysql_query("SELECT USN FROM finalattendance WHERE value='0' AND Date='$day' ");
$result=mysql_query("SELECT USN ,Name,room_no,block  FROM student WHERE USN IN(SELECT USN FROM finalattendance WHERE value='0' AND Date='$date')");
$count=mysql_num_rows($result);

if($count==0)
{

echo"No absentees found";

}

else
{ 

echo "<table border='1' bgcolor='black'>
<tr>
<th><font size=\"5\" color=\"white\">USN</font></th>
<th><font size=\"5\" color=\"white\">Name</font></th>
<th><font size=\"5\" color=\"white\">block</font></th>
<th><font size=\"5\" color=\"white\">room_no</font></th>
</tr> ";
//$abusn=array();
//$i=0;
while($row = mysql_fetch_array($result))
  {
	//echo $row['Name']."<br />";
		
	//echo "checking inside";
	//$abusn[$i++]=$row['Name'];

  echo "<tr>";
  echo "<td><font size=\"4\" color=\"white\">" . $row['USN'] . "</font></td>";
  echo "<td><font size=\"4\" color=\"white\">" . $row['Name'] . "</font></td>";
  echo "<td><font size=\"4\" color=\"white\">" . $row['block'] . "</font></td>";
  echo "<td><font size=\"4\" color=\"white\">" . $row['room_no'] . "</font></td>";
  echo "</tr>";	
 
 }
echo "</table>";
echo "<br \><br \>";
}
?>
<center>   
</body>
</html>


