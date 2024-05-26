<?php

include ('connection.php');

$query = "SELECT * FROM finance_reports ORDER BY id ASC";

$result = mysqli_query($mysqli_conection, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Finances</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div>
        <table class=" table table-bordered table-striped">
            <thead>
                <th>#</th>
                <th>Expense Detail</th>
                <th>Amount</th>
                <th>Date</th>
            </thead>
            <tbody>
                <?php
                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["expense_details"] . "</td>";
                    echo "<td>" . $row["amount"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "</tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>