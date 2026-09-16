<?php
include("connect.php");
session_start();

if(isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE userName='$userName' AND password='$password'");
    $rows = mysqli_num_rows($query);

    if ($rows == 1) {
        $row = mysqli_fetch_array($query);
        
        // Simpan maklumat ke dalam SESSION
        $_SESSION['loggedin'] = true;
        $_SESSION['userName'] = $row['userName'];

        header("location: homepage.php");
        exit();
    } else {
        header("location: login.php?error=Access Denied");
        exit();
    }
}
?>