<?php 

session_start();
// $studentdata = $_SESSION['studentdata'];
include('../api/connect.php');

if(!isset($_SESSION['admindata'])){
    header("location: ../");
}

// $studentdata = $_SESSION['studentdata'];
$admindata = $_SESSION['admindata'];
// $id = $admindata['a_id'];
// $id = $studentdata['s_id'];


if(isset($_POST['create_homework'])){
    $query = "INSERT INTO homwork VALUES(null,'$_POST[id]','$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
    $query_run = mysqli_query($connect,$query);
    if($query_run){
        echo '
            <script>
                alert("Homework created Sucessfull");
                window.location = "./admindashboard.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Please try again");
                window.location = "./createhomework.php";
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
    <title>Admin Dashboard</title>
    <?php include('../api/connection.php'); ?>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<center><h1 style="font-family:cursive;">Admin Dashboard</h1></center>
<hr>

<div id="profile" style="background-color:skyblue; margin-top:50px; width:30%; padding:20px; border-radius:10px; margin-left:33%;">
    <center><img src="../uploads/<?php echo $admindata['photo'] ?>" heigt="100" width="100" style="border-radius:10px;"></center><br><br>
    <b>S_id: </b><?php echo $admindata['a_id'] ?><br><br>
    <b>Name: </b><?php echo $admindata['name'] ?><br><br>
    <b>Email: </b><?php echo $admindata['email'] ?><br><br>
    <!-- <b>Homework:</b><input type="file" value="submit"><br><br> -->
    <center><button style="width:200px; hight:200px; padding:10px; border-radius:10px; background-color: rgb(235, 198, 143); hover:green; "><a href="./createhomework.php" id="homework" class="link">Create Homework</a></button></center><br>
    <center><button style="width:200px; hight:200px; padding:10px; border-radius:10px; background-color: rgb(235, 198, 143); hover:green; "><a href="./managehomework.php" id="managehomework" class="link">Manage Homework</a></button></center><br>
    <center><button style="width:200px; hight:200px; padding:10px; border-radius:10px; background-color: rgb(235, 198, 143); hover:green; "><a href="../logout.php" id="managehomework" class="link">Logout</a></button></center>

</div>


    
</body>
</html>