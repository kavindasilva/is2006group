<?php
//this file has functions only
/* delete student
 * delete teacher
 * view students
 * view teachers
 */

require "../dbcon.php";

//update
if(isset($_POST['update'])){
	require_once 'funs3.php'; //update function contains here

	if($_POST['actor']=="ss")
		updateStd($_POST['sid']);
	elseif($_POST['actor']=="tt")
		updateTch($_POST['tid']);
}

//reset password 
if(isset($_POST['rest'])){
	if($_POST['actor']=="ss")
		$sql1="update student set passw='student' where sid=".$_POST['sid']."";
	elseif($_POST['actor']=="tt")
		$sql1="update teacher set passw='ucsc' where tid=".$_POST['tid'];
	
	if(mysqli_query($GLOBALS['conn'], $sql1)){
		echo "Password reset successfully";
		//delete student and redirect to main page
		echo "<script type='text/javascript'>";
		echo "alert('Password reset succesfully.');";
		echo "window.location.href = 'index.php';";
		echo "</script>";
	}
	else{
		echo mysqli_error($GLOBALS['conn']);
		echo "<script type='text/javascript'>";
		echo "alert('Password reset error');";
		echo "window.location.href = 'index.php';";
		echo "</script>"; 
	}
}

//delete
if(isset($_POST['delete'])){
		
	if($_POST['actor']=="ss")
		$sql1="delete from student where sid=".$_POST['sid']."";
	elseif($_POST['actor']=="tt")
		$sql1="delete from teacher where tid=".$_POST['tid'];
	
	if(mysqli_query($GLOBALS['conn'], $sql1)){
		echo "Record deleted successfully";
		//delete student and redirect to main page
		echo "<script type='text/javascript'>";
		echo "alert('Record deleted succesfully.');";
		echo "window.location.href = 'index.php';";
		echo "</script>";
	}
	
}

//view students list
function viewStudents() {
	$sqlq = "select * from student;"; //sql query
	$res = mysqli_query($GLOBALS['conn'] , $sqlq); //result
	
	if (mysqli_num_rows($res) == 0) //check result
		echo "<p>No students in the table</p>";
	
	else {
		echo "<table id='tblstd'>";
		echo "<tr> <th>ID</th>  <th>First name</th> <th>Last name</th> <th>Birthday</th> <th>class</th>";
		echo " <th>sex</th> <th>Telephone</th> <th>Parent name</th> <th>Address</th></tr>";
		
		while ($row = mysqli_fetch_array($res)) {
			echo "<form method='post' action='funs1.php'>";

			echo "<tr><input type='text' name='sid' value='" . $row['sid'] . "' hidden/>"; //make student
			echo "<input type='text' name='actor' value='ss' hidden/>"; //set as student 
			
			echo "<td>" . $row['sid'] . "</td>";
			echo "<td>" . $row['fname'] . "</td>";
			echo "<td>" . $row['lname'] . "</td>";
			echo "<td>" . $row['dob'] . "</td>";
			echo "<td>" . $row['class'] . "</td>";
			echo "<td>" . $row['gender'] . "</td>";
			echo "<td>" . $row['tel1'] . "</td>";
			echo "<td>" . $row['parent'] . "</td>";
			echo "<td>" . $row['address'] . "</td>";
			
			echo "<td><input type='submit' name='update' onclick='return confirmU()' value='Update'/></td>";
			echo "<td><input type='submit' name='delete' onclick='return confirmD()' value='DELETE' style='color:red'/></td>";
			echo "<td><input type='submit' name='rest' onclick='return confirmU()' value='reset password'/></td></tr></form>";	
		}
		echo "</table>";
	}
}

//view techers list
function viewTeachers() {
	$sqlq = "select * from teacher"; //sql query
	$res = mysqli_query($GLOBALS['conn'] , $sqlq); //result
	
	if (mysqli_num_rows($res) == 0) //check result
		echo "<p>No teachers in the table</p>";
	
	else {
		echo "<table id='tbltch'>";
		echo "<tr> <TH>ID</th> <th>Full name</th> <th>Gender</th> <th>Qualifications</th> <th>email</th>";
		echo "<th>telephone no</th> <th>subject</th> </tr>";
		while ($row = mysqli_fetch_array($res)) {
			echo "<form method='post' action='funs1.php'>";
			
			echo "<tr><input type='text' name='tid' value='" . $row['tid'] . "' hidden/>"; //make teacher
			echo "<input type='text' name='actor' value='tt' hidden/>"; //set as teacher
			
			echo "<td>" . $row['tid'] . "</td>";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['gender'] . "</td>";
			echo "<td>" . $row['qualification'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";

			echo "<td>" . $row['telephone'] . "</td>";
			echo "<td>" . $row['subject'] . "</td>";
			
			echo "<td><input type='submit' name='update' onclick='return confirmU()' value='Update'/></td>";
			echo "<td><input type='submit' name='delete' onclick='return confirmD()' value='DELETE' style='color:red'/></td>";
			echo "<td><input type='submit' name='rest' onclick='return confirmU()' value='reset password'/></td></tr></form>";	
		}
		echo "</table>";
	}
}

//unctio
?>
