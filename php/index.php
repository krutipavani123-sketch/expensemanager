<?php

include 'mydb.php';
include 'navbar.php';
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
    <form method="post" action="add_expense.php">
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

            <button type="submit" name="btn">Add Expense</button>


        </div>
    </form>


    <div class="table-responsive">
        <table id="table" class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Expense</th>
                    <th>Amount</th>
                    <th>Category</th>
                    <th>Note</th>
                    <th>Created Date</th>
                    <th>Action</th>
                </tr>

            </thead>
            <tbody id="dataload">

            </tbody>


        </table>
    </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="../js/expense_list.js"></script>


</body>

</html>