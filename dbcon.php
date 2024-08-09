<?php

    $hostname = 'localhost';
    $un = "root";
    $pw = "";
    $dbname ="yt1_empmgt";

    $con = mysqli_connect($hostname,$un,$pw,$dbname) or die("Failed to connect");