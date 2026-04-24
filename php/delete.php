<?php

include 'mydb.php';



$exid = $_POST['id'];
$sql = "DELETE * FROM expenses WHERE id=$exid";
mysqli_query($conn, $sql);
header("Location:index.php");
