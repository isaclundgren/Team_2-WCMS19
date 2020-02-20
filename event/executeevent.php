<?include('../config/dbconn.php')?>

<?  
    $sql="INSERT INTO event_table (title, content, category, event_location, event_time) 
    VALUES(:title, :content, :category, :event_location, :event_time)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":title", $_POST['title']);
    $stmt->bindParam(":content", $_POST['content']);
    $stmt->bindParam(":category", $_POST['category']);
    $stmt->bindParam(":event_location", $_POST['event_location']);
    $stmt->bindParam(":event_time", $_POST['event_time']);
    $stmt->execute();

    if($stmt){
        header('location:index.php');
    }else{
        echo 'failed';
    }

?>