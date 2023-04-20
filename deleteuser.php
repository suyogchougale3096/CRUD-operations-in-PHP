<?php
    include('./connection.php');
    if(isset($_GET['prnnumber'])){
        $id = $_GET['prnnumber'];
        
        $sql = "DELETE FROM crud WHERE prn = '{$id}'";

        $result = mysqli_query($conn,$sql);

        if($result){
            header('location:http://localhost/CRUD/displaydata.php');
        }else{
            echo "<div class = 'bg-danger text-light'>The data is not deleted.</div>";
        }
    }
?>