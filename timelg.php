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
		
	
	
		
             	
		
	<p style="font:20px bold arial;" align='right'><a href='logout.php'> logout!</a></p>	         

	

</div>

<?Php
session_start();
if(!$_SESSION['is_logged_in'])
{
header("location:Home.html");
session_destroy();

}

$hr = (int)date('H');
$min = (int)date('i');
$sec = (int)date('s');


if($hr>=9 &&$hr<=18 && $min>=0 && $min<=60 && $sec>=0 && $sec<=60)
{
  Header("Location:lg.html");
}


else if($hr>6)

{

 echo"<p style='color:blue;font:30px bold arial;'>This is not right time to take lg"."<br /></p>";

}


?>
</body>
</html>


