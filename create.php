<?php include './navbar.php'; ?>

<form action="./script.php" method="post" class="m-5">
    <h1 class="text-center">Add New Employee</h1>

    <div class="form-group">
        <label class="form-label fw-bold">Name</label>
        <input type="text" name="name" class="form-control w-75" placeholder="Enter your name.." required>
    </div>

    <div class="form-group">
        <label class="form-label fw-bold">Job Title</label>
        <input type="text" name="job" class="form-control w-75" placeholder="Enter your job title.." required>
    </div>

    <div class="form-group">
        <label class="form-label fw-bold">City</label>
        <input type="text" name="city" class="form-control w-75" placeholder="Enter your city.." required>
    </div>

    <div class="form-group">
        <label class="form-label fw-bold">Age</label>
        <input type="text" name="age" class="form-control w-75" placeholder="Enter your age.." required>
    </div>

    <input type="submit" class="btn btn-warning m-4" name="create" value="Create">
</form>

<?php include './footer.php'; ?>