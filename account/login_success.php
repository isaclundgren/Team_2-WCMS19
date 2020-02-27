<?php
session_start();
if(isset($_SESSION["user_mail"]))
{
    echo '<h3>Login Success, Welcome - '.$_SESSION["user_mail"].'</h3>';
    echo '<br /><br /br><a href="logout_success.php">Logout</a>';
}
else {
    header("location:login.php");
}
?>
