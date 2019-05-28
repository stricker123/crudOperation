
<?php
session_start();
if(!isset($_SESSION['ename'])){
	header('location:adminlogin.php');
}
?>
<?php
$basepath = "http://localhost/rishov/learnapi/";
$api_url = "http://localhost/rishov/learnapi/read.php";
$abc = curl_init($api_url);

curl_setopt($abc, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS,array('id'=>'4'));
curl_setopt($abc, CURLOPT_RETURNTRANSFER,true);
$server_output = curl_exec($abc);
$error = curl_error($abc);

curl_close ($abc);
$read = json_decode($server_output);
$obj = $read->record;
// print_r($obj);
// echo $error;
?>
<!DOCTYPE html>
<html>
 <head>
  <title>PHP Mysql REST API CRUD</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   
   <h3 align="center">PHP Mysql REST API CRUD</h3>
   <br />
   <div>
		<div align="right" style="margin-bottom:5px;">
			<a type="button" name="add_button" id="add_button" class="btn btn-success btn-xs" href ='insertform.php'>Add</a>
			<a type="button" name="logout_button" id="logout_button" class="btn btn-danger btn-xs" href ='logout.php'>Logout</a>
		</div>
   </div>
   

   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>id</th>
       <th>Name</th>
       <th>Address</th>
	   <th>Picture</th>
       <th>Edit</th>
       <th>Delete</th>
      </tr>
     </thead>
     <tbody>
        
	 <?php
foreach ($obj as $key=>$val) {
	$id = $val->id;
	$name = $val->name;
	$address = $val->address;
	$image = $val->picture;//check
		echo "<tr>
		<td>$id</th>
	<td>$name</td>
	<td>$address</td>
	<td><img src = ".$basepath."".$image." width = 100 height = 70></td>

    <td><a href ='editForm.php?id=$id' class= 'btn btn-success'>Edit</a></td>
    <td><a href = 'delete.php?id=$id' onclick = \"javascript:return confirm('Are You Sure?' )\" class ='btn btn-danger'>Delete</a></td>
    </tr>";
	//print_r($val);
}
?>
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>