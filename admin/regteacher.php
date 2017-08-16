<?php
/* session maintain inside right top*
session_start();
if(isset($_SESSION['user'])){
	echo "Hi, ".$_SESSION['user'].", ";
	echo "<form method='get' action='logout.php'>";
	echo "<a href='admin/index.php'><input type='button' value='Admin Panel'></a><input type='submit' value='logout'>";
	echo "</form>";
}
else{
	echo "<form  method='POST' action='login.php'> ";
	echo "user name: <input type='text' name='uname1'> <br> ";
	echo "password: <input type='password' name='upass1'> <br> ";

	echo "<input type='submit' value='OK'><input type='reset' value='clear'> ";

	echo "</form> ";
}*/
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Styles.css">
	
	<title> Teachers' Registration Form </title>
</head>

<body>
	
	<form action="funs2.php" method="post">
	
	<table border="0" width="50%" align="center">
	<thead>
	<tr>
		<th colspan="3"> <img src="../data/img/teacher.jpg" alt="image of teacher" height="300px" width="800px"> </th>
		<!--th> <img src="books.jpg" alt="set of books"  height="100px" width="100px"> </th-->
	</tr>
	</thead>
	
	<tbody>
	<tr>
		<th colspan="3"><h1>Teachers' Registration Form<h1></th>
	</tr>
	<tr>
		<th colspan="3"> <h2>Basic Information</h2> </th>
	</tr>

	<tr>
		<td> Teacher's Name </td>
		<td><input type="text" name="tch_name" required/></td>
		
	</tr>
	<tr>
		<td>Subject</td>
		<td><select name="subjects" >
		<option value="sinhala" selected>Sinhala</option>
		<option value="religion">Religion</option>
		<option value="maths">Mathematics</option>
		<option value="science">Science</option>
		<option value="history">History</option>
		<option value="english">English</option>
		
		</select> </td>
	</tr>
	
		
	<tr>
		<td>Gender </td>
		<td><input type="radio" name="gender" value="male" checked> Male 
			<input type="radio" name="gender" value="female"> Female </td>
	</tr>	
	<tr>
		<td>Date of Birth </td>
		<td><input type="date" name="tch_BD" required> </td>
	</tr>
	<tr>	
		<td> Qualifications </td>
		<td><textarea name="qual"></textarea> </td>
	</tr>
	<tr>
		<th colspan="3"> <h2>Contact Information</h2> </th>
	</tr>
	<tr>
		<td> Contact Number </td>
		<td><input type="tel" name="tch_tel" maxlength="10" required> </td>
	</tr>
	<tr>
		<td> Email ID </td>
		<td><input type="email" name="tch_email" required> </td>
	</tr>
	<tr>
		<td> Address </td>
		<td><textarea name="addr"></textarea> </td>
	</tr>
	<tr>
		<td> </td>
		<td><input type="submit" name="teacheradd" value="Save" />
			<input type="reset" value="Clear" >
			<input type='button' name='cancel' onclick='redirectMain();' value='Cancel'/></td>
		</td>
	</tr>
	
	</tbody>
	
	<tfoot>
	</br>
	</br>
	<tr>
		<td colspan="3"> <img src="../data/img/tgif.gif" alt="form" height="260px" width="800px">
	</tr>
	</tfoot>
</table>
</form>

</body>
</html>