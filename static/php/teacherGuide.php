<?php
echo "<div style='float:right; align:left'>";
session_start();
if ( (!isset($_SESSION['user'])) || ($_SESSION['usertype']!='tch') ){
	header("Location: ../../index.php");
	exit();
}
if(isset($_SESSION['user'])){
	echo "Hi, ".$_SESSION['user'].", ";
	echo "<form method='get' action='../../logout.php'>";
	echo "<input type='submit' value='logout'>";
	echo "</form>";
}
echo "</div>";
?>
<html>

<head>
	<title>Teachers' Guide</title>
	<link rel="stylesheet" type="text/css" href="../css/t.css">
	<style>
	.bordered {
        height: 600px;
    	padding: 20px;
   	 	border: 10px 
    	groove #00b38f;
  	}
  </style>

</head>
<body>
<?php include 'head1.php';?>
<div class="bordered">
<div class="container1">
<h1>Welcome Teacher </h1>
<h2> You are now in the Teachers' Guide</h2>
</div>
<br>
<br>
<div class="container2">
<div class="button">
<a href="../uploads/upload.php">  Add Notes </a>
<br>
<br>
<br>
<img src="../img/notes.png" alt="teacher">
</div>
<div class="container2">
<div class="button2">
<a href="">  Add Marks </a>
<br>
<br>
<img src="../img/Teacher.png" alt="teacher">
</div>

</div>
</div>
</body>
</html>