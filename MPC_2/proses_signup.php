
<?php
include "connect.php";
if($_POST){
        $nama = $_POST["nama"];
        $username = $_POST["username"];
        $password= $_POST["password"];
        $sql = "INSERT INTO akun(nama, username, password) VALUES ('".$nama."','".$username."','".$password."')";
        if(mysqli_query($conn, $sql)) {
            header("Location:login.php");
            echo "Sign up berhasil.";
        }
        else{
            echo "Gagal sign up.";
        }
    }
    mysqli_close($conn);
    ?>
