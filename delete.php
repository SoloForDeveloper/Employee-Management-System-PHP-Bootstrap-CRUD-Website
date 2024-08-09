<?php
    include './dbcon.php';

    $id=$_GET['id'];

    $query = "DELETE FROM employee WHERE id='$id'";
    $res = mysqli_query($con, $query);

    if($res){
        header('location:home.php');
    }else{
        echo "Failed to delete";
    }
