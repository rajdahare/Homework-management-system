<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../api/connection.php')?>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <center><h1 style="font-family:cursive;">Create Homework</h1></center>
    <hr>
    <center>
    <div class="row" id="hero">
        <div class="col-md-6" id="temp">
            <br>
            <form action="./admindashboard.php" method="post">
                <div class="form-group">
                    <label>Select Student :</label><br>
                    <select class="form-control" name="id">
                        <option>-select-</option>
                        <?php
                            
                            include('../api/connect.php');
                            $query = "SELECT * FROM student";
                            $query_run = mysqli_query($connect,$query);
                            $_SESSION['homwork']=$query_run;
                            if(mysqli_num_rows($query_run)){
                                while($row = mysqli_fetch_assoc($query_run)){                                    
                                    ?>
                                    <option value="<?php echo $row['s_id'] ?>"><?php echo $row['name'] ?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>
                </div><br>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" row="4" cols="50" name="description" placeholder="mention the homework"></textarea>
                </div><br>
                <div class="form-group">
                    <label>Start date:</label>
                    <input type="date" class="form-control" name="start_date">
                </div><br>
                <div class="form-group">
                    <label>End date:</label>
                    <input type="date" class="form-control" name="end_date">
                </div><br><br>
                <input type="submit" class="btn btn-warning" name="create_homework" value="Create Homework"><br><br>
            </form>
        </div>
    </div>
    </center>





    
</body>
</html>