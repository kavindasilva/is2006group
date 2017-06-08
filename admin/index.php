<?php
//session maintainence
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
			<div class="teach">
				<?php include 'funs1.php';
					viewStudents();
				?>

			</div>
			
			<!--teachers list-->
			<div>
				<?php //include 'funs1.php';
					viewTeachers();
				?>

			</div>
		</div>

	</body>
</html>
