<!DOCTYPE html>
<html>
    <head>
        <title>User Add</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class = "container">
            <div class = "fs-3 d-flex justify-content-between">
                <div>User Data</div>
                <div><a href="http://localhost/CRUD/displaydata.php" class = "btn btn-danger">Main Page</a></div>
            </div>
            <form action = "<?php $_SERVER['PHP_SELF']; ?>" method = "post">
            <?php
                if(isset($_POST['insert'])){
                include('./connection.php');
                $prn = $_POST['exampleFormControlInput1'];
                $email = $_POST['exampleFormControlInput2'];

                $sql = "INSERT INTO crud(prn,email) VALUES('{$prn}','{$email}')";

                $result = mysqli_query($conn,$sql);

                if($result){
                    echo "<div class = 'bg-success text-light'>Data Inserted</div>";
                }else{
                    echo "<div class = 'bg-danger text-light'>Error</div>";
                }
                }
            ?>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">PRN NUMBER</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="21UCS302" name = "exampleFormControlInput1">  
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" name = "exampleFormControlInput2">  
                </div>
                <div class="container text-center">
                    <input type="submit" value="Insert" class="btn btn-success" name = "insert"/>
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div>
            </form>
        </div>
    </body>
</html>