<?php

session_start();
include('./connect.php');
$studentdata = $_SESSION['studentdata'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
    <?php include('../api/connection.php'); ?>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="background-color: rgb(50, 141, 165);">
<center><h1 style="font-family:cursive;">Homework</h1>
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
            $query = "SELECT * FROM homwork WHERE s_id=$studentdata[s_id]";
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
                            <th><a href="./updatehomework.php?id=<?php echo $row['hid'] ?>">edit</a></th>
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




















































































<!-- <?php

// session_start();
// include('connect.php');
// $hid = $_POST['hid'];
// $homework = $_POST['homework'];
// $complete_homework = $homework + 1;

// $update_homework = mysqli_query($connect, "UPDATE student SET Homework='$complete_homework' WHERE s_id='$hid' ");


// if($update_homework){
//     $user = mysqli_query($connect, "SELECT * FROM student WHERE Homework!=null");
//     $userdata = mysqli_fetch_all($user, MYSQLI_ASSOC);

//     $_SESSION['userdata']['Homework']=$update_homework;
//     $_SESSION['userdata'] = $userdata;

//     echo '
//         <script>
//             // alert("Voting successfull")
//             window.location = "../route/dashboard.php";
//         </script>
//     ';
// }else{
//     echo '
//         <script>
//             alert("some error occured!");
//             window.location = "../route/dashboard.php";
//         </script>
//     ';
// }

?> -->