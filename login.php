<?php include('navbar.php'); ?>

    <form action="script.php" method="POST" class="m-5">
        <h1 class="text-center">Login</h1>

        <div class="form-group">
            <label class="form-label fw-bold">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username">
        </div>

        
        <div class="form-group">
            <label class="form-label fw-bold">Password</label>
            <input type="password" name="password" id="username" class="form-control" placeholder="Enter your password">
        </div>

        <input type="submit" name="login" value="Login" class="btn btn-danger m-2">
    </form>


<?php include('./footer.php'); ?>