<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "finance";

$mysqli_conection = new mysqli($host, $username, $password, $database);

if ($mysqli_conection->connect_error) {
    die("Connection failed: " . $mysqli_conection->connect_error);
}

$query = "CREATE TABLE finance_reports (
                    id INT PRIMARY KEY AUTO_INCREMENT,
                    expense_details TEXT,
                    amount DECIMAL(10, 2),
                    date DATE,
                    category VARCHAR(100),
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                    );
";


// if ($mysqli_conection->query($query) === TRUE) {
//     echo "Table created successfully";
// } else {
//     echo "Error creating table: " . $mysqli_conection->error;
// }