<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");
 include('connection.php');
  
 $id = $_POST['id'];

 $sql ="SELECT * FROM `client` WHERE id='$id'";
 $res = mysqli_query($con, $sql);
 $records =  array();
 $records['record'] =  array();
  while($row = mysqli_fetch_array($res))
  {
     extract($row);
     $itemarr = array(
         'id'=> $id,
         'name'=> $name,
         'address' => $address,
         'picture'=>$image
     );
     array_push($records['record'], $itemarr);
  }
  echo json_encode($records);
 ?>
