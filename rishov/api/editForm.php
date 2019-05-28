<!DOCTYPE html>
<html>
<head>
	<title>Edit form</title>
</head>
<body>
<?php

$ins_array= array(
    'id'=>$_GET['id'],
); 

    $api_url = "http://localhost/rishov/learnapi/edshow.php";
    $abc = curl_init($api_url);
    curl_setopt($abc, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($abc, CURLOPT_POSTFIELDS, $ins_array);
    $result=curl_exec($abc);
    curl_close($abc);
    
    $read=json_decode($result);
    $obj=$read->record;
     $name = $obj[0]->name;
    $address = $obj[0]->address;
    
    // print_r($address);


?>

 <form method="post" action="edita.php" enctype="multipart/form-data">
 	<table>
        <tr>
 			<th>Enter Name</th>
 			<td><input type="text" name="name" placeholder="Enter Name" value="<?php echo $name;?>"></td>
 		</tr>
 		<tr>
 			<th>Enter Name</th>
 			<td><input type="text" name="name" placeholder="Enter Name" value="<?php echo $address;?>"></td>
 		</tr>
 		<tr>
				<th>Profile Picture</th>
				<td><input type = "file" name ="pic" id="pic" value=""></td>
				</tr>
 		<tr>
 			
 			<td colspan="2" align="center"><input type="submit" name="update" value="Update"></td>
 		</tr>
 	</table>
 </form>

</body>
</html>