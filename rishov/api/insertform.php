<!DOCTYPE html>
<html>
<head>
	<title>Registrationform</title>
</head>
<body>
 <form method="post" action="insert.php" enctype="multipart/form-data">
 	<table>
 		<tr>
 			<th>Enter Name</th>
 			<td><input type="text" name="name" placeholder="Enter Name"></td>
 		</tr>
 		<tr>
 			<th>Enter Address</th>
 			<td><textarea name="address" placeholder="Enter Address"></textarea>
 			</td>
 		</tr>
		 <tr>
				<th>Profile Picture</th>
				<td><input type = "file" name ="pic" id="pic" value="pic"></td>
				</tr>
 		<tr>
 			<td colspan="2" align="center"><input type="submit" name="sub" value="Insert"></td>
 		</tr>
 	</table>
 </form>
</body>
</html>