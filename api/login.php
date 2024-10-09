<?php

session_start();
include('connect.php');

$email = $_POST['email'];
$password = $_POST['password'];


$check = mysqli_query($connect, "SELECT * FROM student WHERE email='$email' AND password='$password' ");

// $query ="SELECT email,password,name,s_id FROM student WHERE email='$_POST[email]' AND password='$_POST[password]'";
// $query_run = mysqli_query($connect,$query);
if(mysqli_num_rows($check)>0){
    $studentdata = mysqli_fetch_array($check);

    $_SESSION['studentdata'] = $studentdata;
        
    while($row = mysqli_fetch_assoc($check)){
        $_SESSION[email] = $row['email'];
        $_SESSION[name] = $row['name'];
        $_SESSION[s_id] = $row['s_id'];
    }
    // echo "<br>";
    // echo $studentdata['s_id']."<br>";
    // echo $studentdata['name']."<br>";
    // echo $studentdata['email']."<br>";

    echo '
        <script>
            window.location = "../route/dashboard.php";
        
        </script>
    ';
}else{
    echo '
        // <script>
        //     alert("Invalid credentials or user not found!");
        //     window.location = "../";
        // </script>
    ';
}

?>