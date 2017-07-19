<?php
/**this file contains functions only
insert student
insert teacher
*/
require_once '../dbcon.php';

if (isset($_POST['studentadd'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$cls=$_POST['cls'];
	$dob=$_POST['dob'];
	$addr=$_POST['addr'];
	$t1=$_POST['tp'];
	$t2=$_POST['tp2'];
	$gend=$_POST['gend'];
	$pht= 10;//$_POST['stphoto'];
	//$sqlq="insert into student values(null,'".$_POST['fname']."','".$_POST['lname']."', '".$ttt."' );";
	
	$sqlq = "insert into student values(null, '$fname', '$lname', '$cls', '$dob', '$addr', '$t1', '$t2', '$gend', $pht);";
	echo $sqlq;

	if (mysqli_query($GLOBALS['conn'], $sqlq)) { //after suxxesful execution of query
		$sql2 = "select max(sid) as mxx from student";
		//get the new student id
		$res = mysqli_query($GLOBALS['conn'], $sql2);
		$row = mysqli_fetch_array($res);
		$newID = $row['mxx'];

		//diplay new student's id and redirect to main page
		echo "<script type='text/javascript'>";
		echo "alert('Student added succesfully. New student ID is $newID');";
		echo "window.location.href = 'index.php';";
		echo "</script>";
		
		//echo "<script>alert('Student added succesfully. New student ID is ".$newID."')</script>";
		//header('Location:./'); //index.php
		//echo "<script>alert('Student added succesfully')</script>"; //working
	} else {
		echo "error inserting the student";
	}

}

if (isset($_POST['teacheradd'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$addr=$_POST['addr'];
	$tel=$_POST['tp'];
	$nic=$_POST['nic'];
	
	$sqlq = "insert into teacher values(null, '$nic', '$fname', '$lname', '$addr', '$tel');";
	//echo $sqlq;

	if (mysqli_query($GLOBALS['conn'], $sqlq)) {
		$sql2 = "select max(tid) as mxx from teacher";
		//get the new student id
		$res = mysqli_query($GLOBALS['conn'], $sql2);
		$row = mysqli_fetch_array($res);
		$newID = $row['mxx'];

		//diplay new teacher's id and redirect to main page
		echo "<script type='text/javascript'>";
		echo "alert('Teacher added succesfully. New teacher ID is $newID');";
		echo "window.location.href = 'index.php';";
		echo "</script>";
		
		//echo "<script>alert('Student added succesfully. New student ID is ".$newID."')</script>";
		//header('Location:./'); //index.php
		//echo "<script>alert('Student added succesfully')</script>"; //working
	} else {
		echo "error inserting the teacher";
	}

}
?>