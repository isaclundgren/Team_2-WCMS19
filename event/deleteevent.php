
<?include('../config/dbconn.php');?>
<?
    if (isset($_POST["submit"])) {
    $id = $_POST["event_id"];
    $sql = "DELETE FROM event_table WHERE event_id = :event_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':event_id', $id);
    $stmt->execute();

    if($stmt){
        header('location:../index.php');
    }
    }
?>