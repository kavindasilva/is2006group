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
			<form method="post" action="funs2.php" onsubmit="return confirm('Confirm new entry?');">
				<table>
					<tr>
						<td>First Name: </td><td><input type="text" name="fname"></td>
					</tr>
					<tr>
						<td>Last Name: </td><td><input type="text" name="lname"></td>
					</tr>
					<tr>
						<td>Address: </td><td><textarea name="addr"></textarea></td>
					</tr>
					<tr>
						<td>Telephone </td><td><input type="tel" name="tp"></td>
					</tr>
					

					<tr><td></td><td></td></tr>
					<?php
					if ($_GET['actor'] == "std")
						formStd();
					elseif ($_GET['actor'] == "tch")
						formTch();
					?>
				</table>
			</form>
		</div>
	</body>
</html>

<?php
//echo $_GET['actor'];

//display things unique to student
function formStd() {
	echo "<tr><td>Telephone2:</td> <td><input type='tel' name='tp2'></td> </tr>";
	echo "<tr><td>Birth day:</td> <td><input type='date' name='dob'></td> </tr>";
	echo "<tr><td>Gender:</td> <td><input type='radio' name='gend' value='male'>Male <input type='radio' name='gend' value='female'>Female</td> </tr>";
	echo "<tr><td>Class:</td> <td><input type='text' name='cls'></td> </tr>";
	echo "<tr><td>Photo:</td> <td><input type='file' name='stphoto'></td> </tr>";
	
	echo "<tr><td><input type='submit' value='Add Student' name='studentadd'></td> <td></td> </tr>";

}

//display things unique to teacher
function formTch() {
	echo "<tr><td>NIC no :</td> <td><input type='text' name='nic' size=9></td> </tr>";
	//echo "<tr><td>Qualifications:</td> <td><input type='tel' ></td> </tr>";
	
	echo "<tr><td><input type='submit' value='Add Teacher' name='teacheradd'></td> <td></td> </tr>";
}
?>