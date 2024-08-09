<?php
    include './dbcon.php';
    session_start();
    
    if(isset($_SESSION['un'])){
        session_unset();
        session_destroy();
        header('location:index.php');
    }
