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
echo '<h4 style="font:20px bold arial;"><p align="right"><a href="logout.php"> logout!</a></p></h2>';

$con = mysql_connect("localhost","root","a");

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
#echo"begin";
$username=$_SESSION['user'];
//echo $username."<br>";
#echo"end";
#$mypassword=$_POST['mypassword'];
mysql_select_db("hostel", $con);
#$subcode=$_POST['subcode'];
#$myusername=$_POST['username'];
$my_t=getdate(date("U"));
$day=$my_t[mday];

$month=$my_t[mon];
$currentday="Date".$day;


//echo $username."<br />";
//echo $day."<br />";

$query=mysql_query("UPDATE finalattendance SET value='1' WHERE USN='$username' AND Date='$day'");
#mysql_query("UPDATE attendance SET value = '0'" );

if($query) 
{
echo "<p style='color:blue;font:30px bold arial;'><br> your attendance has been recorded</p>";
}
else
 {
echo "Error Updating the Databasemys";
}

     

if($month==1 || $month==3 || $month==5 || $month==7 || $month==8 || $month==10 || $month==12)
{
   
     

   if($day==6)
   {

       $Usn="USN\t\t";
     $Date="Date\t\t";
     $Val="Value\t\t\n"; 	
     $myFile = "record.txt";
      $fh =fopen("/home/sankarshan/test.txt","w");
       if(!$fh)
	{
          echo"error in opening"."<br />";
        }
     fwrite($fh, $month);
     fwrite($fh,"\n\n\n..............................\n\n\n");	
     fwrite($fh, $Usn);
     fwrite($fh, $Date);
     fwrite($fh, $Val);




	$result=mysql_query("SELECT * FROM finalattendance");
   

   	
   while($row = mysql_fetch_array($result))
  {
     $usn=$row['USN']."\t\t";
     $date=$row['Date']."\t\t";
     $val=$row['value']."\t\n";
     				
     
     fwrite($fh, $usn);
     $stringData = "Tracy Tanner\n";
     fwrite($fh, $usn);
     fwrite($fh, $date);
     fwrite($fh, $val);  
  }

  $query=mysql_query("UPDATE finalattendance SET value='0'");
  if($query)
  {
   echo"successfully refreshed the databse";
  }
  else
  {
    echo"error occured";
   }
    
fclose($fh);

 }
}


if($month==4 || $month==6 || $month==9 || $month==11 )
{

     

   if($day==30)
   {

	$myFile = "test";
       $fh =fopen("/home/sankarshan/test.txt","w");
       if(!$fh)
	{
          echo"error i opening"."<br />";
        }
       fwrite($fh, $month);
        fwrite($fh,"\n\n\n..............................\n\n\n");	


	$result=mysql_query("SELECT * FROM finalattendance");
   

   	
   while($row = mysql_fetch_array($result))
  {
     $usn=$row['USN']."\t\t";
     $date=$row['Date']."\t\t";
     $val=$row['value']."\t\n";
     				
     
     fwrite($fh, $usn);
     $stringData = "Tracy Tanner\n";
     fwrite($fh, $usn);
     fwrite($fh, $date);
     fwrite($fh, $val);  
  }
    
  $query=mysql_query("UPDATE finalattendance SET value='0'");
  if($query)
  {
   echo"successfully refreshed the databse";
  }
  else
  {
    echo"error occured";
   }
  fclose($fh);
}
}

if($month==2)
{

     

   if($day==28)
   {
	
       $myFile = "record.txt";
     $fh = fopen($myFile, 'w') or die("can't open file");
     fwrite($fh, $month);
     fwrite($fh,"\n\n\n..............................\n\n\n");	

     $result=mysql_query("SELECT * FROM finalattendance");
   

   	
   while($row = mysql_fetch_array($result))
  {
     

	 
      $usn=$row['USN']."\t\t";
     $date=$row['Date']."\t\t";
     $val=$row['value']."\t\n";
     				
     
     fwrite($fh, $usn);
     $stringData = "Tracy Tanner\n";
     fwrite($fh, $usn);
     fwrite($fh, $date);
     fwrite($fh, $val);  
  }
    
  $query=mysql_query("UPDATE finalattendance SET value='0'");
  if($query)
  {
   echo"successfully refreshed the databse";
  }
  else
  {
    echo"error occured";
   }
  fclose($fh);
}
}

?>
</body>
</html>
