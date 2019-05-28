<?php

  $abc = curl_init();
  $filesize=count($_FILES['pic']);
  if($_FILES['pic']['tmp_name'] == ''){
  	$abcdfile = "";
  }else{
  	$abcdfile = new CURLFile($_FILES['pic']['tmp_name'],$_FILES['pic']['type'],$_FILES['pic']['name']);
  }

$ins_array= array(
      'ename'=>$_POST['name'],
      'eadd'=> $_POST['address'],
      'myimage'=>$abcdfile
); 



curl_setopt($abc, CURLOPT_URL,"http://localhost/rishov/learnapi/insertl.php");
curl_setopt($abc, CURLOPT_POST, true);
curl_setopt($abc, CURLOPT_POSTFIELDS,$ins_array);

curl_setopt($abc, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($abc);

curl_close ($abc);

if($server_output){
  header("location:reada.php");
}
else {
  echo "Insertion Failed".mysqli_error($server_output);
}

?>