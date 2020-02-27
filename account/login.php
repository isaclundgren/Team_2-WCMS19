<?php
include('../config/dbconn.php');
include('../templates/header.php');
include('getsignup.php');
session_start();
{

    if(isset($_POST["login"]))
    {
        if(empty($_POST["user_mail"]) ||empty($_POST["user_password"])) {
           $message = '<label>All fields are required</label>'; 
        }
        else
        {
            $sql = "SELECT * FROM user_accounts WHERE user_mail = :user_mail AND user_password = :user_password";
            $stmt = $conn->prepare($sql);
            $stmt->execute(
                array(
                    'user_mail' => $_POST["user_mail"],
                    'user_password' => $_POST["user_password"]
                )
                );
                $count = $stmt->rowCount();
                if($count > 0) 
                {
                    $_SESSION["user_mail"] = $_POST["user_mail"];
                    header("location:../");
                }
                else 
                {
                    $message = '<label>Wrong Data</label>';
                }
        }
    }
}
?>
 <?php
 if(isset($message))
{
    echo '<label class="text-danger">'.$message.'</label>';
}
?>
 <div class="container" 
    style="width:500px;">
    <h3>Login</h3></br />

<form method="post">
    <label>Email</label>
    <input 
    type="text" 
    name="user_mail" 
    class="form-control" />
    <br />

    <label>password</label>
    <input
    type="password"
    name="user_password"
    class="form-control" />
    <br />
    <input 
    type="submit"
    name="login"
    class="waves-effect waves-light btn"
    value="Login" />


</form>