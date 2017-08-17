<?php
echo "<div style='float:right; align:left'>";
session_start();
if(isset($_SESSION['user'])){
	echo "Hi, ".$_SESSION['user'].", ";
	echo "<form method='get' action='logout.php'>";
	echo "<input type='submit' value='logout'>";
	echo "</form>";
}
else{
	echo "You are not logged in<br><table>";
	echo "<form  method='POST' action='user.php'> ";
	echo "<tr><td>user name:</td><td> <input type='text' name='uname'> </td></tr>";
	echo "<tr><td>password:</td><td> <input type='password' name='pass'> </td></tr> ";

	echo "<tr><td></td><td><input type='submit' value='OK'><input type='reset' value='clear'></td></tr> ";

	echo "</form></table> ";
}
echo "</div>";
/**/
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title>main page</title> 
	
	<link rel="stylesheet" type="text/css" href="./static/css/newcss.css">
</head>
<body>

	<div id="container">
		<div id="header">
			<img class="imgl" src="./static/img/logo.png" alt="UCSC Logo"/>
			
			<h1>School Management System</h1>
		</div>
		<div id="nav">
		<div class="drop">
		<ul>
			<li><a accesskey="1" tabindex="1" href="index.php">Home</a></li>
			<li><a accesskey="2" tabindex="2" href="./static/php/aboutus.php">About Us</a></li>
			<li><a accesskey="3" tabindex="3" href="./admin/index.php">Admin</a></li>
			<li><a accesskey="4" tabindex="4" href="static/php/teacherGuide.php">Teacher</a></li>
			<li><a accesskey="5" tabindex="5" href="student/index.php">Student</a>
				<ul>
					<li><a accesskey="6" tabindex="6" href="student/viewsyllubus.php">View syllabus</a></li>
					<li><a accesskey="7" tabindex="7" href="./static/php/lnotes.php">View lecture notes</a></li>
				</ul>
			</li>
		</ul>
		</div>
	</div>
	<div id="rightnav">
	<div class ="Quicklinks">
					
					<h2>Quick links</h2>
						
					<ul>
						
						<li><a href="student/viewsyllubus.php">View syllabus</a></li>
						<li><a href="#">View lecture notes</a></li>
						<li><a href="#">Register new student </a></li>
						<li><a href="#">Search student </a></li>
					</ul>
					
				</div>
				


	</div>

	<div id="content">
<h2>Methodist College </h2>

<img class="image" src="./static/img/college.jpg" alt="college photo"/>
</div>
	

<div id="footer">
Methodist college, Colombo 3, Sri Lanka
</div>
</div>


</body>
</html>