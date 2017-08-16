<?php

 /* session maintain inside right top*/
echo "<div style='float:right; align:left'>";
session_start();
if(isset($_SESSION['user'])){
	echo "Hi, ".$_SESSION['user'].", ";
	echo "<form method='get' action='logout.php'>";
	echo "<a href='admin/index.php'><input type='button' value='Admin Panel'></a><input type='submit' value='logout'>";
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