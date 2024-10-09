<?php 

include('connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];



echo "<br>$cpassword. and. $password ";
if($password==$cpassword){
    move_uploaded_file($tmp_name, "../uploads/$image");
    $insert = mysqli_query($connect, "INSERT INTO student(name,email,password,photo)
              VALUES('$name','$email','$password','$image')");
    if($insert){
        echo '
            <script>
                alert("Registration Sucessfull");   
                window.location = "../index.html";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("some error occured !");
                window.location = "../";
            </script>
        ';
    }

}else{
    echo '
        $cpassword and $password
        <script>
            alert(" $password and confirm $cpassword does not match!");
            window.location = "../route/register.html";
        </script>
    ';
}

?>