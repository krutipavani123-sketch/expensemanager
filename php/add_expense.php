<?php

include 'mydb.php';


if (isset($_POST['btn'])) {
    $title = $_POST['title'];
    $amt = $_POST['amt'];
    $categy = $_POST['categy'];
    $note = $_POST['note'];

    $sql = "INSERT INTO expenses(title,amount,category,note)VALUES ('$title','$amt','$categy','$note')";

    if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
}
