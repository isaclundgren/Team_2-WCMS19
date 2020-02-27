
<!-- Getting events and looping through each of them in index.php -->
<?

    $sql = "SELECT * FROM event_table";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

<<<<<<< HEAD
=======
  

>>>>>>> 3175615c55adcac8353f5f0d90db21de5cd21c5e
?>


