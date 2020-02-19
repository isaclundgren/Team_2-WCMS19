
<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "team_2";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create event_table
    $sql_event_table = "CREATE TABLE event_table (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    content VARCHAR(30) NOT NULL,
    category VARCHAR(50) NOT NULL,
    event_location VARCHAR(50) NOT NULL,
    event_time VARCHAR(50) NOT NULL,
    userid int(11) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";


    // sql to create event_signup

    $sql_event_signup = "CREATE TABLE event_signup (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        signup_id int(11) NOT NULL,
        signup_firstname VARCHAR(30) NOT NULL,
        signup_lastname VARCHAR(50) NOT NULL,
        signup_mail VARCHAR(50) NOT NULL
        )";
    
        

    // sql to create user_accounts

    $sql_user_accounts = "CREATE TABLE user_accounts (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_mail VARCHAR(50) NOT NULL,
        user_password VARCHAR(30) NOT NULL,
       
        )";

        // use exec() because no results are returned
        $r = $conn->exec($sql_event_table);

        if($r !== false){
            $r = $conn->exec($sql_event_signup);
        }
        if($r !== false){
            $r = $conn->exec($sql_user_accounts);
        }else{
            echo "Tables were created successfully";
        }



       
    }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
    



?>