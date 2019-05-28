<?php 
session_start();
header('Access-Control-Allow-Origin: *');
include('connection.php');

  
    $token = bin2hex(openssl_random_pseudo_bytes(16));
	$username = $_POST[ 'ename'];
    $password = $_POST['eadd'];
    $pass = md5($password);

	$sql = "SELECT * FROM client WHERE name='$username' AND password='$pass' ";
    $query = mysqli_query($con,$sql);

    $row = mysqli_num_rows($query);
    // extract($row);
    if($row){
        while($row=mysqli_fetch_array($query))
        {
            $idd=$row['id'];
        }
        $id=  $token;
        $sql = "UPDATE `client` SET `token`= '$id' WHERE id ='$idd' ";
        $query = mysqli_query($con,$sql);
  
        
        $records['record']=array(
            'token'=> $token,
            'key'=>1,
            'id'=>$idd
            );
            echo json_encode($records);
        }
        
        else { $records['record']=array(
             'sorry'=> "srry",
            'key'=>0
            );
            echo json_encode($records);
        }

    // echo $row;
    // echo  $token;
?>


