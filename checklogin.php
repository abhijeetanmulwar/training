<?php 
include("connection.php");
include("regis.php");


if(!empty($_REQUEST) && isset($_REQUEST['login'])){
    if($_REQUEST['username']==''){
        echo "Username required";
        return false;
    }
    if($_REQUEST['password']==''){
        echo "password required";
        return false;

    }
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];


    print_r($checkrecord ="SELECT * FROM userdata WHERE Gmail ='$username' AND Pass ='$password' ");
    $result = mysqli_query($conn, $checkrecord);
    $rowcount = mysqli_num_rows($result);

    if($rowcount !=0){
        session_start();
        $_SESSION['username'] =$username ;
       
        header("Location:doct_contact.php");
}else
{
    echo"login failed";
}
}
?>