<?php
session_start();
session_destroy();

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Access-Control-Allow-Methods: POST, GET');
include 'connection.php';


$id = $_POST['id'];


$sql = "UPDATE `client` SET `token`= '' WHERE `id` ='$id'";

$query = mysqli_query($con,$sql);
echo $sql;
 
?>