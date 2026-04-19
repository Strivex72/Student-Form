<?php
session_start(); 
include '../database/env.php';


$name    = trim($_POST['name'] ?? '');
$address = trim($_POST['address'] ?? '');
$number  = trim($_POST['number'] ?? '');
$payment = trim($_POST['payment'] ?? '');

$errors = [];


if(empty($name)){
    $errors['name_error'] = "Please fill out the name";
} else if(strlen($name) < 3){
    $errors['name_error'] = "Name must be at least 3 characters";
}

if(empty($number)){
    $errors['num_error'] = "Please fill out the number";
} else if(strlen($number) !== 11){ 
    $errors['num_error'] = "Number must be exactly 11 digits";
}

if(empty($payment)){
    $errors['pay_error'] = "Payment selection is required";
}


if(count($errors) > 0){
    $_SESSION['errors'] = $errors; 
    $_SESSION['old_data'] = $_POST; 
    header("Location: ../index.php");
    exit();
} else {
    $query = "INSERT INTO student_management_sys (name, address, number, payment) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($database, $query);
    
 
    mysqli_stmt_bind_param($stmt, "ssss", $name, $address, $number, $payment);
    $res = mysqli_stmt_execute($stmt);

    if($res) {
        header("Location: ../student-list.php");
        exit();
    } else {
        $_SESSION['db_error'] = "Database error: " . mysqli_error($database);
        header("Location: ../index.php");
        exit();
    }
}

