<? 
include('../config/dbconn.php');

$sql="INSERT INTO user_accounts (user_mail, user_password) 
VALUES(:user_mail, :user_password)"; 

    $stmt = $conn->prepare($sql);

    $hashed_user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT); 
  
    $stmt->bindParam(":user_mail", $_POST['user_mail']);
    $stmt->bindParam(":user_password", $hashed_user_password);


    $stmt->execute();

    if($stmt){
         header('location:../index.php');
    }else{
        echo 'failed';
    }

?>