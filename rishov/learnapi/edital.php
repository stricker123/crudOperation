<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
// header('Content-type:application/json; charset=utf-8');
header('Access-Control-Allow-Methods: POST,PUT');


include 'connection.php';


 $id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['password'];

$sql2="UPDATE client SET name='$name',password='$address' WHERE id='$id'";
mysqli_query($con,$sql2);
echo $id;
?>