<?php
 $con = mysqli_connect("localhost","root","","customer");
 if(!$con){
     die("connection failed".mysqli_connect_error());
 }
?>