<?php 
include('./dbcon.php'); 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>EMS - Solo Developer</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body class="bg-light">
        <?php
            if(isset($_SESSION['un'])){
                ?>
                <nav class="navbar navbar-expand-lg bg-info">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand text-dark fw-bold" href="./index.php">EMS</a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-link text-dark">Welcome <i class="fw-bolder text-danger"><?php echo $_SESSION['un']; ?></i></li>
                            <li><a class="nav-link fw-bold px-2 text-dark" href="./logout.php">Log Out</a></li>
                        </ul>
                    </div>
                </nav>
                <?php
            }else{
                ?>
                <nav class="navbar navbar-expand-lg bg-info">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand text-dark fw-bold" href="./index.php">EMS</a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="nav-link fw-bold" href="login.php">Login</a></li>
                        </ul>
                    </div>
                </nav>
                <?php
            }
        ?>
    </body>
</html>