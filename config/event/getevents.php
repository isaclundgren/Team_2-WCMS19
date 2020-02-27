<?php
// include('config/dbconn.php');

    $sql = "SELECT * FROM event_table";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

