<?php
//session maintainence // kavindasilva
/**/
session_start();

if ( (!isset($_SESSION['user'])) || ($_SESSION['usertype']!='adm') ){
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

include_once 'funs1.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin control panel</title>
		<link rel="stylesheet" type="text/css" href="../css/tables.css">
		<link rel="stylesheet" type="text/css" href="../static/css/1nav.css">
		<script type="text/javascript" src="../js/adminFun.js"></script>
	</head>

	<body>
		<!--the top navi bar-->
		<div>
			<?php
			//include_once '../static/head1.php';		
			//include_once '../static/php/navibar.php';	
			?>
		</div>
		
		<!--page body-->
		<div>
			<!--students list-->
			<P>
				<form action="funs1.php" method="post">
					Filter students by keyword:
					<input type="button" onclick="clearAllStd()" value="clear search"/>
					
					
					<a href="regstudent.php"><input value="Add New Student" type="button"></a>
					
					<br>
					<input type="text" name="skey" id="search1" onkeyup="searchRows(1,this.id, 'tblstd');" placeholder="first name" />
					<input type="text" name="skey" id="search2" onkeyup="searchRows(2,this.id, 'tblstd');" placeholder="last name" />
					<input type="text" name="skey" id="search3" onkeyup="searchRows(4,this.id, 'tblstd');" placeholder="class" />
					<input type="text" name="skey" id="search4" onkeyup="searchRows(8,this.id, 'tblstd');" placeholder="address" />

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
					
					
					<a href="regteacher.php"><input value="Add New Teacher" type="button"></a>
					<br>
					
					<input type="text" name="skey" id="search11" onkeyup="searchRows(1,this.id, 'tbltch');" placeholder="full name" />
					<input type="text" name="skey" id="search12" onkeyup="searchRows(4,this.id, 'tbltch');" placeholder="email" />
					<input type="text" name="skey" id="search13" onkeyup="searchRows(5,this.id, 'tbltch');" placeholder="telephone" />
					<input type="text" name="skey" id="search14" onkeyup="searchRows(6,this.id, 'tbltch');" placeholder="subject" />

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
		
			
			<div class="subject">
				<?php //include 'funs1.php';
				//viewTeachers();
				?>
			</div>
		</div>

	</body>
</html>
