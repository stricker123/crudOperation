<?php
$delete_id=$_GET['id'];
$abc=curl_init();
$ins_array = array('id' =>"$_GET[id]" );
curl_setopt($abc, CURLOPT_URL,"http://localhost/rishov/learnapi/delete1.php");
curl_setopt($abc,CURLOPT_POST, true);
//curl_setopt($cn,CURLOPT_POSTFIELDS, array('id'=>$delete_id));
curl_setopt($abc,CURLOPT_POSTFIELDS, $ins_array);
curl_setopt($abc, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($abc);
curl_close($abc);

if(!$result){
    header("location:reada.php");
}
else {
    echo "Deletion Failed";
}
?>