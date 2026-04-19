<?php
include '../database/env.php';

$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$number = $_REQUEST['number'];
$payment = $_REQUEST['payment'];


$errors = [];

if(empty($name)){
    $errors['name_error'] = "Pls fill out the name";
} else if(strlen($name) < 3){
    $errors['name_error'] = "Enter a full name";
}

if(empty($number)){
    $errors['num_error'] = "Pls fill out the number";
} else if(strlen($number) == 11){
    $errors['num_error'] = "Enter a accurate number";
}

if(empty($payment)){
    $errors['pay_error'] = "Payment required at first";
} 


if(count($errors) > 0){
    header("Location: ../index.php");
} else{

    include_once '../database/env.php';
    $query = "INSERT INTO `student_management_sys`(`name`, `address`, `number`, `payment`) VALUES ('$name','$address','$number','$payment')";
    $res = mysqli_query($database, $query);
    
    if($res) {
        header("Location: ../student-list.php");
    } else {
        header ("Location: ../index.php");
    }
} 

