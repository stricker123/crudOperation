<?php
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
        // header('Content-type:application/json; charset=utf-8');
        header('Access-Control-Allow-Methods: POST');


include 'connection.php';

$_POST = json_decode(file_get_contents("php://input"),true);
$delete_id=$_POST['id'];


$b = "SELECT image FROM client WHERE id=".$delete_id;

$result = mysqli_query($con, $b);

$row = $result->fetch_assoc();
 unlink($row['image']);

$sql="DELETE FROM client WHERE id=$delete_id";
mysqli_query($con,$sql);
echo $delete_id;


?>