<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    "connected";
} else {
    mysqli_connect_error();
}

$exp = "CREATE TABLE IF NOT EXISTS expenses(
    id INT(5)NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title TEXT NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    category VARCHAR(100) NOT NULL,
    note VARCHAR(255) NOT NULL,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


if (mysqli_query($conn, $exp)) {
    "Table Created";
} else {
    mysqli_error($conn);
}
