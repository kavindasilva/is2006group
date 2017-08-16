<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Styles.css">

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
						<td>Class</td>
						<td>
						<select name="classes" >
							<option value="1">Grade 1</option>
							<option value="2">Grade 2</option>
							<option value="3">Grade 3</option>
							<option value="4">Grade 4</option>
							<option value="5">Grade 5</option>

						</select></td>
					</tr>

					
					<tr>
						<td> Student first Name </td>
						<td><input type="text" name="st_fname" </td>
						
						</tr>
					<tr>
						<td> Student last Name </td>
						<td><input type="text" name="st_lname" </td>
						
						</tr>
						<tr>
						<td> Parent's Name </td>
						<td><input type="text" name="st_par"> </td>
						</tr>
						
						<tr> <td>Gender </td>
						<td>
						<input type="radio" name="gender" value="male" checked>Male
						<input type="radio" name="gender" value="female">Female </td>
					</tr>
					
					<tr>
						<td>Class</td>
						<td><input type="text" name="cls" /></td>
					</tr>
					
					<tr>
						<td>Date of Birth </td>
						<td>
						<input type="date" name="st_BD">
						</td>
					</tr>

					<tr>
						<th colspan="3"><h2>Contact Information</h2></th>
					</tr>
					<tr>
						<td> Contact Number </td>
						<td>
						<input type="tel" name="st_tel" >
						</td>
					</tr>
					
					<tr>
						<td> Address </td>
						<td>
						<input type="address" name="st_ad" >
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
						<input type="submit" name="studentadd" value="Save" />
						<input type="reset" value="Clear" >
						</td>
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