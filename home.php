<?php include('./navbar.php'); ?>
<?php 
    if(!isset($_SESSION['un'])){
        header('location:index.php');
    }
?>
<h1 class="m-5">Employee Details</h1>

<a href="./create.php" class="btn btn-success mx-3">Add Employee</a>

<?php
    $query = "SELECT * FROM employee";
    $res = mysqli_query($con, $query);

    if(mysqli_num_rows($res) > 0){
        ?>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Job Title</th>
                    <th>City</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>
            <?php
                while($row=mysqli_fetch_assoc($res)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['job']."</td>";
                    echo "<td>".$row['city']."</td>";
                    echo "<td>".$row['age']."</td>";
                    
                    $id = $row['id'];
                    echo "<td>";
                    ?>
                    <a href="./edit.php?id=<?php echo $id; ?>" class="btn btn-warning btn-sm mx-2">Edit</a>
                    <a href="./delete.php?id=<?php echo $id ?>"class="btn btn-danger btn-sm mx-2">Delete</a>
                    <?php
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
                </tbody>
            </table>
        <?php
    }
    ?>