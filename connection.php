<?php
$servername = 'localhost';
$user ='root';
$password ='';
$conn = mysqli_connect($servername,$user,$password,"registration");

if(!$conn){
   echo 'fail';
}else{
   // echo 'connection success';
  
}
?>