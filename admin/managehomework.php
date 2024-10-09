<?php include('../api/connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../api/connection.php')?>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="background-color: rgb(50, 141, 165);">
    <center><h1 style="font-family:cursive;">All assigned homework</h1>
    <hr><br>
    <table class="table" style="background-color:whitesmoke; width:75vw">
        <tr>
            <th>S.No</th>
            <th>Homework ID</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
            $sno = 1;
            $query = "SELECT * FROM homwork";
            $query_run = mysqli_query($connect,$query);
            if(mysqli_num_rows($query_run)){
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <tr>
                            <th><?php echo $sno ?></th>
                            <th><?php echo $row['hid'] ?></th>
                            <th><?php echo $row['description'] ?></th>
                            <th><?php echo $row['start_date'] ?></th>
                            <th><?php echo $row['end_date'] ?></th>
                            <th><?php echo $row['status'] ?></th>
                            <th><a href="./edithomework.php?id=<?php echo $row['hid'] ?>">edit</a> | <a href="./deletehomework.php?id=<?php echo $row['hid'] ?>">delete</a></th>
                        </tr>
                    <?php
                    $sno = $sno + 1;
                }
            }
        ?>
    </table>
    </center>
    
</body>
</html>