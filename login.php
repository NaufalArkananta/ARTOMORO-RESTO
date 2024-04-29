<?php
    include "koneksi.php";
    session_start();

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM pelanggan WHERE username_pelanggan = '$username' AND password_pelanggan = '$password' ";
        $result = $db->query($sql);

        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            $_SESSION["username_pelanggan"] = $data["username_pelanggan"];
            $_SESSION["id_pelanggan"] = $data["id_pelanggan"];
            $_SESSION["is_login"] = true;

            header("location: index.php");
        }
        else{
            echo "<script> 
                    alert('Akun tidak ditemukan')
                    window.location.href = 'login.php'; //ini untuk ketika kita pencet ok di alert akan href ke halaman tertentu 
                  </script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ARTOMORO</title>
    <link rel="stylesheet" href="css/stylelog.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="login.php" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn" name="login">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>