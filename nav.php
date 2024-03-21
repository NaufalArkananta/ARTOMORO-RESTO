<?php
    session_start();

    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/stylenav.css" />

    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <style>
        header {
          background-color: #79480e;
        }
      </style>
      <a href="#" class="Resto">ARTOMORO</a>

      <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php#about-us ">Tentang Kami</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li class="dropdown">
          <a href="#"><i class="bx bxs-user"></i></a>
          <div class="dropdown-content">
            <a href="profile.php">Profile</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <form action="nav.php" method="POST">
              <button type="submit" name="logout">Logout</button>
            </form>
          </div>
        </li>
      </ul>
    </header>
  </body>
</html>
