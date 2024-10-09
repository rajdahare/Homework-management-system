<?php 

session_start();
include('../api/connect.php');

if(!isset($_SESSION['studentdata'])){
    header("location: ../");
}

$studentdata = $_SESSION['studentdata'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div id="profile" style="background-color:skyblue; margin-top:100px; width:30%; padding:20px; border-radius:10px; float:left;">
    
    <center><img src="../uploads/<?php echo $studentdata['photo'] ?>" heigt="100" width="100" style="border-radius:10px;"></center><br><br>
    <b>S_id: </b><?php echo $studentdata['s_id'] ?><br><br>
    <b>Name: </b><?php echo $studentdata['name'] ?><br><br>
    <b>Email: </b><?php echo $studentdata['email'] ?><br><br>
    <!-- <b>Homework:</b><input type="file" value="submit"><br><br> -->
    <center><button style="width:100px; hight:200px; padding:10px; border-radius:10px; background-color: rgb(235, 198, 143);"><a href="../api/homework.php" id="homework">Homework</a></button></center><br>
    <center><button style="width:100px; hight:200px; padding:10px; border-radius:10px; background-color: rgb(235, 198, 143);"><a href="../logout.php" id="homework">Logout</a></button></center>

</div>
    
</body>
</html>