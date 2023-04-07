<?php 
error_reporting(0);
include 'connection.php';



    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $Date = $_POST['Bdate'];
    $Gender =  $_POST['gend'];
    $Gmail = $_POST['gmai'];
    $mob = $_POST['phone'];
    $message = $_POST['Message'];
    $Dog = $_POST['pets'];


    $sql="INSERT INTO `userdata` (`Fname`, `Lname`, `Date`, `Gender`, `Gmail`, `mobile`, `message`, `Dog`) VALUES ('$Fname', '$Lname',  '$Date',  '$Gender',  '$Gmail',   '$mob',  '$message',  '$Dog')";
   
$result=mysqli_query($conn,$sql);

if($result){
    echo ' success';
    $Fname = "";
    $Lname = "";
    $Date = "";
    $Gender =  "";
    $Gmail = "";
    $mob = "";
    $message = "";
    $Dog = "";
    
}
else{
    echo 'false';
}


    
    ?>