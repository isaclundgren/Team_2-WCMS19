<?php
session_start();
{
    try
    $connect = new PDO("mysql:host=$host; dbname=$team_2", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($POST["login"]))
    {
        if(empty($_POST["username"]) ||empty($_POST["password"])) {
           $message = '<label>All fields are required</label>'; 
        }
        else
        {
            $query = "SELECT * FROM user_accounts WHERE username = :username AND password = :password";
            $statement = $connect->prepare($query);
            $statement->execute(
                array(
                    'username' => $_POST["username"],
                    'password' => $POST["password"]
                )
                );
                $count = $statement->rowCount();
                if($count > 0) {
                    $_SESSION["username"] = $_POST["username"];
                    header("location:login_success.php");
                }
                else {
                    $message = '<label>Wrong Data</label>';
                }
        }
    }
    }
    catch(PDOException 
        $error) {
            $message = $error->getMessage();
    }
<?php 
 include('../config/dbconn');
 include('../templates/header.php');
 ?>
 <?php
 if(isset($message))
{
    echo '<label class="text-danger">'.$message.'</label>';
}
 ?>
 <div class="container" 
    style="width:500px;">
    <h3 align="">Login</h3></br />

<form method="post">
    <label>Username</label>
    <input 
    type="text" 
    name="username" 
    class="form-control" />
    <br />

    <label>Password</label>
    <input
    type="password"
    name="password"
    class="form-control" />
    <br />
    <input 
    type="submit"
    name="login"
    class="btn btn-info"
    value="Login" />


</form>
<?php include('../templates/footer.php')?>