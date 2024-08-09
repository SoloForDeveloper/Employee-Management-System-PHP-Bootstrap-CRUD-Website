<?php
    include('./dbcon.php');
    session_start();

    //login
    if(isset($_POST['login'])){
        $un = mysqli_real_escape_string($con,$_POST['username']);
        $pw = mysqli_real_escape_string($con,$_POST['password']);

        $query = "SELECT id FROM user WHERE username='$un' && password='$pw'";
        $res = mysqli_query($con, $query);

        if(mysqli_num_rows($res)>0){
            $_SESSION['un']=$un;
            header('location:home.php');
        }else{
            echo "Failed to login..";
        }
    }

    //create
    if(isset($_POST['create'])){
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $job = mysqli_real_escape_string($con, $_POST['job']);
        $city = mysqli_real_escape_string($con, $_POST['city']);
        $age = mysqli_real_escape_string($con, $_POST['age']);

        $query = "INSERT INTO employee(name,job,city,age) VALUES('$name','$job','$city','$age')";
        $res = mysqli_query($con, $query);

        if($res){
            header('location:home.php');
        }else{
            echo "Failed to add employee";
        }

    }

    //update
    if(isset($_POST['update'])){
        $id=mysqli_real_escape_string($con, $_POST['id']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $job = mysqli_real_escape_string($con, $_POST['job']);
        $city = mysqli_real_escape_string($con, $_POST['city']);
        $age = mysqli_real_escape_string($con, $_POST['age']);

        $query = "UPDATE employee SET name='$name', job='$job', city='$city', age='$age' WHERE id='$id'";
        $res = mysqli_query($con, $query);

        if($res){
            header('location:home.php');
        }else{
            echo "Failed to update";
        }
    }