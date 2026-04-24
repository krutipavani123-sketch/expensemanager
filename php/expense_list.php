<?php

include 'mydb.php';
include 'navbar.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense List</title>
</head>

<body>

    <form>

        <div class="container">
            <table id="table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Expense</th>
                        <th>Amount</th>
                        <th>Category</th>
                        <th>Note</th>
                        <th>Created Date</th>
                        
                    </tr>

                </thead>
                <tbody id="dataload">

                </tbody>


            </table>
        </div>
    </form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/expense_list.js"></script>
</body>

</html>