<!-- Inserting values into event_signup  -->

<?  
    include('../config/dbconn.php');

    $sql="INSERT INTO event_signup(signup_firstname, signup_lastname, signup_mail, event_id) 
    VALUES(:signup_firstname, :signup_lastname, :signup_mail, :event_id)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":signup_firstname", $_POST['signup_firstname']);
    $stmt->bindParam(":signup_lastname", $_POST['signup_lastname']);
    $stmt->bindParam(":signup_mail", $_POST['signup_mail']);
    $stmt->bindParam(":event_id", $_POST['event_id']);

   
    $stmt->execute();

    if($stmt){
        header('location:../index.php');
    }else{
        echo 'failed';
    }

?>