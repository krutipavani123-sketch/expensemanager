<?php

include 'mydb.php';

if(isset($_GET['id'])){
    

    $sql = "UPDATE expenses SET title='$title',amount='$amt',category='$categy',note='$note' WHERE id=$expid";

    mysqli_query($conn, $sql);
}



