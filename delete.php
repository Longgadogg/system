<?php
include("connection.php");
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `tldb` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: teaching_load.php"); 
        exit(); 
    } else {
        die(mysqli_error($conn));
    }
} else {
    die("No ID specified for deletion.");
}
