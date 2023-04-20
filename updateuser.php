<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">PRN NUMBER</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php $prn = $_GET['data']; echo $prn; ?>" disabled>  
        </div>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method = "post">
            <?php
                if(isset($_POST['update'])){
                    include('./connection.php');
                    $prnno = $_GET['data'];
                    $email = $_POST['exampleFormControlInput2'];
                    
                    $sql = "UPDATE crud SET email = '{$email}' WHERE prn = '{$prnno}'";

                    $result = mysqli_query($conn,$sql);

                    if($result){
                        header('location:http://localhost/CRUD/displaydata.php');
                    }
                    else{
                        echo "data updates not success";
                    }
                } 
            ?>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" name = "exampleFormControlInput2">  
            </div>
            <div class="container text-center">
                <input type="submit" value="Update" class="btn btn-success" name = "update"/>
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
</html>