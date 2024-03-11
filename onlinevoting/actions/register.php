<?php
include('connect.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $image = $_FILES['photo']['name'];  // Use $_FILES instead of $_POST for file upload
    $temp_name = $_FILES['photo']['tmp_name'];  // Use $_FILES instead of $_POST for file upload
    $std = $_POST['std'];

    if($password != $cpassword) {
        echo '<script>alert("Password do not match");';
        echo 'window.location="../partials/registeration.php";</script>';
    }else{
        move_uploaded_file($temp_name, "../uploads/$image");
        $sql = "INSERT INTO `userdata` (username, mobile, password, photo, standard, status, votes)
        VALUES ('$username', '$mobile', '$password', '$image', '$std', 0, 0)";


        $result=mysqli_query($con,$sql);
        if($result){
            echo '<script>alert("Registered Successfully");</script>';
            echo '<script>window.location="../";</script>';
        }else{
            die(mysqli_error($con));
        }
    }
}
?>