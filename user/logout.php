<?php
session_start();
unset($_SESSION['Username']);
unset($_SESSION['Password']);
session_destroy();
header("location:login.php");
?>