<? $sql ="CREATE DATABASE team_2;"?>
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
    $sql = "CREATE TABLE IF NOT EXISTS event_table (
                event_id INT(11) AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                content TEXT(1000) NOT NULL,
                category VARCHAR(255) NOT NULL,
                event_location VARCHAR(255) NOT NULL,
                event_time VARCHAR(255) NOT NULL,
                userid int(11) DEFAULT NULL,
                event_img varchar(255),
                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);
            
            CREATE TABLE IF NOT EXISTS user_accounts (
                id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                user_mail VARCHAR(50) NOT NULL,
                user_password VARCHAR(30) NOT NULL,
                user_admin BOOLEAN);
            
            CREATE TABLE IF NOT EXISTS event_signup (
                signup_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                event_id int(11) NOT NULL,
                FOREIGN KEY (event_id)
                REFERENCES event_table(event_id),
                signup_firstname VARCHAR(30) NOT NULL,
                signup_lastname VARCHAR(50) NOT NULL,
                signup_mail VARCHAR(50) NOT NULL);";
            

    
        $conn->exec($sql);
       
    }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
    
   

?>

