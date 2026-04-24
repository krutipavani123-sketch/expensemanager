<?php

include 'mydb.php';


$sql = "SELECT * FROM expenses";
$result = mysqli_query($conn, $sql);

$datas = [];

while ($row = mysqli_fetch_assoc($result)) {
    $datas[] = $row;
}

echo json_encode($datas);
