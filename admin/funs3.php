<?php
/**
this file contains functions only. JS is included 
update student
update teacher
*/
require_once '../dbcon.php';
echo "<script type='text/javascript' src='../js/adminFun.js'></script>";

if(isset($_POST['updatestd'])){
	$newfname=$_POST['fname']; $newlname=$_POST['lname']; $newclass=$_POST['cls'];
	$newtp1=$_POST['tp1']; $newadd=$_POST['addr']; $newParent=$_POST['paren'];
	
	$sqlq="update student set fname='$newfname', lname='$newlname', class='$newclass', 
	tel1='$newtp1', address='$newadd', parent='$newParent' where sid=".$_POST['usid'];
	
	if(mysqli_query($GLOBALS['conn'], $sqlq)){
		echo "<script type='text/javascript'>";
		echo "alert('Student updated succesfully');";
		echo "window.location.href = 'index.php';";
		echo "</script>"; 
	}
	else{
		echo mysqli_error($GLOBALS['conn']);
		echo "<script type='text/javascript'>";
		echo "alert('Student update error');";
		echo "window.location.href = 'index.php';";
		echo "</script>"; 
	}
}

if(isset($_POST['updatetch'])){
	$newfname=$_POST['name']; $newAddr=$_POST['addr']; $newTP=$_POST['tpno']; $newSub=$_POST['subjects'];
	$newEmail=$_POST['email']; $newQual=$_POST['qual'];
	
	$sqlq="update teacher set name='$newfname', telephone='$newTP', qualification='$newQual', address='$newAddr', email='$newEmail', subject='$newSub' where tid=".$_POST['utid'];
	
	if(mysqli_query($GLOBALS['conn'], $sqlq)){
		echo "<script type='text/javascript'>";
		echo "alert('Teacher updated succesfully');";
		echo "window.location.href = 'index.php';";
		echo "</script>"; 
	}
	else{
		echo mysqli_error($GLOBALS['conn']);
		echo "<script type='text/javascript'>";
		echo "alert('Teacher update error');";
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

				while ($row = mysqli_fetch_array($res)) {
			echo "<tr><input type='text' name='usid' value='".$row['sid']."' hidden/></tr>"; //make student
			echo "<tr><td>Student ID</td> <td><input type='text' name='sid' value='" . $row['sid'] . "' disabled/><td></tr>"; //set as student 
			
			echo "<tr><td>First Name</td> <td><input type='text' name='fname' value='" . $row['fname'] . "'></td></tr>";
			echo "<tr><td>Last Name</td> <td><input type='text' name='lname' value='" . $row['lname'] . "'></td></tr>";
			echo "<tr><td>Class</td> <td><input type='text' name='cls' value='" . $row['class'] . "'></td></tr>";
			echo "<tr><td>Telephone</td> <td><input type='text' name='tp1' value='" . $row['tel1'] . "'></td></tr>";
			echo "<tr><td>Parent name</td> <td><input type='text' name='paren' value='" . $row['parent'] . "'></td></tr>";
			echo "<tr><td>Address</td> <td><textarea name='addr'>".$row['address']."</textarea></td></tr>";
			
		}
		echo "</table>";
		
		echo "<td><input type='submit' name='updatestd' onclick='return confirmU()' value='UPDATE' style='color:red'/></td>";
		echo "<td><input type='button' name='cancel' onclick='redirectMain();' value='Cancel'/></td></tr></form>";	
	}
}

//update teacher details
function updateTch($tchid){

	$sqlq = "select * from teacher where tid=$tchid;"; //sql query
	$res = mysqli_query($GLOBALS['conn'] , $sqlq); //result
	
	if (mysqli_num_rows($res) != 1) //check result
		echo "<p>There is something wrong in system</p>"; //this could not be happen
	else{
		echo "<form method='post' action='funs3.php'>";
		echo "<table id='tbltch'>";

		while ($row = mysqli_fetch_array($res)) {
			echo "<tr><input type='text' name='utid' value='".$row['tid']."' hidden/></tr>"; //make teacher
			echo "<tr><td>Teacher ID</td> <td><input type='text' name='tid' value='" . $row['tid'] . "' disabled/><td></tr>"; //set as student 
			
			echo "<tr><td>Full Name</td> <td><input type='text' name='name' value='" . $row['name'] . "'></td></tr>";
			echo "<tr><td>Qualifications</td> <td><textarea name='qual' >".$row['qualification']."</textarea></td></tr>";
			echo "<tr><td>Subject</td> <td>
			<select name='subjects' >
				<option value='sinhala'>Sinhala</option>
				<option value='religion'>Religion</option>
				<option value='maths''>Mathematics</option>
				<option value='science'>Science</option>
				<option value='history'>History</option>
				<option value='english''>English</option>
			</select>
			</td></tr>";
			
			echo "<tr><td>Email</td> <td><input type='text' name='email' value='" . $row['email'] . "'></td></tr>";
			echo "<tr><td>Telephone</td> <td><input type='text' name='tpno' value='" . $row['telephone'] . "'></td></tr>";
			echo "<tr><td>Address</td> <td><textarea name='addr'>" . $row['address'] . "</textarea></td></tr>";
			
		}
		echo "</table>";
		echo "<td><input type='submit' name='updatetch' onclick='return confirmU()' value='UPDATE' style='color:red'/></td>";
		echo "<td><input type='button' name='cancel' onclick='redirectMain();' value='Cancel'/></td></tr></form>";	
	}
}

?>