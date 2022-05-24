<?php
session_start();
require 'dbconn.php';
if (isset($_POST['save_student'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    $query = "INSERT INTO students (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run){
        $_SESSION["message"] = "student created successfully";
        header("Location: index.php");
        exit(0);
    }else{
        $_SESSION["message"] = "student not created successfully";
        header("Location: index.php");
        exit(0);
    }

}