<?php
//session maintainence
/*
if(!isset($_SESSION['user'])){	
	echo "user not set";
	header('Location:../login.html');
}*/


include 'funs1.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin control panel</title>
		<link rel="stylesheet" type="text/css" href="../css/tables.css">
	</head>

	<body>
		<div>
			<!--students list-->
			<P>
				<form action="funs1.php" method="post">
					Enter keyword to search: 
					<input type="text" name="skey" />
					<input type="text" name="ss" hidden />
					<input type="submit" name="ssearch" value="search" />
					
				</form>
				</P>
				<hr>
				
			<div class="teach">				
				<?php 
					viewStudents();
				?>
				
			</div>
			<hr color="blue" />
			
			
			<!--teachers list-->
			<div>
				<?php //include 'funs1.php';
					viewTeachers();
				?>

			</div>
		</div>

	</body>
</html>
