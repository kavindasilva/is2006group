<?php
echo "<div style='float:right; align:left'>";
session_start();
if ( (!isset($_SESSION['user'])) || ($_SESSION['usertype']!='adm') ){
	header("Location: ../index.php");
	exit();
}
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
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Styles.css">
		<script type='text/javascript' src='../js/adminFun.js'></script>

		<title> Students Registration Form </title>
	</head>

	<body>

		<form action="funs2.php" method="post">

			<table border="0" width="50%" align="center">
				<thead>
					<tr>
						<th colspan="3"><img src="../data/img/students.jpg" alt="image of students" height="300px" width="800px"></th>
						<!--th> <img src="books.jpg" alt="set of books"  height="100px" width="100px"> </th-->
					</tr>
				</thead>

				<tbody>
					<tr>
						<th colspan="3"><h1>Students Registration Form<h1></th>
					</tr>
					<tr>
						<th colspan="3"><h2>Student Information</h2></th>
					</tr>
										
					<tr>
						<td> Student first Name </td>
						<td><input type="text" name="st_fname" required></td>
						
						</tr>
					<tr>
						<td> Student last Name </td>
						<td><input type="text" name="st_lname" required> </td>
						
						</tr>
						<tr>
						<td> Parent's Name </td>
						<td><input type="text" name="st_par" required> </td>
						</tr>
						
						<tr> <td>Gender </td>
						<td>
						<input type="radio" name="gender" value="male" checked>Male
						<input type="radio" name="gender" value="female">Female </td>
					</tr>
					
					<tr>
						<td>Class</td>
						<td><input type="text" name="cls" required/></td>
					</tr>
					
					<tr>
						<td>Date of Birth </td>
						<td>
						<input type="date" name="st_BD" required>
						</td>
					</tr>

					<tr>
						<th colspan="3"><h2>Contact Information</h2></th>
					</tr>
					<tr>
						<td> Contact Number </td>
						<td>
						<input type="tel" name="st_tel" required>
						</td>
					</tr>
					
					<tr>
						<td> Address </td>
						<td>
						<!--input type="address" name="st_ad" -->
						<textarea name="address"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
						<input type="submit" name="studentadd" value="Save" />
						<input type="reset" value="Clear" >
						<input type='button' name='cancel' onclick='redirectMain();' value='Cancel'/></td>				
					</tr>

				</tbody>

				<tfoot>
					</br>
					</br>
					<tr>
						<td colspan="3"><img src="../data/img/giphy.gif" alt="students" height="200px" width="800px">
					</tr>
				</tfoot>
			</table>
		</form>

	</body>
</html>