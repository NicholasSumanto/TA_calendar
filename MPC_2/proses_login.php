<?php
include "connect.php";
if ($_POST){
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $login=mysqli_query($conn,"SELECT * FROM akun WHERE username ='$username' AND password='$pass'");
    $cek = mysqli_num_rows($login);

    if($cek > 0){
            session_start();
            $_SESSION['user']=$username;
            header("location:index.php");
    }
    else{
        echo "<script>alert('Username or password incorrect');
        document.location='login.php';</script>";
    }
}
mysqli_close($conn);
    ?>
