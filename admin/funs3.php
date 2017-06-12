<?php
//this file contains functions only. JS is included but not executed
require_once '../dbcon.php';
echo "<script type='text/javascript' src='../js/adminFun.js'></script>";

if(isset($_POST['updatestd'])){
	$newfname=$_POST['fname']; $newlname=$_POST['lname']; $newHT=$_POST['homet'];
	$sqlq="update student set fname='$newfname', lname='$newlname', homet='$newHT' where sid=".$_POST['usid'];
	
	if(mysqli_query($GLOBALS['conn'], $sqlq)){
		echo "<script type='text/javascript'>";
		echo "alert('Student updated succesfully');";
		echo "window.location.href = 'index.php';";
		echo "</script>"; 
	}
}

if(isset($_POST['updatetch'])){
	$newfname=$_POST['fname']; $newlname=$_POST['lname']; $newTP=$_POST['tpno'];
	$sqlq="update teacher set fname='$newfname', lname='$newlname', telno='$newTP' where tid=".$_POST['utid'];
	
	if(mysqli_query($GLOBALS['conn'], $sqlq)){
		echo "<script type='text/javascript'>";
		echo "alert('Teacher updated succesfully');";
		echo "window.location.href = 'index.php';";
		echo "</script>"; 
	}
}


//update student details
function updateStd($stdid){
	//echo "update $stdid";
	$sqlq = "select * from student where sid=$stdid;"; //sql query
	$res = mysqli_query($GLOBALS['conn'] , $sqlq); //result
	
	if (mysqli_num_rows($res) != 1) //check result
		echo "<p>There is something wrong in system</p>"; //this could not be happen
	else{
		echo "<form method='post' action='funs3.php'>";
		echo "<table id='tblstd'>";
		//echo "<tr><th>First name</th> <th>Last name</th> <th>Home town</th> </tr>";
		while ($row = mysqli_fetch_array($res)) {
			echo "<tr><input type='text' name='usid' value='".$row['sid']."' hidden/></tr>"; //make student
			echo "<tr><td>Student ID</td> <td><input type='text' name='sid' value='" . $row['sid'] . "' disabled/><td></tr>"; //set as student 
			
			echo "<tr><td>First Name</td> <td><input type='text' name='fname' value='" . $row['fname'] . "'></td></tr>";
			echo "<tr><td>Last Name</td> <td><input type='text' name='lname' value='" . $row['lname'] . "'></td></tr>";
			echo "<tr><td>Home Town</td> <td><input type='text' name='homet' value='" . $row['homet'] . "'></td></tr>";
			
		}
		echo "</table>";
		echo "<td><input type='submit' name='updatestd' onclick='return confirmU()' value='UPDATE' style='color:red'/></td>";
		echo "<td><input type='button' name='cancel' onclick='redirectMain();' value='Cancel'/></td></tr></form>";	
	}
}

function updateTch($tchid){
	//echo "update $tchid";
	$sqlq = "select * from teacher where tid=$tchid;"; //sql query
	$res = mysqli_query($GLOBALS['conn'] , $sqlq); //result
	
	if (mysqli_num_rows($res) != 1) //check result
		echo "<p>There is something wrong in system</p>"; //this could not be happen
	else{
		echo "<form method='post' action='funs3.php'>";
		echo "<table id='tbltch'>";
		//echo "<tr><th>First name</th> <th>Last name</th> <th>Home town</th> </tr>";
		while ($row = mysqli_fetch_array($res)) {
			echo "<tr><input type='text' name='utid' value='".$row['tid']."' hidden/></tr>"; //make teacher
			echo "<tr><td>Teacher ID</td> <td><input type='text' name='tid' value='" . $row['tid'] . "' disabled/><td></tr>"; //set as student 
			
			echo "<tr><td>First Name</td> <td><input type='text' name='fname' value='" . $row['fname'] . "'></td></tr>";
			echo "<tr><td>Last Name</td> <td><input type='text' name='lname' value='" . $row['lname'] . "'></td></tr>";
			echo "<tr><td>Telephone</td> <td><input type='text' name='tpno' value='" . $row['telno'] . "'></td></tr>";
			
		}
		echo "</table>";
		echo "<td><input type='submit' name='updatetch' onclick='return confirmU()' value='UPDATE' style='color:red'/></td>";
		echo "<td><input type='button' name='cancel' onclick='redirectMain();' value='Cancel'/></td></tr></form>";	
	}
}

?>