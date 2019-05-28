<?php
session_start();
$abc = curl_init();
$ins_array= array(
      'ename'=>$_POST['name'],
      'eadd'=> $_POST['add'],
); 

$ename=$_POST['name'];
// echo $ename;

curl_setopt($abc, CURLOPT_URL,"http://localhost/rishov/learnapi/login.php");
curl_setopt($abc, CURLOPT_POST, true);
curl_setopt($abc, CURLOPT_POSTFIELDS,$ins_array);

curl_setopt($abc, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($abc);
print_r($server_output);
curl_close ($abc);

if($server_output == 1){
    echo "login successful";
    $_SESSION['ename'] = $ename;
     header("location:reada.php");
}

?>