<?php
//session maintainence // kavindasilva
/**/
 if(!isset($_SESSION['user'])){
	echo "user not set";
	//header('Location:../login.html');
 }
 elseif ($_SESSION['utype']!="adm") {
     echo "not an admin";
	 //header('Location:../login.html');
 }

/**/

include_once 'funs1.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin control panel</title>
		<link rel="stylesheet" type="text/css" href="../css/tables.css">
		<script type="text/javascript" src="../js/adminFun.js"></script>
	</head>

	<body>
		<!--the top navi bar-->
		<div>
			<?php
			include_once '../static/head1.php';			
			?>
		</div>
		
		<!--page body-->
		<div>
			<!--students list-->
			<P>
				<form action="funs1.php" method="post">
					Filter students by keyword:
					<input type="button" onclick="clearAllStd()" value="clear search"/>
					
					<a href="addNew.php?actor=std"><input value="Add New Student" type="button"></a>
					
					<br>
					<input type="text" name="skey" id="search1" onkeyup="searchRows(2,this.id, 'tblstd');" placeholder="first name" />
					<input type="text" name="skey" id="search2" onkeyup="searchRows(3,this.id, 'tblstd');" placeholder="last name" />
					<input type="text" name="skey" id="search3" onkeyup="searchRows(5,this.id, 'tblstd');" placeholder="class" />
					<input type="text" name="skey" id="search4" onkeyup="searchRows(9,this.id, 'tblstd');" placeholder="address" />

					<input type="text" name="stype" value="ss" hidden />
					<input type="submit" name="usearch" value="search" hidden/>

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
					Filter teachers by keyword:
					<input type="button" onclick="clearAllTch()" value="clear search"/>
					
					<a href="addNew.php?actor=tch"><input value="Add New Teacher" type="button"></a>
					<br>
					
					<input type="text" name="skey" id="search11" onkeyup="searchRows(1,this.id, 'tbltch');" placeholder="first name" />
					<input type="text" name="skey" id="search12" onkeyup="searchRows(2,this.id, 'tbltch');" placeholder="last name" />
					<input type="text" name="skey" id="search13" onkeyup="searchRows(3,this.id, 'tbltch');" placeholder="telephone" />
					<input type="text" name="skey" id="search14" onkeyup="searchRows(4,this.id, 'tbltch');" placeholder="NIC" />

					<input type="text" name="skey" hidden/>
					<input type="text" name="stype" value="tt" hidden />
					<input type="submit" name="usearch" value="search" hidden/>

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
