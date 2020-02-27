<?php
$sql = "SELECT * FROM user_accounts";
 $stmt = $conn->prepare($sql);
 $stmt->execute();
 $accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
 ?>

