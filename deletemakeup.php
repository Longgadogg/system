<?php
include("connection.php");
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `makeupdb` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: makeup.php"); 
        exit(); 
    } else {
        die(mysqli_error($conn));
    }
} else {
    die("No ID specified for deletion.");
}
