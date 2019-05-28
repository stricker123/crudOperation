<?php 
session_start();
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Access-Control-Allow-Methods: POST, GET');
include('connection.php');

$tokens = $_POST['token'];

// echo $tokens;
$sql = "SELECT * FROM client WHERE token='$tokens'";
    $query = mysqli_query($con,$sql);

    $row = mysqli_num_rows($query);
    
    if($row){
        $records['record']=array(
            'key'=>1,
            );
            echo json_encode($records);
        }
        
        else { $records['record']=array(
            'key'=>0
            );
            echo json_encode($records);
        }



?>