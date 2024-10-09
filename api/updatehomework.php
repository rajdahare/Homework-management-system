<?php
    include('../api/connect.php');
    if(isset($_POST['update'])){
        $query = "UPDATE homwork SET status='$_POST[status]' WHERE hid='$_GET[id]'";
        $query_run = mysqli_query($connect, $query);
        if($query_run){
            echo '
            <script>
                alert("status updated Sucessfull");
                window.location = "../route/dashboard.php";
            </script>
        ';
        }else{
            echo '
            <script>
                alert("Try again");
                window.location = "../route/admindashboard.php";
            </script>
        ';
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Homework</title>
    <?php include('./connection.php')?>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <center><h1>Edit task</h1></center>
    <hr><br>
    <div class="row">
        <div class="col-md-4 m-auto" style="color:white;"><br>
            <h3 style="color:white;">Update Homework</h3>
            <?php 
                session_start();
                $query = "SELECT * FROM homwork WHERE hid=$_GET[id]";
                $query_run = mysqli_query($connect,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="status">
                                <option>-Select-</option>
                                <option>In-Progress</option>
                                <option>Complete</option>
                            </select>
                        </div>
                        <br><br>
                        <input type="submit" class="btn btn-warning" name="update" value="update">
                    </form>
                    <?php
                }
            ?>
        </div>

    </div>
</body>
</html>