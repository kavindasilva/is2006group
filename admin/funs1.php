<?php

require "../dbcon.php";
//global $conn;

//search
if(isset($_POST['usearch'])){
	echo $_POST['skey']."<br>"; echo $_POST['stype'];
	if($_POST['stype']=="ss")
		search("std", $_POST['skey']);
	elseif($_POST['stype']=="tt")
		search("tch", $_POST['skey']);
}

//search function
function search($tbl, $kword){
	if($tbl=="std")
		$sqlq="select * from student where lname='".$kword."' or fname='".$kword."' or sid='".$kword."';";
	if($tbl=="tch")
		$sqlq="select * from teacher where lname='".$kword."' or fname='".$kword."' or tid='".$kword."';";
	
	echo $sqlq;
	
	/*
	$res=mysqli_query($GLOBALS['conn'], $sqlq);
	if($res)
		echo "success";
	else {
		echo "error deleting rec";
	}*/
}

//delete
if(isset($_POST['delete'])){
	echo "del called<br>";//echo $_POST['sid']."<br>";echo $_POST['tid']."<br>";echo $_POST['actor']."<BR>";
	
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
		echo "<table id='tblstd'>";
		echo "<tr><th>First name</th> <th>Last name</th> <th>Home town</th> </tr>";
		while ($row = mysqli_fetch_array($res)) {
			echo "<form method='post' action='funs1.php'>";
			//echo "<form method='post' action=''>"; //auto refreshing
			
			echo "<tr><input type='text' name='sid' value='" . $row['sid'] . "' hidden/>"; //make teacher
			echo "<input type='text' name='actor' value='ss' hidden/>"; //set as student 
			
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
		echo "<table id='tbltch'>";
		echo "<tr><th>First name</th> <th>Last name</th> <th>Telephone</th> </tr>";
		while ($row = mysqli_fetch_array($res)) {
			echo "<form method='post' action='funs1.php'>";
			//echo "<form method='post' action=''>"; //auto refreshing
			
			echo "<tr><input type='text' name='tid' value='" . $row['tid'] . "' hidden/>"; //make teacher
			echo "<input type='text' name='actor' value='tt' hidden/>"; //set as teacher
			
			echo "<td>" . $row['fname'] . "</td>";
			echo "<td>" . $row['lname'] . "</td>";
			echo "<td>" . $row['telno'] . "</td>";
			echo "<td><input type='submit' name='view' value='Update'/></td>";
			echo "<td><input type='submit' name='delete' value='DELETE' style='color:red'/></td></tr></form>";	
		}
		echo "</table>";
	}
}

//unctio
?>
