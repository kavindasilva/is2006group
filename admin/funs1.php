<?php

require "../dbcon.php";
//global $conn;

//view students list
function viewStudents() {
	$sqlq = "select * from student;"; //sql query
	$res = mysqli_query($GLOBALS['conn'] , $sqlq); //result
	
	if (mysqli_num_rows($res) == 0) //check result
		echo "<p>No students in the table</p>";
	
	else {
		while ($row = mysqli_fetch_array($res)) {
			echo "<form method='post' action='mail_functions.php'>";
			echo "<tr><input type='text' name='id' value='" . $row['id'] . "' hidden/>";
			echo "<td>" . $row['semail'] . "</td>";
			echo "<td>" . $row['subject'] . "</td>";
			echo "<td>" . $row['time_sent'] . "</td>";
			echo "<td><input type='submit' name='view' value='VIEW'/></td>";
			echo "<td><input type='submit' name='delete' value='DELETE'/></td></tr></form>";
		}
	}
}

//view techers list
function viewTeachers() {
	$sqlq = "select * from teacher"; //sql query
	$res = mysqli_query($GLOBALS['conn'] , $sqlq); //result
	
	if (mysqli_num_rows($res) == 0) //check result
		echo "<p>No teachers in the table</p>";
	
	else {
		while ($row = mysqli_fetch_array($res)) {
			echo "<form method='post' action='mail_functions.php'>";
			echo "<tr><input type='text' name='id' value='" . $row['id'] . "' hidden/>";
			echo "<td>" . $row['semail'] . "</td>";
			echo "<td>" . $row['subject'] . "</td>";
			echo "<td>" . $row['time_sent'] . "</td>";
			echo "<td><input type='submit' name='view' value='VIEW'/></td>";
			echo "<td><input type='submit' name='delete' value='DELETE'/></td></tr></form>";
		}
	}
}

//unctio
?>
