<?php 
include 'connection.php';



if(!empty($_POST) && isset($_POST['submit']))
{
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Date = $_POST['Date'];
    $Gmail = $_POST['Gmail'];
    $Pass = $_POST['password'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];


    $checkrecord = "SELECT * FROM userdata WHERE Gmail='$Gmail' AND Pass='$Pass'";
    $result = mysqli_query($conn,$checkrecord);
    $rowcount = mysqli_num_rows($result);

    if($rowcount !=0){
        echo "Record Already exits";
        return false;
    }

   



$sql = "INSERT INTO `userdata` (`Fname`, `Lname`, `Date`, `Gmail`, `Pass`, `mobile`, `message`) VALUES ('".$Fname."', '".$Lname."', '".$Date."', '".$Gmail."','".$Pass."','".$mobile."', '".$message."')";

$result=mysqli_query($conn,$sql);
if($result){
    // echo "record inserted"; 
    header("Location:loginpage.php");

}else
{
    echo "wrong";
}


}

?>  

    


