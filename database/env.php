<?php


$host = 'localhost';
$dbUser = 'root';
$dbPsk = '';
$db= 'student_management_sys';


try{
    $database = mysqli_connect($host, $dbUser, $dbPsk, $db);
} catch(\Exception $e){
    echo "Something went wrong!";
    exit();
}