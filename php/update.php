<?php

include 'mydb.php';
include 'navbar.php';

$id = $_GET['id'];

$sql = "SELECT * FROM expenses WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $expid = $_GET['id'];
    $title = $_POST['title'];
    $amt = $_POST['amt'];
    $categy = $_POST['categy'];
    $note = $_POST['note'];

    $sql = "UPDATE expenses SET title='$title',amount='$amt',category='$categy',note='$note' WHERE id='$expid'";

    mysqli_query($conn, $sql);
    header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


</head>

<body>
    <form method="post">
        <div class="container">

            <label>Add Title</label>
            <input type="text" name="title" required><br>

            <label>Amount</label>
            <input type="text" name="amt" required><br>

            <label>Category</label>
            <select name="categy" id="categys">
                <option value="Food">Food</option>
                <option value="Travel">Travel</option>
                <option value="Shopping">Shopping</option>
                <option value="Bills">Bills</option>
                <option value="Others">Others</option>
            </select><br>

            <label>Note</label>
            <input type="text" name="note" required><br>

            <button type="submit" name="update">Update</button>


        </div>
    </form>




</body>

</html>