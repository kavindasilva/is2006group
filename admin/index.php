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
		<script type="text/javascript" src="../js/adminFun.js"></script>
	</head>

	<body>
		<div>
			<!--students list-->
			<P>
				<form action="funs1.php" method="post">
					Enter keyword to search: 
					<input type="text" name="skey" id="search1" onkeyup="searchRows(2,this.id, 'tblstd');" />
					<input type="text" name="stype" value="ss" hidden />
					<input type="submit" name="usearch" value="search" />
					
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
			<P>
				<form action="funs1.php" method="post">
					Enter keyword to search: 
					<input type="text" name="skey" />
					<input type="text" name="stype" value="tt" hidden />
					<input type="submit" name="usearch" value="search" />
					
				</form>
				</P>
				
			<div class="teach">
				<?php //include 'funs1.php';
					viewTeachers();
				?>

			</div>
		</div>

	</body>
</html>
