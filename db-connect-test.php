<?php
$dbHost = "localhost";
$dbName = "your_database_name";
$dbUser = "your_database_username";
$dbPass = "your_database_password";


// PDO
try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "PDO: Successfully connected to $dbName!";
    echo "<br>";
    $conn = null;
} catch(PDOException $e) {
    echo "PDO: Connection failed: " . $e->getMessage();
    echo "<br>";
}


// MySQLi Procedural
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if( $conn ){
    echo "MySQLi Procedural: Successfully connected to $dbName!";
    echo "<br>";
    mysqli_close($conn);
} else{
    echo "MySQLi Procedural: Connection failed: " . mysqli_connect_error();
    echo "<br>";
}
