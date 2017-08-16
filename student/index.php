<?php

session_start();

if ( (!isset($_SESSION['user'])) || ($_SESSION['usertype']!='std') ){
	header("Location: ../index.php");
	exit();
}

echo "<div style='float:right; align:left'>";

if(isset($_SESSION['user'])){
	echo "Hi, ".$_SESSION['user'].", ";
	echo "<form method='get' action='../logout.php'>";
	echo "<input type='submit' value='logout'>";
	echo "</form>";
}
echo "</div>";

?>

<html>

<head>
	<title>Student</title>
	<link rel="stylesheet" type="text/css" href="../static/css/studentcss.css">

</head>
<body>

<div class="container1">
<h1>Welcome Student </h1>
<h2> You are now in the control</h2>
</div>
<br>
<br>
<div class="container2">
<div class="button">
<a href="">  View Syllubus </a>
<br>
<img src="../img/student.png" alt="student">
</div>
<div class="button2">
<a href="">  View Subject </a>
<br>
<img src="../img/student2.png" alt="student">
</div>

</div>



</body>
</html>