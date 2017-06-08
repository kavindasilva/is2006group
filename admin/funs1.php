<?php

require "../dbcon.php";
//global $conn;

//search
if(isset($_POST['ssearch'])){
	echo $_POST['skey'];
	$sqlq="sele";
}

//search function
function search($tbl, $kword){
	$sqlq="";
}

//delete
if(isset($_POST['delete'])){
	echo "del called<br>";echo $_POST['sid']."<br>";echo $_POST['tid']."<br>";echo $_POST['actor']."<BR>";
	
	if($_POST['actor']=="ss")
		$sql1="delete from student where sid=".$_POST['sid']."";
	elseif($_POST['actor']=="tt")
		$sql1="delete from teacher where tid=".$_POST['tid'];
	
	echo "$sql1";
	
}

//view students list
function viewStudents() {
	$sqlq = "select * from student;"; //sql query
	$res = mysqli_query($GLOBALS['conn'] , $sqlq); //result
	
	if (mysqli_num_rows($res) == 0) //check result
		echo "<p>No students in the table</p>";
	
	else {
		echo "<table >";
		echo "<tr><th>First name</th> <th>Last name</th> <th>Home town</th> </tr>";
		while ($row = mysqli_fetch_array($res)) {
			echo "<form method='post' action='funs1.php'>";
			//echo "<form method='post' action=''>"; //auto refreshing
			
			echo "<tr><input type='text' name='sid' value='" . $row['sid'] . "' hidden/>";
			echo "<input type='text' name='actor' value='ss' hidden/>";
			
			echo "<td>" . $row['fname'] . "</td>";
			echo "<td>" . $row['lname'] . "</td>";
			echo "<td>" . $row['homet'] . "</td>";
			echo "<td><input type='submit' name='view' value='Update'/></td>";
			echo "<td><input type='submit' name='delete' value='DELETE' style='color:red'/></td></tr></form>";	
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
