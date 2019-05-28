<?php
include('connection.php');

$id=$_GET['id'];

$sql="SELECT * FROM `client` WHERE `id`='".$id."'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$name=$row['name'];
$address=$row['address'];

if(isset($_POST['update']))
{
$id= $_GET['id'];
	//echo $ename;
		  $name =$_POST['name'];
		  $address =$_POST['address'];
//echo $nam;

$sql="UPDATE client SET name='$name',address='$address' WHERE id=$id";
if(mysqli_query($con, $sql)) 
{
    header('Location:http://localhost/rishov/api/reada.php');
    exit;
} else 
{
    echo "Error update record";
}
}
?>
<html>
<body>
	<form name="frm" method="post" action="" enctype="multipart/form-data">
 	<table align="center" style="padding-top: 20px;">
 		<tr>
 			<th>Enter Name</th>
 			<td><input type="text" name="name" placeholder="Enter Name" value="<?php echo $row['name'];?>"></td>
 		</tr>
 		<tr>
 			<th>Enter Address</th>
 			<td><textarea type="text" name="address" placeholder="Enter Address" value=""><?php echo $row['address'];?></textarea>
 			</td>
 		</tr>
 			
 			<td colspan="2" align="center"><input type="submit" name="update" value="Update"></td>
 		</tr>
 	</table>
 </form>
</body>
</html>