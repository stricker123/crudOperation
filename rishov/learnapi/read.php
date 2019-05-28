
    <?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
     include 'connection.php';
     
    $sql ="select * from `client`";
     $res = mysqli_query($con, $sql);
     $records =  array();
     $records['record'] =  array();
     while($row = mysqli_fetch_array($res))
     {
        extract($row);
        $itemarr = array(
            'id'=> $id,
            'name'=> $name,
            'password' => $password,
            'picture'=>$image,
            'token'=>$token
        );
        array_push($records['record'], $itemarr);
     }
     echo json_encode($records);
    ?>

