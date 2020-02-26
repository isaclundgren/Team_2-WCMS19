
<!-- Getting attending and looping through each of them in index.php -->

<?

    $sql = "SELECT * FROM event_signup";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $attending = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>