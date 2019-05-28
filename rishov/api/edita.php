<?php


$ins_array = array('id'=>$_POST['id'] ,'name'=>$_POST['name'] ,'address'=>$_POST['address']);
$abc=curl_init();
curl_setopt($abc, CURLOPT_URL, "http://localhost/rishov/learnapi/edital.php");
curl_setopt($abc, CURLOPT_POST, true);
curl_setopt($abc, CURLOPT_POSTFIELDS, $ins_array);
curl_setopt($abc, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($abc);
curl_close($abc);

header("location:reada.php");

?>