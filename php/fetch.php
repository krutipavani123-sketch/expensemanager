<?php

include 'mydb.php';
include 'navbar.php';

$sql = "SELECT * FROM expenses";
$result = mysqli_query($conn, $sql);

echo json_encode($sql);
