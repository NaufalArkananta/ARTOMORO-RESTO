<?php
    include "koneksi.php";

    session_start();

    if(isset($_SESSION["is_login"])){
        header("location:index.php");
    }

    if(isset($_POST['register'])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    

        $sql = "INSERT INTO pelanggan (username_pelanggan, email_pelanggan, password_pelanggan) VALUES ('$username', '$email', '$password')";
        if(mysqli_query($db, $sql)){
            header("location:login.php");
        }
        else{
            echo "Register Failed".mysqli.error($db);
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
        <form action="register.php" method="POST">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" require>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="text" placeholder="Email" name="email" require>
                <i class='bx bxs-user'></i>
            </div>
            
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" require>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <button type="submit" class="btn" name="register">Register</button>

            <div class="register-link">
                <p>Have an account? <a href="login.php">Log in</a></p>
            </div>
        </form>
    </div>
</body>
</html>