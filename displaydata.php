<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Main Page</title>
</head>
<body>
    <div class="container">
        <div class = "mb-5 mt-5">
            <a href="http://localhost/CRUD/useradd.php" class = "btn btn-primary">Add User</a>
        </div>
        <?php
            include('./connection.php');
            
            $sql = "SELECT * FROM crud";

            $result = mysqli_query($conn,$sql);
            
            if($result->num_rows > 0){
                echo "<table class = 'table table-stripped table-hover table-light text-center'>";
                    echo "<tr>";
                        echo "<th>PRN NO</th>";
                        echo "<th>Email</th>";
                        echo "<th>Operations</th>";
                    echo "</tr>";
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                        echo "<td>$row[prn]</td>";
                        echo "<td>$row[email]</td>";
                        echo "<td><a href = 'http://localhost/CRUD/updateuser.php?data=$row[prn]' class = 'btn btn-primary me-2'>Update</a><a href = 'http://localhost/CRUD/deleteuser.php?prnnumber=$row[prn]' class = 'btn btn-danger'>Delete</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            }else{
                echo "<div class = 'bg-danger text-light'>0 results</div>";
            }
        ?>
    </div>
</body>
</html>