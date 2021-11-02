<?php
session_start();
if(isset($_SESSION['loggedIn'])){
if($_SESSION['loggiedIn'] == true){

}}

echo("<p>
Congratulations ".$_SESSION['Username']." you have successfully logged in!!
</p>
<p>
<a href='login.php'>Logout</a> 
</p>
");
    ?>