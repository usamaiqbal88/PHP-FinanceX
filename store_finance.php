<?php

include ('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expense_details = isset($_POST["expense_details"]) ? $_POST["expense_details"] : '';
    $amount = isset($_POST["amount"]) ? $_POST["amount"] : '';
    $date = isset($_POST["date"]) ? $_POST["date"] : '';
    $category = '';

    $errors = array();
    $response = array();
    if (empty($expense_details)) {
        $errors[] = "Expense Detail is required";
    }
    if (empty($amount)) {
        $errors[] = "Amount is required";
    }
    if (empty($date)) {
        $errors[] = "Date is required";
    }

    if (!empty($errors)) {
        $response['status'] = 'error';
        $response['errors'] = $errors;
        echo json_encode($response);
        exit;
    } else {

        $query = "INSERT INTO finance_reports ( expense_details, amount, date, category) 
                        VALUES ('$expense_details', '$amount', '$date', '$category')";
        if (mysqli_query($mysqli_conection, $query)) {
            $response['status'] = 'success';
            $response['message'] = "Expense stored successfully!";
        } else {
            $response['status'] = 'error';
            $response['errors'] = ["Error storing expense: " . mysqli_error($mysqli_connection)];
        }
        echo json_encode($response);
    }

} else {
    $response['status'] = 'error';
    $response['errors'] = ["Invalid request."];
    echo json_encode($response);
}