<?php

echo "<script type='text/javascript' src='../js/adminFun.js'></script>";

//update
function updateStd($stdid){
	echo "update $stdid";
	$sqlq = "select * from student where sid=$stdid;"; //sql query
	$res = mysqli_query($GLOBALS['conn'] , $sqlq); //result
	
	if (mysqli_num_rows($res) != 1) //check result
		echo "<p>There is something wrong in system</p>"; //this could not be happen
	else{
		echo "<form method='post' action='funs1.php'>";
		echo "<table id='tblstd'>";
		//echo "<tr><th>First name</th> <th>Last name</th> <th>Home town</th> </tr>";
		while ($row = mysqli_fetch_array($res)) {
			
			//echo "<form method='post' action='funs1.php' onsubmit='confirmD();'>";
			//echo "<form method='post' action=''>"; //auto refreshing
			
			echo "<tr><input type='text' name='sid' value='" . $row['sid'] . "' hidden/>"; //make teacher
			echo "<input type='text' name='actor' value='ss' hidden/></tr>"; //set as student 
			
			echo "<tr><td>First Name</td> <td><input type='text' name='fname' value='" . $row['fname'] . "'></td></tr>";
			echo "<tr><td>Last Name</td> <td><input type='text' name='lname' value='" . $row['lname'] . "'></td></tr>";
			echo "<tr><td>Home Town</td> <td><input type='text' name='homet' value='" . $row['homet'] . "'></td></tr>";
			
		}
		echo "</table>";
		echo "<td><input type='submit' name='update' onclick='return confirmU()' value='UPDATE' style='color:red'/></td>";
		echo "<td><input type='button' name='cancel' onclick='redirectMain();' value='Cancel'/></td></tr></form>";	
	}
}

function updateTch($tchid){
	echo "update $tchid";
}

?>