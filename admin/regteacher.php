<?php
/* session maintain *
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
		<td>Registration Date </td>
		<td><input type="date" name="st_date"></td>
	</tr>

	<tr>
		<td>Subject</td>
		<td><select name="classes" >
		<option value="1">Sinhala</option>
		<option value="2">Religion</option>
		<option value="3">Mathematics</option>
		<option value="4">Science</option>
		<option value="5">History</option>
		<option value="6">English</option>
		
		</select> </td>
	</tr>
	
	<tr>
		<td>Registration number</td>
		<td><input type="number" name="st_no"</td>
	</tr>
	<tr>
		<td>Assigned grades</td>
		<td><input type="checkbox" name="grade1" value="1">Grade 1 </br>
		<td><input type="checkbox" name="grade2" value="2">Grade 2 </br>
		<td><input type="checkbox" name="grade3" value="3">Grade 3 </br>
		<td><input type="checkbox" name="grade4" value="4">Grade 4 </br>
		<td><input type="checkbox" name="grade5" value="5">Grade 5
	</tr>
	<tr>
		<th colspan="3"> <h2>Teacher's Information</h2> </th>
	</tr>
	<tr>
		<td> Teacher's Name </td>
		<td><input type="text" name="Tch_name" </td>
		<td rowspan="6"><input type="image" src="submit_image.png" alt="Tch_photo"> </td>
	</tr>
	<tr>
		<td> Marital status </td>
		<td><input type="radio" name="married" value="yes">Married
			<input type="radio" name="unmarried" value="no"> Unmarried
		</td>
	</tr>
	
	<tr>
		<td>Gneder </td>
		<td><input type="radio" name="gender" value="male"> Male 
			<input type="radio" name="gender" value="female"> Female </td>
	</tr>	
	<tr>
		<td>Date of Birth </td>
		<td><input type="date" name="st_BD"> </td>
	</tr>
	<tr>	
		<td> Qualifications </td>
		<td><textarea name="qualifications" rows="6" cols="16"> add a small description about teacher's qualifications </textarea> </td>
	</tr>
	<tr>
		<th colspan="3"> <h2>Contact Information</h2> </th>
	</tr>
	<tr>
		<td> Contact Number </td>
		<td><input type="tel" name="st_tel" maxlength="10"> </td>
	</tr>
	<tr>
		<td> Email ID </td>
		<td><input type="email" name="st_email" > </td>
	</tr>
	<tr>
		<td> Address </td>
		<td><input type="address" name="st_ad" > </td>
	</tr>
	<tr>
		<td> </td>
		<td><input type="submit" name="studentadd" value="Save" /> <input type="reset" value="Clear" > </td>
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