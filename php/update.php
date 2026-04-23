<?php

include 'mydb.php';
include 'navbar.php';

$expid = $_POST['id'];
$title = $_POST['title'];
$amt = $_POST['amt'];
$categy = $_POST['categy'];
$note = $_POST['note'];

$sql = "UPDATE expenses SET title='$title',amount='$amt',category='$categy',note='$note' WHERE id=$expid";

mysqli_query($conn, $sql);
