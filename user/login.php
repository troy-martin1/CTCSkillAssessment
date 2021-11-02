<?php
session_start();
include "config.php";

if(isset($_POST['Username'])){

$uname = mysqli_real_escape_string($con,$_POST['Username']);
$password = mysqli_real_escape_string($con,$_POST['Password']);

if ($uname != "" && $password != ""){
    
    $sql_query = "select count(*) as cntUser from Users where username='".$uname."' and password='".$password."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['Username'] = $uname;
        header('Location: index.php');
    }else{
        echo "Invalid username and password";
    }

}

}
include "login-skeleton.html";
?>