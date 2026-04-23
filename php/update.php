<?php

include 'mydb.php';
include 'navbar.php';

$expid = $_POST['id'];
$sql = "DELETE FROM expenses WHERE id=$expid";
mysqli_query($conn, $sql);
