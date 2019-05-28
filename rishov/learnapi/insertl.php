<?php
          header('Access-Control-Allow-Origin:*');
          header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
          // header('Content-type:application/json; charset=utf-8');
          header('Access-Control-Allow-Methods: POST, GET');
          include 'connection.php';
        
          @mkdir("Gallery");
          $ename = $_POST['ename'];
          $eadd = md5($_POST['eadd']);
          
          $filesize=count($_FILES);
          if($filesize==0){
            $path="";
          }else{
            
            $fname = $_FILES['myimage']['name'];//d.jpg
            $location = $_FILES['myimage']['tmp_name'];

            // $path = "Gallery/".$_FILES['myimage']['name'];
            
           
            $nam1=strrchr($fname,'.');
            $tmp_name=$_FILES['myimage']['tmp_name'];

            $path ='Gallery/';
            $path =$path.time().$nam1;
            move_uploaded_file($_FILES['myimage']['tmp_name'],$path);
          }
          $sql = "INSERT INTO `client` ( `name`, `password`,`image`) VALUES ('".$ename."','".$eadd."','".$path."')";
          mysqli_query($con,$sql);

          echo $sql;
         
          //   $image = $_FILES['myimage']['name'];
          //  echo $image;
          ?>