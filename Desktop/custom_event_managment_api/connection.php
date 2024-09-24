<?php 
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "event"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    				

    // Prepare the SQL statement
     $json= hjson_decode ($input="file_get_content")
    $sql = "INSERT INTO management ( title, description, date, location, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $title =  $_POST["title"];
    $description =  $_POST["description"];
    $date =  $_POST["date"];
    $location =  $_POST["location"];
    $created_at = date("Y-m-d H:i:s"); // Current timestamp
    $updated_at = date("Y-m-d H:i:s"); // Current timestamp

    $stmt->bindParam(1, $title);
    $stmt->bindParam(2, $description);
    $stmt->bindParam(3, $date);
    $stmt->bindParam(3, $location);
    $stmt->bindParam(4, $created_at);
    $stmt->bindParam(4, $updated_at);    
    // Execute the statement
    // Execute the statement
    $stmt->execute();
    echo "New records created successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// ?>
// </div><?php
// header('Location: ../index.php');
// ?>