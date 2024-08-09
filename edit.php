<?php include './navbar.php'; ?>

<form action="./script.php" method="post" class="m-5">
    <h1 class="text-center">Update Employee</h1>
    <?php
        $id=$_GET['id'];
        $query = "SELECT * FROM employee WHERE id='$id'";
        $res = mysqli_query($con, $query);

        if(mysqli_num_rows($res)>0){
            $row = mysqli_fetch_assoc($res);
            ?>

    <input type="number" name="id" value="<?php echo $row['id']; ?>" hidden>

    <div class="form-group">
        <label class="form-label fw-bold">Name</label>
        <input type="text" name="name" class="form-control w-75" value="<?php echo $row['name']; ?>" placeholder="Enter your name.." required>
    </div>

    <div class="form-group">
        <label class="form-label fw-bold">Job Title</label>
        <input type="text" name="job" class="form-control w-75" value="<?php echo $row['job']; ?>" placeholder="Enter your job title.." required>
    </div>

    <div class="form-group">
        <label class="form-label fw-bold">City</label>
        <input type="text" name="city" class="form-control w-75" value="<?php echo $row['city']; ?>" placeholder="Enter your city.." required>
    </div>

    <div class="form-group">
        <label class="form-label fw-bold">Age</label>
        <input type="text" name="age" class="form-control w-75" value="<?php echo $row['age']; ?>" placeholder="Enter your age.." required>
    </div>

    <input type="submit" class="btn btn-primary m-4" name="update" value="Update">

            <?php
        }
    ?>


    
</form>


<?php include './footer.php'; ?>