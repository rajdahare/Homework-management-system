
<?php 

    $connect = mysqli_connect("localhost","root","","collage");

    if($connect){
        echo "Database connected Successfully";
    }else{
        echo "Not Connected!";
    }

?>