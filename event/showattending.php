<?

    $sql = "SELECT * FROM event_signup";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $attending = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>