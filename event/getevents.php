
<!-- Getting events and looping through each of them in index.php -->
<?

    $sql = "SELECT * FROM event_table";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

  

?>


