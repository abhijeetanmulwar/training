<?php

session_start();
$_SESSION['username']='';
header("Location : loginpage.php");
?>