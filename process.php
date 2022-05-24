<?php
session_start();
require 'g.php';
if (isset($_POST['save'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);


    $query = "INSERT INTO users (name,location) VALUES ('$name','$location')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run){
        $_SESSION["message"] = "student created successfully";
        header("Location: index.html");
        exit(0);
    }else{
        $_SESSION["message"] = "student not created successfully";
        header("Location: index.html");
        exit(0);
    }

}

