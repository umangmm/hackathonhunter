<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "competition";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE hackalist
(
    id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cost VARCHAR(255),
    end_date DATETIME NOT NULL,
    event_link VARCHAR(255) NOT NULL,
    facebook_link VARCHAR(255),
    gplus_link VARCHAR(255),
    high_schoolers BIT(1),
    host VARCHAR(255) NOT NULL,
    image_link VARCHAR(255),
    last_updated_date DATETIME,
    latitude DOUBLE,
    length INT(11),
    notes VARCHAR(255),
    prize BIT(1),
    size VARCHAR(255),
    start_date DATETIME NOT NULL,
    title VARCHAR(255) NOT NULL,
    travel BIT(1),
    twitter_link VARCHAR(255),
    year INT(11) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table hackalist created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>