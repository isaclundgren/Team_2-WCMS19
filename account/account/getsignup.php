<?

    $sql = "SELECT * FROM user_accounts";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $signups = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

